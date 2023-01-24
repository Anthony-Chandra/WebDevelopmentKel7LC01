@extends('components.header')
@section('title', 'Login')
@section('content')
    <div class="img-fluid">
        <div id="login-background" class="w-100" style="width: 1526px; height: 1080px;">
        </div>
    </div>
    {{-- <video autoplay muted loop class="img-fluid">
        <source src="storage/assets/live.mp4" type="video/mp4">
    </video> --}}
    <div class="container-fluid my-5  position-absolute">
        <div class="row mt-5 justify-content-center">
            <!-- Card Horizontal Size -->
            <div class="col-xl-5 col-lg-5 col-md-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-1">Register Here!</h1>
                                        <p class="fs-5 text-dark">Already have an account? <a class="text-primary"
                                                href="/login">Sign in</a>
                                        </p>
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $errors->first() }}
                                            </div>
                                        @endif
                                        @if (session()->has('alert'))
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <strong>{{ session('alert') }}</strong>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <form method="POST" action="/registerProcess">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form1Example1" class="form-control"
                                                placeholder="Username" name="username" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form1Example1" class="form-control"
                                                placeholder="Email" name="email" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form1Example2" class="form-control"
                                                placeholder="Password" name="password" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form1Example2" class="form-control"
                                                placeholder="Confirm Password" name="password_confirmation" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="number" id="form1Example2" class="form-control"
                                                placeholder="Phone" name="phone" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example0"
                                                name="role">
                                                <option selected>Choose Role</option>
                                                <option value="lessor">Lessor</option>
                                                <option value="lesse">Lesse</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- @extends('components.header')
@section('title', 'register')
@section('content')

    <section class="content login-background">
        <div class="container centering">
            <div class="row">
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-4 text-white fw-bold">Create New Account For Free</p>
                </div>
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-5 text-white">Already have an account? <a class="text-primary" href="/login">Sign in</a>
                    </p>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-4">

                        <form method="POST" action="/registerProcess">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="text" id="form1Example1" class="form-control" placeholder="Username"
                                    name="username" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control" placeholder="Email"
                                    name="email" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control" placeholder="Password"
                                    name="password" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control"
                                    placeholder="Confirm Password" name="password_confirmation" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="number" id="form1Example2" class="form-control" placeholder="Phone"
                                    name="phone" />
                            </div>
                            <div class="form-outline mb-4">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example0"
                                    name="role">
                                    <option selected>Choose Role</option>
                                    <option value="lessor">Lessor</option>
                                    <option value="lesse">Lesse</option>
                                </select>
                            </div>
                            <div class="col-md-12
                            my-1 margin-plus">
                                <button type="submit" class="btn btn-light mt-4">Sign in</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection --}}
