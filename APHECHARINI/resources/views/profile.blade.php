@extends('components.header')
@section('title', 'Profile')
@section('content')
    <div class="modal fade" id="EditPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/changePassword" method="POST">
                        @csrf
                        @if (session()->has('passError'))
                            <div class="alert alert-danger">
                                {{ session()->get('passError') }}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="OldPassword" class="form-label">Old Password:</label>
                            <input id="OldPassword" type="password" name="oldPassword" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="NewPassword" class="form-label">New Password:</label>
                            <input id="NewPassword" type="password" name="newPassword" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="ConfirmPassword" class="form-label">Confirm Password:</label>
                            <input id="ConfirmPassword" type="password" name="confirmPassword" class="form-control">
                        </div>
                        @if ($errors->passUpdate->any())
                            @foreach ($errors->passUpdate->all() as $error)
                                <div class="text-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @if ($errors->passUpdate->any() || session()->has('passError'))
        <script>
            modal = new bootstrap.Modal('#EditPassword');
            modal.show()
        </script>
    @endif
    <div class="container my-5 py-5">
        <div class="h-100 my-5  flex-column align-items-center">
            <div>
                <p id="title" class="fs-3 fw-bold d-flex justify-content-center">Profile
                </p>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form method="POST" action="/editProfile" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="image-upload">
                            <label>
                                @if ($profile->imageUrl == '-')
                                    <i class="bi bi-person-circle" style="font-size: 160px"></i>
                                @else
                                    <img src="{{ url('storage/app/public/Profile/' . $profile->imageUrl) }}" style="width: 200px" alt="">
                                @endif
                                <input type="file" name="imgUrl" style="display:none">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        Username:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" placeholder="Username"
                                name="username" value="{{ $profile->username }}" required />
                        </div>
                        Email:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" placeholder="Email" name="email"
                                value="{{ $profile->email }}" required />
                        </div>
                        Phone:
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control" placeholder="Phone" name="phone"
                                value="{{ $profile->phone }}" required />
                        </div>
                        @if ($errors->profileUpdate->any())
                            @foreach ($errors->profileUpdate->all() as $error)
                                <div class="text-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <div class="d-flex mb-3">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <button type="button" class="btn btn-primary ms-4" data-bs-toggle="modal"
                                data-bs-target="#EditPassword">
                                Change Password
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="m-5 p-1">
        <h1> </h1>
    </div>
@endsection
