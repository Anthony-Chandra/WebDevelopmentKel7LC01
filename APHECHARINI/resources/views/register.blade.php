@extends('components.header')
@section('title', 'register')
@section('content')

    <section class="content login-background">
        <div class="container centering">
            <div class="row ">
                <div class="col-md-12 mt-5">
                    <p class="fs-5 text-white">START FOR FREE</p>
                </div>
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-4 text-white fw-bold">Create new account</p>
                </div>
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-5 text-white">Already have an account?<a class="text-primary" href="">Sign in</a>
                    </p>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-4">
                        <form action="">
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control" placeholder="Password" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 my-1 margin-plus">
                    <a class="btn btn-light size" href="/register" role="register">Register </a>
                </div>
            </div>
        </div>
    </section>

@endsection
