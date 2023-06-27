@extends('backend.layouts.main')
@section('title', 'Professor')
@section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Professor</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Professor</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <hr class="line">
        <div class="col-lg-15">
            <div class="row">
                <div class="studentBox">
                    <div class="card-student">
                        Active
                        <h4>0955</h4>
                    </div>
                    <div class="card-student">
                        Draft
                        <h4>0955</h4>
                    </div>
                    <div class="card-student">
                        Trash
                        <h4>0955</h4>
                    </div>
                    <div class="card-student">
                        Drop Out
                        <h4>0955</h4>
                    </div>
                    <div class="card-student">
                        New
                        <h4>0955</h4>
                    </div>
                </div>
                <!-- End Student Box -->
            </div>
        </div>
        <hr class="line">
        <div class="card">
            <div class="card-body">
                <div class="CourseDropdown">
                    <button class="CourseDropbtn">-- Select Course --</button>
                    <div class="CourseDropdown-content">
                        <a href="#">MIS</a>
                        <a href="#">BIT</a>
                        <a href="#">Design</a>
                    </div>
                </div>

                <div class="CourseDropdown">
                    <button class="CourseDropbtn">-- Select Sub Course --</button>
                    <div class="CourseDropdown-content">
                        <a href="#">Web Development</a>
                        <a href="#">Java Programming</a>
                        <a href="#">Python Programming</a>
                        <a href="#">Oracle</a>
                        <a href="#">Networking</a>
                    </div>
                </div>

                <div class="CourseDropdown">
                    <button class="CourseDropbtn">-- Select Year/Semester --</button>
                    <div class="CourseDropdown-content">
                        <a href="#">Year 3 / Semester 1</a>
                        <a href="#">Year 3 / Semester 2</a>
                        <a href="#">Year 4 / Semester 1</a>
                        <a href="#">Year 4 / Semester 2</a>
                    </div>
                </div>

                <div class="addStudent">
                    <!--<button class="addStudentBtn addStudentBtn1">Add A Professor</button>-->
                    <!-- add professor modal -->
                    <button type="button" class="addStudentBtn addStudentBtn1" data-bs-toggle="modal"
                        data-bs-target="#addProfessor">
                        +Add Professor

                    </button>

                    <div class="modal fade" id="addProfessor" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="card-title">Add Professor</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <!-- add professor Form -->
                                        @include('backend.Admin.Professor.addProfessor')

                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                </div>
                            </div>
                        </div>
                    </div><!-- End Add Professor Modal-->
                </div>
                <!-- End Student DropDown -->
            </div>
        </div>
        <hr class="line">

        <!-- tab-->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Professor Tabs</h5>

                            <!-- course Tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="professor-tab" data-bs-toggle="tab"
                                        data-bs-target="#professor" type="button" role="tab" aria-controls="professor"
                                        aria-selected="true">Professor</button>
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="editProfessor-tab" data-bs-toggle="tab"
                                        data-bs-target="#editProfessor" type="button" role="tab"
                                        aria-controls="editProfessor" aria-selected="false">Edit Professor</button>
                                </li>-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="addProfessors-tab" data-bs-toggle="tab"
                                        data-bs-target="#addProfessors" type="button" role="tab"
                                        aria-controls="addProfessors" aria-selected="false">Add Professor</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="professor" role="tabpanel"
                                    aria-labelledby="professor-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Professor List</h5>
                                            <!-- Table with stripped rows -->
                                            <table class="table table-striped datatable">
                                                <thead>
                                                    <tr>
                                                        <th>#.</th>
                                                        <th>FIRST NAME</th>
                                                        <th>LAST NAME</th>
                                                        <th>DATE OF BIRTH</th>
                                                        <th>MOBILE NUMBER</th>
                                                        <th>Email</th>
                                                        <th>COURSE</th>
                                                        <th>Action></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Taing</td>
                                                        <td>Kimhort</td>
                                                        <td>02-05-2002</td>
                                                        <td>093 850 572</td>
                                                        <td>taing@gmail.com</td>
                                                        <td>MIS</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                                        <td>2.</td>
                                                        <td>Hoeurn</td>
                                                        <td>Somany</td>
                                                        <td>12-02-2002</td>
                                                        <td>096 185 512</td>
                                                        <td>hoeurn@gmail.com</td>
                                                        <td>MIS</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                                        <td>3.</td>
                                                        <td>Meas</td>
                                                        <td>Manou</td>
                                                        <td>20-10-2000</td>
                                                        <td>012 850 000</td>
                                                        <td>meas@gmail.com</td>
                                                        <td>MIS</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                                        <td>4.</td>
                                                        <td>John</td>
                                                        <td>Wick</td>
                                                        <td>09-09-1999</td>
                                                        <td>010 299 311</td>
                                                        <td>john@gmail.com</td>
                                                        <td>MIS</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                                        <td>5.</td>
                                                        <td>Kate</td>
                                                        <td>Katie</td>
                                                        <td>02-12-2001</td>
                                                        <td>011 666 999</td>
                                                        <td>kate@gmail.com</td>
                                                        <td>BIT</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                                        <td>6.</td>
                                                        <td>Meas</td>
                                                        <td>Dara</td>
                                                        <td>19-01-2000</td>
                                                        <td>099 651 222</td>
                                                        <td>meas@gmail.com</td>
                                                        <td>Design</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                                        <td>7.</td>
                                                        <td>Sok</td>
                                                        <td>Somany</td>
                                                        <td>01-11-2002</td>
                                                        <td>023 850 777</td>
                                                        <td>sok@gmail.com</td>
                                                        <td>MIS</td>
                                                        <td><!-- edit -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                              Edit
                                                            </button>

                                                            <div class="modal fade" id="edit" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="card-title">Edit Professor</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"></h5>
                                                                                <!-- edit Form -->
                                                                                @include('backend.Admin.Professor.editProfessor')

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
                                <!--<div class="tab-pane fade" id="editProfessor" role="tabpanel"
                                    aria-labelledby="editProfessor-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Edit Professor</h5>

                                            <!-- Edit Professor. Form -->
                                            <!--include('backend.Admin.Professor.editProfessor')

                                        </div>
                                    </div>
                                </div>-->
                                <div class="tab-pane fade" id="addProfessors" role="tabpanel"
                                    aria-labelledby="addProfessors-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Add Professor</h5>

                                            <!-- add Professor. form-->
                                            @include('backend.Admin.Professor.addProfessor')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Default Tabs -->
                </div>
            </div>
        </section>

        <!-- End professor Table -->
    </main>
@endsection
