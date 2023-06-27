@extends('backend.layouts.mainStudent')
@section('title', 'Assignment')
@section('main-container')
<main id="main" class="main">

<div class="pagetitle">
    <h1>Dashboard-Assignment</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">assignment</li>
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
                    <h5 class="card-title">Assignment</h5>

                    <!-- course Tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="subject-tab" data-bs-toggle="tab"
                                data-bs-target="#subject" type="button" role="tab" aria-controls="subject"
                                aria-selected="true">Your Assignment</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="subject" role="tabpanel"
                            aria-labelledby="subject-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Details</h5>
                                    <table class="table table-striped datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Subject Name</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Assignment</th>
                                                <th scope="col">Assign Date</th>
                                                <th scope="col">Teacher</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Deadline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>OracleI</td>
                                                <td>1st Sem</td>
                                                <td><u>SQL.pdf</u></td>
                                                <td>01-01-2023</td>
                                                <td>Mr.nou</td>
                                                <td><!-- edit -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                      Submit
                                                    </button>

                                                    <div class="modal fade" id="edit" tabindex="-1">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="card-title">Submit your work</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"></h5>
                                                                        <!-- edit Form -->
                                                                        @include('backend.Student.Assignment.submit')

                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- End edit Modal-->
                                                </td>
                                                <td>07-01-2023</td>
                                            </tr>
                                       
                                            <tr>
                                                <td>2</td>
                                                <td>Network</td>
                                                <td>1st Sem</td>
                                                <td><u>Setup_window.pdf</u></td>
                                                <td>03-01-2023</td>
                                                <td>Mr.many</td>
                                                <td><!-- edit -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                      Submit
                                                    </button>

                                                    <div class="modal fade" id="edit" tabindex="-1">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="card-title">Submit your work</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"></h5>
                                                                        <!-- edit Form -->
                                                                        @include('backend.Student.Assignment.submit')

                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- End edit Modal-->
                                                </td>
                                                <td>09-01-2023</td>
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
