@extends('layouts.admin')
@section('content')
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+01 4444444</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Gaadi Hire</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="logout" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    </div>
    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"></h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Driver</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="{{asset('img/images-1.jpg')}}" alt="">
                        <h4 class="text-uppercase mb-4">Ram Bhadur</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>10 years</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Yes</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>2500/Day</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="driver-rent">Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4">
                        <img class="img-fluid mb-4" src="{{asset('img/images-2.jpg')}}" alt="">
                        <h4 class="text-uppercase mb-4">Sita</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>5 years</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>No</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>1500/Day</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="driver-rent-one">Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="{{asset('img/image-3.jpg')}}" alt="">
                        <h4 class="text-uppercase mb-4">Hari Bhadur</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>10 Years</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>No</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>1000/Day</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="driver-request-two">Details</a>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->
@endsection


