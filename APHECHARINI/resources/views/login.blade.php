@extends('components.header')
@section('title', 'Login')
@section('content')
    <div class="img-fluid">
        <div id="login-background" class="w-100" style="width: 1526px; height: 748px;">
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
                                        <h1 class="h4 text-gray-900 mb-1">Login Here!</h1>
                                        <p class="fs-5 text-dark">Dont Have An Account?<a class="text-primary"
                                                href="/register"> Register</a></p>
                                    </div>
                                    <form method="POST" action="/loginProcess">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $errors->first() }}
                                            </div>
                                        @endif
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form1Example1" class="form-control"
                                                placeholder="Email" name="email"
                                                value='{{ Cookie::get('myCookie') !== null ? Cookie::get('myCookie') : '' }}' />
                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="password" id="form1Example2" class="form-control"
                                                placeholder="Password" name="password" />
                                        </div>
                                        <div class="col-md-4 mx-auto mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="remember" name="remember_me">
                                                <label class="form-check-label text-dark" for="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success col-5" type="submit" id="Submit">Log
                                                in</button>
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
