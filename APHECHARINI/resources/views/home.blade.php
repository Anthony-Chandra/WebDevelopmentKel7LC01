@extends('components.header')
@section('title', 'home')
@section('content')
    <div class="container my-5 py-5">
        <div class="h-100 my-5 d-flex flex-column align-items-center justify-content-center">
            <div class="row">
                <div class="col-md-6 ps-5">
                    <h1 class="display-4 fw-bold">Get Your Ideal Family Car Book Soon !</h1>
                    <p class="h3 fw-normal">Pleasure Yourself by driving the best premium cars in the town</p>
                    <p class="h3 fw-normal">Book It Now !</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/assets/car.jpeg') }}" alt="">
                </div>
            </div>
            <div class="row mx-5">
                <div class="col-md-3"><img src="{{ asset('storage/assets/mercedes.png') }}"" alt="" class="w-50">
                </div>
                <div class="col-md-3"><img src="{{ asset('storage/assets/toyota_2.png') }}" alt="" class="w-50">
                </div>
                <div class="col-md-3"><img src="{{ asset('storage/assets/jeep.png') }}" alt="" class="w-50">
                </div>
                <div class="col-md-3 d-flex">
                    <div class="h4 align-self-center">And more ...</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="h-100 d-flex flex-column align-items-center justify-content-center">
            <h1 class="display-6 fw-bold my-5">Steps</h1>
            <div class="row mx-5 my-5 d-flex justify-content-around w-100">
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi-car-front text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Select your car</h1>
                    <p class="text-center">Select the most suitable and reliable car for your traveling activity with great
                        specifications.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi bi-book text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Define your booking</h1>
                    <p class="text-center">Book a car that is suitable for your traveling schedule combined with the
                        appropriate rent time.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi-paypal text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Payment</h1>
                    <p class="text-center">Pick a car with the a suitable price and the right method of payment for the
                        transaction</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="h-100 d-flex flex-column align-items-center justify-content-center">
            <h1 class="display-6 fw-bold">Testimony</h1>
            <div class="row mx-5 my-5 d-flex justify-content-around w-100">
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-wrapper d-flex justify-content-center text-dark">
                                <div class="card m-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">Lorem Ipsum is simply dummy text of
                                            the printing
                                            and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s.</p>
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="bi bi-person-circle" style="font-size: 50px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="align-items-center">
                                                    <div class="ratings text-warning">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <h1 class="h6">John</h1>
                                                <p class="text-secondary">2 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">Lorem Ipsum is simply dummy text of
                                            the printing
                                            and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s.</p>
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="bi bi-person-circle" style="font-size: 50px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="align-items-center">
                                                    <div class="ratings text-warning">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <h1 class="h6">Bella</h1>
                                                <p class="text-secondary">5 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">Lorem Ipsum is simply dummy text of
                                            the printing
                                            and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s.</p>
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="bi bi-person-circle" style="font-size: 50px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="align-items-center">
                                                    <div class="ratings text-warning">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <h1 class="h6">Sinta</h1>
                                                <p class="text-secondary">1 week ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-wrapper d-flex justify-content-center text-dark">
                                <div class="card m-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">Lorem Ipsum is simply dummy text of
                                            the printing
                                            and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s.</p>
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="bi bi-person-circle" style="font-size: 50px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="align-items-center">
                                                    <div class="ratings text-warning">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <h1 class="h6">John</h1>
                                                <p class="text-secondary">2 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">Lorem Ipsum is simply dummy text of
                                            the printing
                                            and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s.</p>
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="bi bi-person-circle" style="font-size: 50px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="align-items-center">
                                                    <div class="ratings text-warning">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <h1 class="h6">Bella</h1>
                                                <p class="text-secondary">5 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-4" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">Lorem Ipsum is simply dummy text of
                                            the printing
                                            and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s.</p>
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="bi bi-person-circle" style="font-size: 50px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="align-items-center">
                                                    <div class="ratings text-warning">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <h1 class="h6">Sinta</h1>
                                                <p class="text-secondary">1 week ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
