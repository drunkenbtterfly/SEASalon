@extends('app.dash')
@section('content')
    <div class="w-full space-y-1">
        <div class="flex flex-row justify-between items-center">
            <h3 class="text-2xl font-semibold">Services</h3>
            <a href="/admin/services/create">
                <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white transition rounded-lg">Add new</button>
            </a>
        </div>
        <table class="table w-full ">
            <thead>
                <tr class="border-2">
                    <th class="border-2 p-2 bg-slate-900 text-white">Service</th>
                    <th class="border-2 p-2 bg-slate-900 text-white">Duration (in minutes)</th>
                    <th class="border-2 p-2 bg-slate-900 text-white">Actions</th>
                </tr>
            </thead>
            <tbody class="overflow-auto">
                @foreach ($services as $service)
                    <tr class="border-2">
                        <td class="border-2 p-2 text-center">{{ $service->name }}</td>
                        <td class="border-2 p-2 text-center">{{ $service->duration }}</td>
                        <td class="border-2 p-2 text-center flex flex-col sm:flex-row gap-2 w-full justify-center">
                            <a href="/admin/services/{{ $service->id }}/edit">
                                @csrf
                                <button
                                    class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 transition text-white rounded-lg">Edit</button>
                            </a>
                            <form action="/admin/services/{{ $service->id }}/delete" method="POST">
                                @csrf
                                <button
                                    class="px-3 py-2 bg-red-500 hover:bg-red-600 text-white transition rounded-lg">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
