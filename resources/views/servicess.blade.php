@extends('app.layout')
@section('content')

<div class="flex justify-start items-start ml-7 mt-7">
  <h1 class="text-4xl font-bold text-black">Our Services</h1>
</div>

<div class="container py-7 px-6 space-y-24 flex flex-col sm:items-center sm:flex-col sm:justify-between w-full max-w-[1200px] mx-auto my-0">
        <div class="section-2 flex gap-8 flex-col-reverse mt-6 sm:items-center sm:flex-row  sm:my-16">
            <div class="s2-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Haircuts and Styling</h3>
                    <p class="">
                    At SEASalon, we believe that your hair is a reflection of your personality and style. Our expert stylists are dedicated to providing you with the perfect haircut and styling that not only complements your features but also enhances your unique beauty.
                    </p>
                </div>
                <a href="/login">
                    <button
                    type="submit"
                    class="w-full px-4 py-2 text-gray-700 bg-slate-950 hover:bg-slate-800 transition rounded-lg">Reserve Now</button>
                </a>
            </div>
            <div class="s2-right sm:w-[80%]">
                <img class="rounded-2xl shadow-xl" src="{{ asset('images/haircut.webp') }}" alt="">
            </div>
        </div>

        <div class="section-3 flex gap-8 flex-col sm:items-center sm:flex-row  sm:my-16">
            <div class="s3-right sm:w-[80%]">
                <img class="rounded-2xl shadow-xl" src="{{ asset('images/pedi.jpg') }}" alt="">
            </div>
            <div class="s3-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Manicure and Pedicure</h3>
                    <p class="">
                    At SEASalon, we use high-quality products and the best techniques to ensure you get satisfying, long-lasting results. Our team of professionals is trained to provide gentle and effective treatment, ensuring you feel relaxed and satisfied with our services.
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

    <div class="container py-12 px-6 space-y-24 flex flex-col sm:items-center sm:flex-col sm:justify-between w-full max-w-[1200px] mx-auto my-0 ">
        <div class="section-2 flex gap-8 flex-col-reverse mt-6 sm:items-center sm:flex-row  sm:my-16">
            <div class="s2-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Facial Treatments</h3>
                    <p class="">
                    At our salon, we believe that everyone deserves to have glowing, healthy skin. Our Facial Treatments are designed to rejuvenate and refresh your complexion, leaving you feeling and looking your best. Whether you're seeking to address specific skin concerns or simply want to indulge in some self-care, our experienced estheticians are here to provide the perfect solution for your skin type and needs.
                    </p>
                </div>
                <a href="/login">
                    <button
                    type="submit"
                    class="w-full px-4 py-2 text-gray-700 bg-slate-950 hover:bg-slate-800 transition rounded-lg">Reserve Now</button>
                </a>
            </div>
            <div class="s2-right sm:w-[80%]">
                <img class="rounded-2xl shadow-xl" src="{{ asset('images/ftreat.webp') }}" alt="">
            </div>
        </div>
    </div>

@endsection