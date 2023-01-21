@extends('components.header')
@section('title', 'Catalogue')
@section('content')
    <body class="d-flex flex-column min-vh-100">
        <div class="container mt-5 pt-5">
            <header class="">
                <h1 class="display-6 mt-5 text-center fw-normal">Registered Car</h1>

            </header>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($cars as $car)
                    <a href="/detail/{{$car->car_id}}" class="text-dark">
                        <div class="card h-100 m-3" style="width: 24rem;">
                            <div class="ms-4 mt-2 mb-2">
                                <h4 class="h3">{{ $car->car_name }}</h4>
                                @if ($car->status == 'Maintenance')
                                    <h4 class="h4 text-danger">{{ $car->status }}</h4>
                                @else
                                    <h4 class="h4 text-success">{{ $car->status }}</h4>
                                @endif

                            </div>
                            <div class="card-body">
                                <div class="w-75 mx-auto">
                                    <img src={{ url('storage/Vehicle/' . $car->car_picture) }} class="img-fluid"
                                        alt="...">
                                </div>
                                <div class="row justify-content-around">
                                    <div class="col-5">
                                        <div class="text-center mx-1 my-1"><i class="fa-solid fa-gears text-center"
                                                style="font-size: 30px"></i>
                                        </div>
                                        <h1 class="h3 fw-light text-center">{{ $car->transmission }}</h1>
                                    </div>
                                    <div class="col-5">
                                        <div class="text-center mx-1 my-1"><i class="fa-solid fa-male text-center"
                                                style="font-size: 30px"></i>
                                        </div>
                                        <h1 class="h3 fw-light text-center">{{ $car->seats }} Seats</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="m-5">
                <h1> </h1>
            </div>
        </div>
    </body>
@endsection
