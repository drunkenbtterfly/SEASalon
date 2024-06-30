<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login_get() {
        return view('login');
    }

    public function login_post(Request $request) {
        $check = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        
        if(!$check) {
            return redirect()->back()->with('status', 'Invalid credentials');
        }
        
        $token = uuid_create();

        auth()->user()->update([
            'token' => $token
        ]);

        if(auth()->user()->role == "admin") {
            return redirect('/admin');
        } else {
            return redirect('/dashboard');
        }     
    }

    public function register_get() {
        return view('register');
    }

    public function register_post(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('status', 'Invalid credentials');    
        }

        $token = uuid_create();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'token' => $token,
            'role' => "customer",
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function logout_post(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    
    }

}
