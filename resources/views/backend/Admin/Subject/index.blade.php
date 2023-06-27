@extends('backend.layouts.main')
@section('title', 'Subject')
@section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Subject</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Subject</li>
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
                            <h5 class="card-title">Subject Tabs</h5>

                            <!-- course Tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="subject-tab" data-bs-toggle="tab"
                                        data-bs-target="#subject" type="button" role="tab" aria-controls="subject"
                                        aria-selected="true">Subject</button>
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="editSubject-tab" data-bs-toggle="tab"
                                        data-bs-target="#editSubject" type="button" role="tab"
                                        aria-controls="editSubject" aria-selected="false">Edit Subject</button>
                                </li>-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="addSubject-tab" data-bs-toggle="tab"
                                        data-bs-target="#addSubject" type="button" role="tab"
                                        aria-controls="addSubject" aria-selected="false">Add Subject</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="subject" role="tabpanel"
                                    aria-labelledby="subject-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Subject Detail</h5>
                                            <table class="table table-striped datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Year</th>
                                                        <th scope="col">Semester</th>
                                                        <th scope="col">Action></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>OracleI</td>
                                                        <td>MIS</td>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Subject</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Subject.editSubject')

                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End edit Modal-->

                                                            <!-- delete Modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">
                                                                Delete
                                                            </button>
                                                            <div class="modal fade" id="delete" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title">Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure to delete this record?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary">Delete</button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div><!-- End delete Modal-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>OracleII</td>
                                                        <td>MIS</td>
                                                        <td>3</td>
                                                        <td>2</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Subject</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Subject.editSubject')

                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End edit Modal-->

                                                            <!-- delete Modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">
                                                                Delete
                                                            </button>
                                                            <div class="modal fade" id="delete" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title">Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure to delete this record?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary">Delete</button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div><!-- End delete Modal-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>C#</td>
                                                        <td>MIS</td>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Subject</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Subject.editSubject')

                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End edit Modal-->

                                                            <!-- delete Modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">
                                                                Delete
                                                            </button>
                                                            <div class="modal fade" id="delete" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title">Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure to delete this record?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary">Delete</button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div><!-- End delete Modal-->
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="tab-pane fade" id="editSubject" role="tabpanel"
                                    aria-labelledby="editSubject-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Edit Subject</h5>

                                            <!-- Edit Subject Form -->
                                            <!--include('backend.Admin.Subject.editSubject')

                                        </div>
                                    </div>
                                </div>-->
                                <div class="tab-pane fade" id="addSubject" role="tabpanel"
                                    aria-labelledby="addSubject-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Add Subject</h5>

                                            <!-- add Subject form-->
                                            @include('backend.Admin.Subject.addSubject')

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
