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
                    <p class="text-center">Select the most suitable and reliable car for your traveling activity with great specifications.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi bi-book text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Define your booking</h1>
                    <p class="text-center">Book a car that is suitable for your traveling schedule combined with the appropriate rent time.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi-paypal text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Payment</h1>
                    <p class="text-center">Pick a car with the a suitable price and the right method of payment for the transaction</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="h-100 d-flex flex-column align-items-center justify-content-center">
            <h1 class="display-6 fw-bold my-5">Testimony</h1>
            <div class="row mx-5 my-5 d-flex justify-content-around w-100">
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi-car-front text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Select your car</h1>
                    <p class="text-center">Select the most suitable and reliable car for your traveling activity with great specifications.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi bi-book text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Define your booking</h1>
                    <p class="text-center">Book a car that is suitable for your traveling schedule combined with the appropriate rent time.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center mx-3 my-3"><i class="bi bi-paypal text-center" style="font-size: 90px"></i>
                    </div>
                    <h1 class="h3 text-center">Payment</h1>
                    <p class="text-center">Pick a car with the a suitable price and the right method of payment for the transaction</p>
                </div>
            </div>
        </div>
    </div>
@endsection
