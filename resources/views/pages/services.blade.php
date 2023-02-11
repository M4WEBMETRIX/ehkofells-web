@extends('layouts.app')
@section('content')

<!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asset/img/carousel-1.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
 <!-- Page Header End -->
       <!-- Bookings -->
        @include('components.bookings')
 		<!-- About Start -->
         @include('components.service')
        <!-- About End -->
 		<!-- Team Start -->
        @include('components.testimonials')
        <!-- Team End -->
@endsection