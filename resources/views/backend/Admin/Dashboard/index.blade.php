@extends('backend.layouts.main')
@section('title', 'Dashboard')
@section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <hr class="line">
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-15">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-2 col-md-6">
                            <div class="card-bd info-card user-card">

                                <!--<div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>-->

                                <div class="card-body">
                                    <h5 class="card-title">TOTAL User</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>2000</h6>
                                            <!--<span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-2 col-md-6">
                            <div class="card-bd info-card student-card">
                                <div class="card-body">
                                    <h5 class="card-title">TOTAL Student</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>2,578</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-2 col-xl-6">

                            <div class="card-bd info-card professor-card">
                                <div class="card-body">
                                    <h5 class="card-title">TOTAL Professor</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>222</h6>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <div class="col-xxl-2 col-md-6">
                            <div class="card-bd info-card course-card">
                                <div class="card-body">
                                    <h5 class="card-title">TOTAL Course</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-collection-play"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>100</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                        <div class="col-xxl-2 col-md-6">
                            <div class="card-bd info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">TOTAL Revenue</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$2,450</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                        <div class="col-xxl-2 col-md-6">
                            <div class="card-bd info-card paid-card">
                                <div class="card-body">
                                    <h5 class="card-title">TOTAL Paid</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-piggy-bank"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                        <hr class="line">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Shortcut </h5>
                                <!-- short cut -->

                                <!-- add student modal -->
                                <button type="button" class="btn btn-secondary rounded-pill space" data-bs-toggle="modal"
                                    data-bs-target="#addStudent">
                                    +Add Student

                                </button>

                                <div class="modal fade" id="addStudent" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="card-title">Add Student</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <!-- add student Form -->
                                                    @include('backend.Admin.Student.addStudent')

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Add Student Modal-->

                                <!-- add subject modal -->
                                <button type="button" class="btn btn-secondary rounded-pill space"
                                    data-bs-toggle="modal" data-bs-target="#addSubject">
                                    +Add Subject

                                </button>

                                <div class="modal fade" id="addSubject" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="card-title">Add Subject</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <!-- add subject Form -->
                                                    @include('backend.Admin.subject.addSubject')

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Add Subject Modal-->

                                <!-- add exam modal -->
                                <button type="button" class="btn btn-secondary rounded-pill space"
                                    data-bs-toggle="modal" data-bs-target="#addExam">
                                    +Add Exam

                                </button>

                                <div class="modal fade" id="addExam" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="card-title">Add Exam</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <!-- add exam Form -->
                                                    @include('backend.Admin.Exam.addExam')

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Add Exam Modal-->

                                <!-- add course modal -->
                                <button type="button" class="btn btn-secondary rounded-pill space"
                                    data-bs-toggle="modal" data-bs-target="#addCourse">
                                    +Add Course

                                </button>

                                <div class="modal fade" id="addCourse" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="card-title">Add Course</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <!-- add course Form -->
                                                    @include('backend.Admin.Course.addCourse')

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Add Course Modal-->

                                <!-- add notice modal -->
                                <button type="button" class="btn btn-secondary rounded-pill space"
                                    data-bs-toggle="modal" data-bs-target="#addNotice">
                                    +Add Notice

                                </button>

                                <div class="modal fade" id="addNotice" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="card-title">Add Notice</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <!-- add notice Form -->
                                                    @include('backend.Admin.Notice.addNotice')

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Add notice Modal-->

                                <!-- add professor modal -->
                                <button type="button" class="btn btn-secondary rounded-pill space"
                                    data-bs-toggle="modal" data-bs-target="#addProfessor">
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
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Add Professor Modal-->
                            </div>
                        </div>
                        <hr class="line">
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Notice <span>| Today</span></h5>

                                    <!-- Table with stripped rows of notice -->
                                    <table class="table table-striped datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#.</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Upcoming events</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>2023-05-01</td>
                                                <td>ទិវាពលកម្មអន្តជាតិ (International Labour Day)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>2023-05-04</td>
                                                <td>ពិធីបុណ្យវិសាខបូជា (Visaka Bochea)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>2023-05-08</td>
                                                <td>ព្រះរាជពិធីច្រត់ព្រះនង្គ័ល (Royal Ploughing Ceremony)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>2023-05-14</td>
                                                <td>ព្រះរាជពិធីបុណ្យចម្រើនព្រះជន ព្រះករុណាព្រះបាទសម្ដេចព្រះបរមនាថ នរោត្តម
                                                    សីហមុនី
                                                    ព្រះមហាក្សត្រនៃព្រះរាជាណាចក្រកម្ពុជា (King Sihamoni's Birthday)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table notice -->

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Notice -->
                    </div>
                </div>
                <!-- End Left side columns -->
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
