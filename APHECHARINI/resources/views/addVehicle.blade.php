@extends('components.header')
@section('title', 'Add Vehicle')
@section('content')
    <div class="container my-5 py-5">
        <div class="h-100 my-5  flex-column align-items-center">
            <div>
                <p id="title" class="fs-3 fw-bold d-flex justify-content-center">Profile
                </p>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="/doAddVehicle" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        Vehicle Name:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" name="car_name"
                                value="{{ old('car_name') }}" />
                        </div>
                        Vehicle Transmission:
                        <div class="form-outline mb-4">
                            <div class="form-group">
                                <select class="form-control text-dark" name="transmission" id="Transmission">
                                    <option value="" selected disabled hidden>--Open this select menu--</option>
                                    <option value="Automatic" @if (old('status') == 'Automatic') {{ 'selected' }} @endif>
                                        Automatic</option>
                                    <option value="Manual"
                                        @if (old('status') == 'Manual') {{ 'selected' }} @endif>
                                        Manual</option>
                                </select>
                            </div>
                        </div>
                        Seat Ammount:
                        <div class="form-outline mb-4">
                            <input type="number" id="form1Example1" class="form-control" name="seat"
                                value="{{ old('seat') }}" />
                        </div>
                        Vehicle Status:
                        <div class="form-outline mb-4">
                            <div class="form-group">
                                <select class="form-control text-dark" name="status" id="exampleFormControlSelect1">
                                    <option value="" selected disabled hidden>--Open this select menu--</option>
                                    <option value="Available" @if (old('status') == 'Available') {{ 'selected' }} @endif>
                                        Available</option>
                                    <option value="Maintenance"
                                        @if (old('status') == 'Maintenance') {{ 'selected' }} @endif>
                                        Maintenance</option>
                                </select>
                            </div>
                        </div>
                        Description:
                        <div class="form-outline mb-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        Car Price:
                        <div class="form-outline mb-4">
                            <input type="number" id="form1Example1" class="form-control" name="price"
                                value="{{ old('price') }}" />
                        </div>
                        Car Image:
                        <div class="form-outline mb-4">
                            <input type="file" id="form1Example1" class="form-control" name="car_image" id="car_image" />
                        </div>
                        <div class="form-group  mb-3">
                            <input type="submit" class="btn btn-danger  mb-3" value="Input">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="m-5 p-5">
        <h1> </h1>
    </div>
@endsection
