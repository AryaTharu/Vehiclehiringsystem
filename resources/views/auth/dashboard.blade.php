
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
    <div class="container-fluid position-relative nav-bar p-0">
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

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"></h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Our Services</h1>
            <div class="container py-5">
                <div class="row mx-0">
                    <div class="col-lg-6 px-0">
                        <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="{{asset('img/banner-left.jpg')}}" alt="">
                            <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want a driver?</h3>
                            <p class="mb-4">Get a best driver at reasonable price</p>
                            <a class="btn btn-primary py-2 px-4" href="driver">Start Now</a>
                            </div>
                        </div>
                     </div>
                        <div class="col-lg-6 px-0">
                            <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                                <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                            <p class="mb-4">Get a quality car at reasonable price</p>
                            <a class="btn btn-primary py-2 px-4" href="list">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="{{asset('img/banner-right.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Banner End -->
@endsection
