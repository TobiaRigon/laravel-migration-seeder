@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection

@section('content')
    <h1>Trains: {{count($trains)}}</h1>
    <div class="row">
        @foreach ($trains as $train)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$train->company}}</h5>
                        <p class="card-text">Departure: {{$train->departure_station}}</p>
                        <p class="card-text">Arrival: {{$train->arrival_station}}</p>
                        <p class="card-text">Departure Time: {{$train->departure_time}}</p>
                        <p class="card-text">Arrival Time: {{$train->arrival_time}}</p>
                        <p class="card-text">Train Code: {{$train->train_code}}</p>
                        <p class="card-text">Carriage Count: {{$train->carriage_count}}</p>
                        @if ($train->on_time)
                            <p class="card-text">Status: On Time</p>
                        @else
                            <p class="card-text">Status: Delayed</p>
                        @endif
                        @if ($train->cancelled)
                            <p class="card-text">Status: Cancelled</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
