<?php
use Illuminate\Support\Facades\App;
$lang = App::make('lang');
$language = App::make('language');
?>

@extends('layouts.layout')
@section('conteudo')
<div id="layout-wrapper">

    <?php include resource_path('views/layouts/menu.php'); ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = $language['NomeEmpresa'] ;
                $title = 'Contact List';
                ?>
                <?php
                include resource_path('views/layouts/breadcrumb.php');
                ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Phyllis Gatlin</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">James Nix</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-3.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Darlene Smith</a></h5>
                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md">
                                        <div class="avatar-title bg-primary-subtle text-primary h1 m-0 rounded-circle">
                                            <i class="bx bxs-user-circle"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">William Swift</a></h5>
                                        <p class="text-muted mb-0">Backend Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md">
                                        <div class="avatar-title bg-primary-subtle text-primary h1 m-0 rounded-circle">
                                            <i class="bx bxs-user-circle"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Kevin West</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>

                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-6.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Tommy Hayes</a></h5>
                                        <p class="text-muted mb-0">Backend Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-8.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Diana Owens</a></h5>
                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-9.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-5.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md">
                                        <div class="avatar-title bg-primary-subtle text-primary h1 m-0 rounded-circle">
                                            <i class="bx bxs-user-circle"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="/assets/images/users/avatar-3.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                                        <p class="text-muted mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <p class="mt-3 text-muted">Curabitur non magna lobortis est tempus gravida ornare libero sed diam sed fringilla est.</p>

                                <div class="pt-1">
                                    <button type="button" class="btn btn-soft-primary btn-sm text-truncate"><i class="bx bx-user me-1"></i> Contact</button>
                                    <a href="/contact/profile" class="btn btn-primary btn-sm text-truncate ms-2"><i class="bx bx-message-square-dots me-1"></i> Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

         <!--  successfully modal  -->
         <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true" data-bs-scroll="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                       <div class="text-center">
                           <i class="bx bx-check-circle display-1 text-success"></i>
                           <h3 class="mt-3">User Added Successfully</h3>
                       </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Extra Large modal example -->
        <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Add New</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddNew-Username">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" id="AddNew-Username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <select class="form-select">
                                        <option selected>Select Position</option>
                                        <option>Full Stack Developer</option>
                                        <option>Frontend Developer</option>
                                        <option>UI/UX Designer</option>
                                        <option>Backend Developer</option>
                                    </select>
                                </div>
                            </div>
                           <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddNew-Email">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email" id="AddNew-Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddNew-Phone">Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone" id="AddNew-Phone">
                                </div>
                            </div>
                       </div>
                       <div class="row mt-2">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i class="bx bx-x me-1"></i> Cancel</button>
                            <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1"></i> Confirm</button>
                        </div>
                    </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include resource_path('views/layouts/footer.blade.php');?>
    </div>
    <!-- end main content-->

</div>

<script src="/assets/libs/gridjs/gridjs.umd.js"></script>

<script src="/assets/js/pages/contacts-list.init.js"></script>

<script src="/assets/js/app.js"></script>

@endsection
