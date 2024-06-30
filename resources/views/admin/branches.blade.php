@extends('app.dash')
@section('content')

<div class="w-full space-y-1">
    <div class="flex flex-row justify-between items-center">
        <h3 class="text-2xl font-semibold">Branches</h3>
        <a href="/admin/branches/create">
            <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white transition rounded-lg">Add new</button>
        </a>
    </div>
    <table class="table w-full">
        <thead>
            <tr class="border-2">
                <th class="border-2 p-2 bg-slate-900 text-white">Branch</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Opening Time</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Closing Time</th>
                <th class="border-2 p-2 bg-slate-900 text-white">Actions</th>
            </tr>
        </thead>
        <tbody class="overflow-auto">
            @foreach ($branches as $branch)
                <tr class="border-2">
                    <td class="border-2 p-2 text-center">{{ $branch->name }}</td>    
                    <td class="border-2 p-2 text-center">{{ $branch->opening }}:00</td>    
                    <td class="border-2 p-2 text-center">{{ $branch->closing }}:00</td>    
                    <td class="border-2 p-2 text-center flex flex-col sm:flex-row gap-2 w-full justify-center">
                        <a href="/admin/branches/{{ $branch->id }}/edit">
                            @csrf
                            <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 transition text-white rounded-lg">Edit</button>
                        </a>
                        <form action="/admin/branches/{{ $branch->id }}/delete" method="POST">
                            @csrf
                            <button class="px-3 py-2 bg-red-500 hover:bg-red-600 text-white transition rounded-lg">Delete</button>
                        </form>
                    </td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection