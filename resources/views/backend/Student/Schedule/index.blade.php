@extends('backend.layouts.mainStudent')
@section('title', 'Schedule')
@section('main-container')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Schedule</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">assignment</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <hr class="line">

     <!-- Card with an image on bottom -->
     <div class="card">
        <div class="card-body">
            <h5 class="card-title">Class Schedule</h5>
            <p class="card-text">Schedule for Semester1</p>
        </div>
        <img src="../backend/img/card.jpg" class="card-img-bottom" alt="..." >
    </div><!-- End Card with an image on bottom -->

</main>
@endsection
