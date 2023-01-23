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
                <form method="POST" action="/editProfile/{{ $profile->user_id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label>
                                @if ($profile->imageUrl == '-')
                                    <i class="bi bi-person-circle" style="font-size: 160px"></i>
                                @else
                                    <img class=" photo-sizing" src="{{ url('storage/assets/' . $profile->imageUrl) }}"
                                        alt="">
                                @endif
                                {{-- <i class="bi bi-person-circle" style="font-size: 160px"></i> --}}
                                <input type="file" name="imgUrl" style="display:none">
                            </label>
                        </div>

                        <div class="col-md-9">
                            Username:
                            <div class="form-outline mb-4">
                                <input type="text" id="form1Example1" class="form-control" placeholder="Username"
                                    name="username" value="{{ $profile->username }}" />
                            </div>
                            Email:
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control" placeholder="Email"
                                    name="email" value="{{ $profile->email }}" />
                            </div>
                            Phone:
                            <div class="form-outline mb-4">
                                <input type="text" id="form1Example1" class="form-control" placeholder="Phone"
                                    name="phone" value="{{ $profile->phone }}" />
                            </div>
                            {{-- Password:
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example1" class="form-control" placeholder="Password"
                                    name="password" value="{{ $profile->password }}" />
                            </div> --}}
                            <div class="form-group  mb-3">
                                <input type="submit" class="btn btn-danger  mb-3" value="Edit">
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>

    <div class="m-5 p-5">
        <h1> </h1>
    </div>
@endsection
