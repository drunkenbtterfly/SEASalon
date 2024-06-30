@extends('app.layout')
@section('content')
    <div class="container flex flex-col py-8 items-center w-full max-w-[1200px] mx-auto my-0 ">
        <div class="head text-center space-y-2 flex items-center flex-col">
            <h1 class="text-4xl sm:text-6xl font-bold">Available Services</h1>
            <p class="text-slate-700 w-[75%] sm:w-full">Check out our best services enjoyed by many members</p>
        </div>
        <div class="body mt-8 w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach ($services as $ser)
                <div class="w-full rounded-lg mx-2 flex flex-row justify-between border-2 items-center shadow-lg p-4 select-none">
                    <div class="card-left">
                        <p class="text-2xl font-semibold">{{ $ser->name }}</p>
                        <p class="text-slate-600">{{ $ser->duration }} minutes</p>
                    </div>
                    <div class="card-right">
                        <a href="/dashboard">
                            <button class="w-full px-4 py-2 text-white bg-slate-950 hover:bg-slate-800 transition rounded-lg">Reserve</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
