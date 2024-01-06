<?php
include(resource_path("lang/{$lang}.php"));
?>

@extends('layouts.layout')
@section('conteudo')
 <!-- gridjs css -->
 <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">
 <!-- flatpickr css -->
 <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">
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
                $maintitle = $language['NomeEmpresa'] ;
                $title = $language['Search'] ;
                ?>
                <?php
                include resource_path('views/layouts/breadcrumb.php');
                ?>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                               <?php echo ($param['q']);?>

                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include resource_path('views/layouts/footer.blade.php');?>
    </div>
    <!-- end main content-->

</div>
<!-- gridjs js -->
<script src="/assets/libs/gridjs/gridjs.umd.js"></script>
<!-- flatpickr js -->
<script src="/assets/libs/flatpickr/flatpickr.min.js"></script>

<script src="/assets/js/app.js"></script>

@endsection
