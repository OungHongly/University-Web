@extends('backend.layouts.mainStudent')
@section('title', 'Result')
@section('main-container')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Exam-Result</h1>
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
            <h5 class="card-title">Your Exam Results</h5>
            <p class="card-text">Result exam for semester1 midterm</p>
        </div>
        <img src="../backend/img/card.jpg" class="card-img-bottom" alt="..." >
    </div><!-- End Card with an image on bottom -->

</main>

@endsection
