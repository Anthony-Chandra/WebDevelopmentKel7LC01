@extends('components.header')
@section('title', 'home')
@section('content')

    <section class="content">
        <div class="container">
            <div class="row md-12 py-4 my-4">
                <div class="col-md-5 px-5 mx-5">
                    <div class="row">
                        <h1>Get Your Ideal Family Car Book Soon !</h1>
                    </div>
                    <div class="row bigger pt-4">
                        <p>Pleasure Yourself by driving the best premium cars in the town</p>
                        <p> Book It Now !</p>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <img src="{{ asset('assets/car.jpeg') }}" alt="">
                </div>
                {{-- @if (Auth::user() == null)
                    @else
                        <p>Hello {{ Auth::user()->username }}</p>
                    @endif --}}
                <div class="col-md-12 px-5 mx-5 py-3 my-3">
                    <div class="row">
                        <div class="col-md-3"><img src="{{ asset('assets/mersy.png') }}"" alt=""
                                class="width-mercy">
                        </div>
                        <div class="col-md-3"><img src="{{ asset('assets/toyota.png') }}" alt=""
                                class=" width-toyota"></div>
                        <div class="col-md-3"><img src="{{ asset('assets/jeep.png') }}"" alt="" class=" width-jeep">
                        </div>
                        <div class="col-md-3 mt-3">
                            <h4>And more ...</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
