@extends('app.dash')
@section('content')

    <form class="w-full flex flex-col" action="" method="POST">
        @csrf
        <div class="form-controls space-y-2">
            <div class="form-control flex flex-col">
                <label class="" for="name">Branch Name</label>
                <input value={{ $branch->name }} class="border border-slate-600 rounded px-3 py-1" type="text" id="name" name="name">
            </div>
            
            <div class="form-control flex flex-col">
                <label class="" for="opening">Opening Hour</label>
                <input value={{ $branch->opening }} class="border border-slate-600 rounded px-3 py-1" type="number" min="6" max="18" id="opening" name="opening">
            </div>

            <div class="form-control flex flex-col">
                <label class="" for="closing">Closing Hour</label>
                <input value={{ $branch->closing }} class="border border-slate-600 rounded px-3 py-1" type="number" min="6" max="18" id="closing" name="closing">
            </div>

        </div>
        
        <div class="form-submit mt-4">
            <button class="w-full text-white p-2 rounded-lg bg-slate-700 hover:bg-slate-600">Submit</button>
        </div>

    </form>

@endsection
