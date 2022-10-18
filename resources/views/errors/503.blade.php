@extends('layouts.master')

@section('meta-tag')
@endsection

@section('csslinktags')
@endsection

@section('headscripts')
@endsection

@section('title', 'Service Unavailable')

@section('style')
@endsection

@section('content')
<div class="container">
    <div class="jumbotron container border border-2 text-center shadow bg-white mt-3">
        <div class="mt-5 mb-3">
            <img class="d-block m-auto img-fluid" src="{{ asset('assets/images/maintenance/s-m-1.jpeg') }}" alt="Maintenance Image" style="border: none;" />
        </div>
        <div class="text-center mt-3 mb-4">
            <h3 class="text-dark"> Site Under Maintenance </h3>
            <p class="text-info text-muted">
                We are currently under maintenance. <br />
                We will be back shortly. <br />
                Thank you for your patience!
            </p>
        </div>
    </div>
</div>
@endsection

@section('startscripts')
@endsection

@section('endscripts')
@endsection