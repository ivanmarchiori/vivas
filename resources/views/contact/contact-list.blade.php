<?php
include(resource_path("lang/{$lang}.php"));
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
                $title = $language['Contacts'];
                ?>
                <?php
                include resource_path('views/layouts/breadcrumb.php');
                ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="position-relative">
                                    <div class="modal-button mt-2">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New</a>
                                    </div>
                                </div>

                                <div id="table-contacts-list"></div>

                            </div>
                        </div>
                    </div>
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
