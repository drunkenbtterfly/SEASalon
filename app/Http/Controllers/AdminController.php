<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $active = Reservation::where('status', 'active')->get()->count();
        $past = Reservation::where('status', 'inactive')->get()->count();
        $members = User::get()->count();
        $reservations = Reservation::where('status', 'active')->get();
        $reservations_old = Reservation::where('status', 'inactive')->get();

        return view('admin.home', compact('active', 'past', 'members', 'reservations', 'reservations_old'));
    }

    public function branch_get() {        
        $branches = Branch::get();
        return view('admin.branches', compact('branches'));
    }

    public function branch_create() {
        $services = Service::get();
        return view('admin.branches.create', compact('services'));
    }

    public function branch_store(Request $request) {
        dd($request);
        Branch::create($request->all());
        return redirect('/admin/branches');
    }

    public function branch_edit(Request $request, $id) {
        $branch = Branch::find($id);
        return view('admin.branches.edit', compact('branch'));
    }

    public function branch_update(Request $request, $id) {
        $branch = Branch::find($id);
        $branch->update($request->all());
        return redirect('/admin/branches');
    }

    public function branch_destroy($id) {
        $branch = Branch::find($id)->delete();
        return redirect()->back();
    }

    public function service_get() {
        $services = Service::get();
        return view('admin.services', compact('services'));
    }

    public function service_create() {
        return view('admin.services.create');
    }

    public function service_store(Request $request) {
        Service::create($request->all());
        return redirect('/admin/services');

    }

    public function service_destroy($id) {
        Service::find($id)->delete();
        return redirect()->back();
    }


    public function service_edit($id) {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));

    }
    public function service_update(Request $request, $id) {
        $service = Service::find($id);
        $service->update($request->all());
        return redirect('/admin/services');
    }



    public function service_accept($id) {
        $reservation = Reservation::find($id);
        $reservation->update([
            'status' => 'inactive'
        ]);
        return redirect('/admin')->with('status', "Reservation Confirmed");
    }

    public function service_cancel($id) {
        $reservation = Reservation::find($id);
        $reservation->update([
            'status' => 'inactive'
        ]);
        return redirect('/admin')->with('status', "Reservation Canceled");
    }

}
