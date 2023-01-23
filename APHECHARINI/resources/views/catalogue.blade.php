@extends('components.header')
@section('title', 'Catalogue')
@section('content')

    <body class="d-flex flex-column min-vh-100">
        <div class="container mt-5 pt-5">
            <header class="my-3">
                <h1 class="display-6 mt-5 text-center fw-normal">Vehicle Catalogue</h1>
                <h1 class="h4 text-center fw-lighter text-secondary">Explore out vehicles you might like !</h1>
                <form action="/searching" method="POST">
                    @csrf
                    <div class="input-group justify-content-center">
                        <button type="submit" class="btn btn-light border border-secondary">
                            <i class="fas fa-search"></i>
                        </button>
                        <div class="form-outline w-50">
                            <input type="search" name="searchBar" class="form-control" placeholder="Search vehicle by name!"/>
                        </div>
                    </div>
                </form>
            </header>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($cars as $car)
                    <a href="/detail/{{ $car->car_id }}" class="text-dark my-3">
                        <div class="card h-100 m-3" style="width: 24rem;">
                            <div class="ms-4 mt-2 mb-2">
                                <h4 class="h3">{{ $car->car_name }}</h4>
                                <h4 class="h5">Rp</h4>
                                <h4 class="h4 ms-5">{{ number_format($car->price, 0, ',', '.') }} / day</h4>
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
