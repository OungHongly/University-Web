@extends('backend.layouts.mainStudent')
@section('title', 'Dashboard')
@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/student/dashboard') }}">Home</a></li>
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

                    <!-- total subject -->
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
                                <h5 class="card-title">TOTAL Subject</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>7</h6>
                                        <!--<span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End total subject -->

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

                    </div>
                    <hr class="line">
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
