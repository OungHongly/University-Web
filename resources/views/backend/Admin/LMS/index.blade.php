@extends('backend.layouts.main')
@section('title', 'LMS')
@section('main-container')

    <main id="main" class="main">
        <section class="section">
            <div class="col-lg-12">
                <div class="pagetitle">
                    <h1>Lesson Management System</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">LMS</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <hr class="line">
                <div class="card">

                    <div class="card-body">
                        <!--<h5 class="card-title">Lesson Management System</h5> -->

                        <!-- List group with Advanced Contents -->
                        <div class="list-group">

                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/O II.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Introduction To Oracle II</h3>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/CND I.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Python Programming I</h3>
                                    <small>2 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/CA I.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Computer Animation I</h3>
                                    <small>5 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/Eng 6.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Business Letter Writing</h3>
                                    <small>1 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/CND I.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">System Analysis II</h3>
                                    <small>7 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/CND I.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Linux I</h3>
                                    <small>7 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/CND I.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Configuring Network Devices I</h3>
                                    <small>7 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/CND I.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Web Projects</h3>
                                    <small>7 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="card-image">
                                    <img src="{{ url('backend/img/J II.jpg') }}" alt="">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1">Java Programming II</h3>
                                    <small>7 days ago</small>
                                </div>
                                <p class="mb-1">lessons : 1 of 7 | 2nd Semester</p>
                            </a>
                        </div><!-- End List group Advanced Content -->
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
