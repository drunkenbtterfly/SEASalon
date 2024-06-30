@extends('app.layout')
@section('content')
    <div class="container flex flex-col py-8 items-center w-full max-w-[1200px] mx-auto my-0 ">
        <div class="head text-center space-y-4 flex items-center flex-col">
            <div class="space-y-2 text-center flex flex-col items-center">
                <h1 class="text-4xl sm:text-6xl font-bold">Honest Reviews</h1>
                <p class="text-slate-700 w-[75%] sm:w-full">Check out our satisfied members' ratings and reviews</p>
            </div>
            <a href="/dashboard">
                <button class="w-full px-4 py-2 text-white bg-slate-950 hover:bg-slate-800 transition rounded-lg">Leave a review</button>
            </a>
        </div>
        <div class="body mt-8 w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 mx-8 sm:mx-0 gap-5">
                @foreach ($reviews as $rev)
                    <div class="w-full rounded-lg mx-2 flex flex-col border-2 space-y-3 sm:flex-row justify-between items-start shadow-lg p-4 select-none">
                        <div class="card-left">
                            <p class="text-2xl font-semibold">{{ $rev->name }}</p>
                            <p class="text-slate-600 sm:w-[75%]">{{ $rev->comment }}</p>
                        </div>
                        <div class="card-right relative w-[50%] flex sm:flex-row sm:justify-end">
                            @for ($i = 0; $i < $rev->rating; $i++)
                                <img class="w-[18px] h-[18px]" src="{{ asset('images/star.png') }}" alt="">
                            @endfor
                            @for ($i = 5; $i > $rev->rating; $i--)
                                <img class="w-[18px] h-[18px]" src="{{ asset('images/star-o.png') }}" alt="">
                            @endfor
                        </div>

                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
@endsection
