@extends('app.dash')
@section('content')

    <form class="w-full flex flex-col" action="" method="POST">
        @csrf
        <div class="form-controls space-y-2">
            <div class="form-control flex flex-col">
                <label class="" for="name">Name</label>
                <input required class="border border-slate-600 rounded px-3 py-1" type="text" id="name" name="name">
            </div>
            
            <div class="form-control flex flex-col">
                <label class="" for="phone">Phone</label>
                <input required class="border border-slate-600 rounded px-3 py-1" type="text" id="phone" name="phone">
            </div>
    
            <div class="form-control flex flex-col">
                <label class="" for="service">Service</label>
                <select class="border border-slate-600 rounded px-3 py-1" name="service_id" id="service">
                    <option value="">Select a Service</option>
                    @foreach ($services as $service)
                        <option value={{ $service->id }}>{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-control flex flex-col">
                <label class="" for="date">Date</label>
                <input required class="border border-slate-600 rounded px-3 py-1" min="{{ $date_now }}" type="date" id="date" name="date">
            </div>

            <div class="form-control flex flex-col">
                <label class="" for="time">Reservation Time in Hour</label>
                <input required class="border border-slate-600 rounded px-3 py-1" value={{ $branch->opening }} min="{{ $branch->opening }}" max="{{ $branch->closing }}" type="number" id="time" name="time">
            </div>


        </div>
        
        <div class="form-submit mt-4">
            <button class="w-full text-white p-2 rounded-lg bg-slate-700 hover:bg-slate-600">Submit</button>
        </div>

    </form>

@endsection
