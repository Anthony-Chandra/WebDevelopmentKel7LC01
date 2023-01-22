@extends('components.header')
@section('title', 'Catalogue')
@section('content')

    <body class="d-flex flex-column min-vh-100">
        <div class="container mt-5 pt-5">
            <header>
                <h1 class="display-6 my-5 text-center fw-normal">History</h1>
                @if (session()->has('success'))
                    <div class="alert alert-success w-25 mx-auto">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </header>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($histories as $history)
                    <a href="/historyDetail/{{ $history->history_id }}" class="text-dark text-decoration-none">
                        <div class="card h-100 m-3" style="width: 24rem;">
                            <div class="ms-4 mt-2 mb-2">
                                <h4 class="h3">{{ $history->car->car_name }}</h4>
                                @if ($history->status == 'Declined')
                                    <h4 class="h4 text-danger">{{ $history->status }}</h4>
                                @else
                                    <h4 class="h4 text-success">{{ $history->status }}</h4>
                                @endif

                            </div>
                            <div class="card-body">
                                <div class="w-75 mx-auto">
                                    <img src={{ url('storage/Vehicle/' . $history->car->car_picture) }} class="img-fluid"
                                        alt="...">
                                </div>
                                <div class="row justify-content-around">
                                    <div class="col-5">
                                        <div class="text-center mx-1 my-1"><i class="fa-solid fa-gears text-center"
                                                style="font-size: 30px"></i>
                                        </div>
                                        <h1 class="h3 fw-light text-center">{{ $history->car->transmission }}</h1>
                                    </div>
                                    <div class="col-5">
                                        <div class="text-center mx-1 my-1"><i class="fa-solid fa-male text-center"
                                                style="font-size: 30px"></i>
                                        </div>
                                        <h1 class="h3 fw-light text-center">{{ $history->car->seats }} Seats</h1>
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
