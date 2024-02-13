@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Trains: {{count($trains)}}</h1>
    @foreach ($trains as $train)
        <li> {{$train -> company}}</li>
    @endforeach
@endsection
