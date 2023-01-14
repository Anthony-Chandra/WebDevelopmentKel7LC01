@extends('components.header')
@section('title', 'register')
@section('content')

    <section class="content login-background">
        <div class="container centering">
            <div class="row ">
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-4 text-white fw-bold">Create New Account For Free</p>
                </div>
                <div class="col-md-12 my-1 py-1 ">
                    <p class="fs-5 text-white">Already have an account? <a class="text-primary" href="/login">Sign in</a>
                    </p>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="col-md-4">
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

@endsection
