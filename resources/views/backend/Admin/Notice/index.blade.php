@extends('backend.layouts.main')
@section('title', 'Notice')
@section('main-container')

    <main id="main" class="main">
        <section class="section">
            <div class="col-lg-12">
                <div class="pagetitle">
                    <h1>Notice</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Notice</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End Page Title -->
            <hr class="line">

            <!-- tab-->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Notice Tabs</h5>

                                <!-- course Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="notice-tab" data-bs-toggle="tab"
                                            data-bs-target="#notice" type="button" role="tab" aria-controls="notice"
                                            aria-selected="true">Notice</button>
                                    </li>
                                    <!--<li class="nav-item" role="presentation">
                                        <button class="nav-link" id="editNotice-tab" data-bs-toggle="tab"
                                            data-bs-target="#editNotice" type="button" role="tab"
                                            aria-controls="editNotice" aria-selected="false">Edit Notice</button>
                                    </li>-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="addNotice-tab" data-bs-toggle="tab"
                                            data-bs-target="#addNotice" type="button" role="tab"
                                            aria-controls="addNotice" aria-selected="false">Add Notice</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabContent">
                                    <div class="tab-pane fade show active" id="notice" role="tabpanel"
                                        aria-labelledby="notice-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1 class="card-title">Notice | May 2023</h1>

                                                <!-- Table with stripped rows -->
                                                <table class="table table-striped datatable">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#.</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Upcoming events</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>2023-05-01</td>
                                                            <td>ទិវាពលកម្មអន្តជាតិ (International Labour Day)</td>
                                                            <td><!-- edit -->
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                                  Edit
                                                                </button>

                                                                <div class="modal fade" id="edit" tabindex="-1">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="card-title">Edit Notice</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title"></h5>
                                                                                    <!-- edit Form -->
                                                                                    @include('backend.Admin.Notice.editNotice')

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
                                                            <th scope="row">2</th>
                                                            <td>2023-05-04</td>
                                                            <td>ពិធីបុណ្យវិសាខបូជា (Visaka Bochea)</td>
                                                            <td><!-- edit -->
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                                  Edit
                                                                </button>

                                                                <div class="modal fade" id="edit" tabindex="-1">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="card-title">Edit Notice</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title"></h5>
                                                                                    <!-- edit Form -->
                                                                                    @include('backend.Admin.Notice.editNotice')

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
                                                            <th scope="row">3</th>
                                                            <td>2023-05-08</td>
                                                            <td>ព្រះរាជពិធីច្រត់ព្រះនង្គ័ល (Royal Ploughing Ceremony)</td>
                                                            <td><!-- edit -->
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                                  Edit
                                                                </button>

                                                                <div class="modal fade" id="edit" tabindex="-1">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="card-title">Edit Notice</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title"></h5>
                                                                                    <!-- edit Form -->
                                                                                    @include('backend.Admin.Notice.editNotice')

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
                                                            <th scope="row">4</th>
                                                            <td>2023-05-14</td>
                                                            <td>ព្រះរាជពិធីបុណ្យចម្រើនព្រះជន
                                                                ព្រះករុណាព្រះបាទសម្ដេចព្រះបរមនាថ នរោត្តម សីហមុនី
                                                                ព្រះមហាក្សត្រនៃព្រះរាជាណាចក្រកម្ពុជា (King Sihamoni's
                                                                Birthday)
                                                            </td>
                                                            <td><!-- edit -->
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                                                  Edit
                                                                </button>

                                                                <div class="modal fade" id="edit" tabindex="-1">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="card-title">Edit Notice</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title"></h5>
                                                                                    <!-- edit Form -->
                                                                                    @include('backend.Admin.Notice.editNotice')

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
                                                <!-- End Table with stripped rows -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="tab-pane fade" id="editNotice" role="tabpanel"
                                        aria-labelledby="editNotice-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Edit Notice</h5>

                                                <!-- Edit Notice Form -->
                                                <!--include('backend.Admin.Notice.editNotice')

                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="tab-pane fade" id="addNotice" role="tabpanel"
                                        aria-labelledby="addNotice-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Add Notice</h5>

                                                <!-- add Notice form-->
                                                @include('backend.Admin.Notice.addNotice')

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Default Tabs -->
                    </div>
                </div>
            </section>
        </section>

    </main><!-- End #main -->
@endsection
