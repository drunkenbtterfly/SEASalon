@extends('app.layout')
@section('content')
    {{-- 
    name
    email
    phone
    password
    role
--}}



    <div class="flex w-full items-center justify-center p-8">
        <div class="rounded-lg border py-4 px-2 bg-card text-card-foreground shadow-lg w-full max-w-md" data-v0-t="card">
            <div class="flex flex-col pt-6 items-center text-center">
                <h3 class="text-3xl font-bold">Welcome</h3>
                <p class="text-slate-600 w-[75%]">Log in to access full features of SEA Salon</p>
                @session('status')
                    <p class="mt-2 px-3 rounded bg-red-600 text-white text-center text-lg">{{ session('status') }}</p>
                @endsession
            </div>
            <form action="/register" method="POST" class="w-full">
            <div class="px-4 py-2 space-y-3">
                {{-- Name input --}}
                <div class="space-y-1">
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="name">
                        Name
                    </label>
                    <input
                        class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                        name="name" id="name" placeholder="Enter your name" required="true" type="name" />
                </div>

                {{-- Email input --}}
                <div class="space-y-1">
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="email">
                        Email
                    </label>
                    <input
                        class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                        name="email" id="email" placeholder="Enter your email" required="true" type="email" />
                </div>

                {{-- Phone input --}}
                <div class="space-y-1">
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="phone">
                        Phone Number
                    </label>
                    <input
                        class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                        name="phone" id="phone" placeholder="Enter your phone number" required="true"
                        type="phone" />
                </div>

                {{-- Password input --}}
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="password">
                            Password
                        </label>
                    </div>
                    <input
                        class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                        name="password" id="password" required="true" placeholder="********" type="password" />
                </div>


                <div class="buttons flex flex-col items-center gap-3">
                        @csrf
                        <button
                            class="w-full px-4 py-2 text-white bg-slate-950 hover:bg-slate-800 transition rounded-lg">Register</button>
                            <p class="text-slate-700 text-center">SEASalon member? <a href="/login" class="underline">Log in</a>
                            </p>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
