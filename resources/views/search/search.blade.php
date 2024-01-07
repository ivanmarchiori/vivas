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
                    $title = $language['Search'] . ' (' . $param['q'] . ')';
                    ?>
                    <?php
                    include resource_path('views/layouts/breadcrumb.php');
                    ?>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xl-3">
                                    <?php include resource_path('views/search/menu.blade.php'); ?>
                                </div> <!-- end col-->
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="p-3 px-lg-4 border-bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-6">
                                                    <h5 class="font-size-16 mb-1 text-truncate"><a href="#"
                                                            class="text-dark"><?php echo $title; ?></a></h5>
                                                    <p class="text-muted text-truncate mb-0">Todos</p>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="position-relative">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="p-3 chat-input-section">
                                            Resultados
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
