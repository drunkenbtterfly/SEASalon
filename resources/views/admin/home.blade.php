@extends('app.dash')
@section('content')

@session("status")
<div class="w-full px-4 py-2 bg-slate-400 text-white rounded">
    <p>{{ session('status') }}</p>
</div>
@endsession

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 mt-3">
    <div class="card border-2 bg-slate-200 border-slate-200 p-4 rounded-lg">
        <h3 class="text-md text-slate-500">Active Books</h3>
        <p class="font-bold text-2xl text-slate-700">{{ $active }}</p>
    </div>
    <div class="card border-2 bg-slate-200 border-slate-200 p-4 rounded-lg">
        <h3 class="text-md text-slate-500">Past Reservations</h3>
        <p class="font-bold text-2xl text-slate-700">{{ $past }}</p>
    </div>
    <div class="card border-2 bg-slate-200 border-slate-200 p-4 rounded-lg">
        <h3 class="text-md text-slate-500">Total Members</h3>
        <p class="font-bold text-2xl text-slate-700">{{ $members }}</p>
    </div>
</div>

<div class="w-full mt-8 space-y-1">
    <h3 class="text-2xl font-semibold">Active Reservations</h3>
    <table class="table w-full ">
        <thead>
            <tr class="border-2">
                <th class="border-2 p-2 bg-slate-900 text-white">Name</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Branch</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Date</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Time</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Actions</th>
            </tr>
        </thead>
        <tbody class="">
            @foreach ($reservations as $res)
                <tr class="border-2">
                    <td class="border-2 p-2 text-center">{{ $res->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->branch->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->date }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->time }}</td>    
                    <td class="border-2 p-2 text-center flex flex-col sm:flex-row gap-2 w-full justify-center">
                        <form action="/admin/reservation/{{ $res->id }}/accept" method="POST">
                            @csrf
                            <button class="px-3 py-2 bg-green-600 hover:bg-green-700 transition text-white rounded-lg">Confirm</button>
                        </form>
                        <form action="/admin/reservation/{{ $res->id }}/cancel" method="POST">
                            @csrf
                            <button class="px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white transition rounded-lg">Cancel</button>
                        </form>
                    </td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="w-full mt-8 space-y-1">
    <h3 class="text-2xl font-semibold">Inactive Reservations</h3>
    <table class="table w-full ">
        <thead>
            <tr class="border-2">
                <th class="border-2 p-2 bg-slate-900 text-white">Name</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Branch</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Date</th>
            </tr>
        </thead>
        <tbody class="overflow-auto">
            @foreach ($reservations_old as $res)
                <tr class="border-2">
                    <td class="border-2 p-2 text-center">{{ $res->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->branch->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection