@extends('app.dash')
@section('content')

<div class="content space-y-2">
    <h1 class="text-2xl font-semibold">Pick a branch</h1>
    <div class="grid gap-4 grid-cols-1 sm:grid-cols-4">
        @foreach ($branches as $branch)
            <a class="w-full border-2 border-slate-300 p-4 flex justify-center hover:bg-slate-50 items-center rounded-lg" href="/dashboard/reservation/{{ $branch->id }}">
                <button class="font-semibold text-slate-600">{{ $branch->name }}</button>
            </a>    
        @endforeach
    </div>
</div>

@endsection