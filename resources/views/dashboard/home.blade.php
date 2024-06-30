@extends('app.dash')
@section('content')

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
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

<div class="table w-full mt-8 space-y-1">
    <h3 class="text-2xl font-semibold">Active Reservations</h3>
    <table class="table w-full ">
        <thead>
            <tr class="border-2">
                <th class="border-2 p-2 bg-slate-900 text-white">Branch</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Service</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Date</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Time</th>
            </tr>
        </thead>
        <tbody class="overflow-auto">
            @foreach ($reservations as $res)
                <tr class="border-2">
                    <td class="border-2 p-2 text-center">{{ $res->branch->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->service->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->date }}</td>    
                    <td class="border-2 p-2 text-center">{{ $res->time }}</td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
