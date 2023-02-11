@extends('layouts.app')
@section('content')
<?php 
$facebook = "https://www.facebook.com/ehkofellshotel";
$instagram = "https://www.instagram.com/ehkofellshotel";
$twitter = "#";
$youtube = "#";
$likedin = "#";

 ?>


<!-- 1. carousel section -->
@include('components.carousel')

<!-- 2. Booking Start -->
@include('components.bookings')

<!-- 3. About Start -->
@include('components.about')

<!-- 4. Room Start -->
@include('components.room')

<!-- 5. Video Start -->
@include('components.video')

<!-- 6. Service Start -->
@include('components.service')

<!-- 7. Testimonial Start -->
@include('components.testimonials')


@endsection