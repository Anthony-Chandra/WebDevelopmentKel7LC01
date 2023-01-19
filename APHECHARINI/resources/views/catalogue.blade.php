@extends('components.header')
@section('title', 'home')
@section('content')
    <div class="container my-5 py-5">
        @foreach ($cars as $car)
            <div>
                <h1>{{$car->car_name}}</h1>
            </div>
        @endforeach
    </div>
@endsection
