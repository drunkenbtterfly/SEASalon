<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() {
        return view('reservations');
    }

    public function store(Request $request, string $branch_id) {
        Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'user_id' => auth()->user()->id,
            'branch_id' => $branch_id,
            'service_id' => $request->service_id,
            'date' => $request->date,
            'time' => $request->time,
            'status' => 'active',
        ]);

        return redirect('/dashboard');
    }

    
}
