<?php
include resource_path("lang/{$lang}.php");
?>

@extends('layouts.layout')
@section('conteudo')
    <div id="layout-wrapper">

        <?php include resource_path('views/layouts/menu.php'); ?>
        <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <?php
                    $maintitle = $language['NomeEmpresa'];
                    $title = $language['SetupGoals'];
                    ?>
                    <?php
                    include resource_path('views/layouts/breadcrumb.php');
                    ?>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xl-3">
                                    <?php include resource_path('views/setup/menu.blade.php'); ?>
                                </div> <!-- end col-->

                                <div class="col-xl-9">

                                    <div class="card">
                                        <div class="p-3 px-lg-4 border-bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-6">
                                                    <h5 class="font-size-16 mb-1 text-truncate"><a href="#"
                                                            class="text-dark"><?php echo $language['SetupGoals']?></a></h5>
                                                    <p class="text-muted text-truncate mb-0">Todos</p>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="position-relative">


                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit"
                                                                class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                                                    class="d-none d-sm-inline-block me-2">Add <?php echo $language['SetupGoals']?></span> <i
                                                                    class="mdi mdi-plus float-end"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="p-3 chat-input-section">
                                            <div id="table-contacts-list"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>

                            <div style='clear:both'></div>

                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include resource_path('views/layouts/footer.blade.php'); ?>
        </div>
        <!-- end main content-->

    </div>

    <script src="/assets/libs/gridjs/gridjs.umd.js"></script>

    <script src="/assets/js/pages/contacts-list.init.js"></script>

    <script src="/assets/js/app.js"></script>
@endsection
