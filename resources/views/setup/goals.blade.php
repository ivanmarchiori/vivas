<?php
include resource_path("lang/{$lang}.php");
?>

@extends('layouts.layout')
@section('conteudo')
    <div id="layout-wrapper">

        <?php include resource_path('views/layouts/menu.php'); ?>

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
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            Conteudo
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
@endsection
