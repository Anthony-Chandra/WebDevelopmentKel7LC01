@extends('components.header')
@section('title', 'home')
@section('content')

    <section class="content login-background">
        <div class="container centering  margin-plus">
            <div class="row ">
                <div class="col-md-12 mt-5">
                    <p class="fs-5 text-white">START FOR FREE</p>
                </div>
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-4 text-white fw-bold">Sign In</p>
                </div>
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-5 text-white">Dont Have An Account?<a class="text-primary" href="/register"> Register</a></p>
                </div>

                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-4">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        <form method="POST" action="/loginProcess">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control" placeholder="Email"
                                    name="email" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control" placeholder="Password"
                                    name="password" />
                            </div>
                            <div class="col-md-12 my-1">
                                <button type="submit" class="btn btn-light mt-4">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
