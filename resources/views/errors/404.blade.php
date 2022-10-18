@extends('layouts.master')
@section('title', 'Page Not Found')
@section('style')
<style>
    #home_button:hover {
        transform: rotateY(360deg);
        transition-delay: 1s;
        transition: transform 1s ease-in-out;
    }
</style>
@endsection
@section('content')
<section style="padding-top: 100px;">
    <div class="container">
        <div class="col-md-8 offset-md-2 text-center">
            <h1 style="font-size: 162px;">404</h1>
            <h2 class="course-heading">Page Not Found!</h2>
            <p> We are sorry, the page you requested could not be found!
                Please go back to the homepage </p>
            <a href="/" class="btn btn-outline-info btn-md" id="home_button">
                Visit <i class="fa fa-home fa-1x"></i>
            </a>
        </div>
    </div>
</section>
@endsection