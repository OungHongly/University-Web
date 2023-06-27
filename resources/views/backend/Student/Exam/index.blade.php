@extends('backend.layouts.mainStudent')
@section('title', 'Exam')
@section('main-container')

<main id="main" class="main">
        <div class="pagetitle">
            <h1>Exam</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Exam</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <hr class="line">

        <!-- tab-->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Schedule-Exam</h5>

                            <!-- course Tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="exam-tab" data-bs-toggle="tab"
                                        data-bs-target="#exam" type="button" role="tab" aria-controls="exam"
                                        aria-selected="true">Exam</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="exam" role="tabpanel"
                                    aria-labelledby="exam-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Schedule</h5>
                                            <table class="table table-striped datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Teacher</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Start Time</th>
                                                        <th scope="col">End Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Oracle </td>
                                                        <td>Mr.Hort </td>
                                                        <td>12/12/2022</td>
                                                        <td>7:15AM</td>
                                                        <td>8:45AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>C# </td>
                                                        <td>Mr.nou </td>
                                                        <td>12/12/2022</td>
                                                        <td>9:00AM</td>
                                                        <td>10:15AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Java</td>
                                                        <td>Ms.Sorphea </td>
                                                        <td>12/12/2022</td>
                                                        <td>10:15AM</td>
                                                        <td>11:30AM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Default Tabs -->
                </div>
            </div>
        </section>

    </main>
@endsection
