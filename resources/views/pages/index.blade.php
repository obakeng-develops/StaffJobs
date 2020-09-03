@extends('layouts.app')

@section('content')

    <div class="container-fluid hero text-dark text-center">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-xl-8 d-flex">
                <div class="col-lg-8 col-xl-6 mt-5 pt-5 align-items-center">
                    <h5 class="display-4">Save costs, gain more. StaffDeals.</h5>
                    <p class="lead">Become part of our fast growing e-commerce team.</p>
                    <a href="{{ url('/openings') }}"><button class="btn btn-primary rounded rounded-0">See our current openings.</button></a>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <img src="../public/img/ivana-cajina.jpg" class="landing-img"/>
                </div>
            </div>
        </div>
    </div>

@endsection