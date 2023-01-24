@extends('components.header')
@section('title', 'home')
@section('content')

{{-- .contact-title {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}

.photo-sizing {
    width: 300px;
    height: 300px;
}  --}}
    <div class="d-flex justify-content-center contact-background">
        <div class="my-auto">
            <p class="h1 fw-bold text-light">Contact Us</p>
        </div>
    </div>
    <div class="container p-3 my-3 col-md-6">
        <p class="h1 fw-bold">Get in touch with us</p>
        <p class="h4 fw-normal" style="text-align: justify">Car rental is a web-based application that is used to rent (borrow a car). This application
            aims to make it
            easier for tenants who want to borrow a car to choose a car to rent. And also make it easier for lessors to rent
            out their cars.</p>
    </div>
    <div class="container p-3 my-3 col-md-6">
        <p class="h4 fw-bold"><i class="bi bi-envelope"></i> Email</p>
        <p class="h4 fw-normal">Aphecarini@gmail.com</p>
    </div>
    <div class="container p-3 my-3 col-md-6">
        <p class="h4 fw-bold"><i class="bi bi-telephone-fill"></i> Phone</p>
        <p class="h4 fw-normal">08162912719</p>
    </div>
    <div class="m-5 p-5">
        <h1> </h1>
    </div>
@endsection
