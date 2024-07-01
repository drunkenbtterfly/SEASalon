@extends('app.layout')
@section('content')
    <div class="section-1 flex w-full justify-center p-5 md:p-10">
        <img class="w-full object-cover object-center h-[250px] sm:h-[600px] rounded-2xl" src="{{ asset('images/model.webp') }}" alt="">
    </div>

    <div class="flex flex-col gap-5 justify-center items-center">
        <p class="text-2xl md:text-4xl text-center px-10">Welcome to Sea Salon, a place where your beauty is our top priority. From hair care to skin care, our team of experts is ready to help you look stunning.</p>
        <h1 class="text-2xl md:text-5xl font-bold text-[#1a2737]">"Beauty and Elegance Redefined"</h1>
    </div>
    
    <div class="container py-12 px-6 space-y-24 flex flex-col sm:items-center sm:flex-col sm:justify-between w-full max-w-[1200px] mx-auto my-0 ">
        <div class="section-2 flex gap-8 flex-col-reverse mt-6 sm:items-center sm:flex-row  sm:my-16">
            <div class="s2-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Best services for everyone.</h3>
                    <p class="">
                        SEA Salon, the market leader in Indonesia salon business offers premium services and treatments.
                    </p>
                </div>
                <a href="/servicess">
                    <button
                    type="submit"
                    class="w-full px-4 py-2 text-gray-700 bg-slate-950 hover:bg-slate-800 transition rounded-lg">Explore Services</button>
                </a>
            </div>
            <div class="s2-right sm:w-[80%]">
                <img class="rounded-2xl shadow-xl" src="{{ asset('images/1.webp') }}" alt="">
            </div>
        </div>

        <div class="section-3 flex gap-8 flex-col sm:items-center sm:flex-row  sm:my-16">
            <div class="s3-right sm:w-[80%]">
                <img class="rounded-2xl shadow-xl" src="{{ asset('images/place.jpeg') }}" alt="">
            </div>
            <div class="s3-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Reserve to experience satisfaction.</h3>
                    <p class="">
                        SEA Salon, the market leader in Indonesia salon business offers premium services and treatments.
                    </p>
                </div>
                <a href="/login">
                    <button
                    type="submit"
                    class="w-full px-4 py-2 text-gray-700 bg-slate-950 hover:bg-slate-800 transition rounded-lg">Reserve Now</button>
                </a>
            </div>
        </div>
    </div>

    <div class="flex justify-center item-center">
        <h1 class="text-3xl font-bold">Location</h1>
    </div>

    <div class="container mx-auto p-4 rounded-3xl mb-5">
        <div id="map" class="w-full h-96 bg-gray-300 rounded-3xl"></div>
    </div>
@endsection
