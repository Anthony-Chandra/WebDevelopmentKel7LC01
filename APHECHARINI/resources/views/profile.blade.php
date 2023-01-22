@extends('components.header')
@section('title', 'Profile')
@section('content')
    <div class="container my-5 py-5">
        <div class="h-100 my-5  flex-column align-items-center">
            <div>
                <p id="title" class="fs-3 fw-bold d-flex justify-content-center">Profile
                </p>
            </div>
            @foreach ($profiles as $profile)
                <div class="row">
                    <div class="col-md-3">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="col-md-9">
                        Username:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" placeholder="Username"
                                name="username" value="{{ $profile->username }}" />
                        </div>
                        Email:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" placeholder="Email" name="email"
                                value="{{ $profile->email }}" />
                        </div>
                        Phone:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" placeholder="Phone" name="phone"
                                value="{{ $profile->phone }}" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="m-5 p-5">
        <h1> </h1>
    </div>
@endsection
