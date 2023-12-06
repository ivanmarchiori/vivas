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
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "e-VIVAS";
                $title = 'Contact';
                ?>
                <?php
                include resource_path('views/layouts/breadcrumb.php');
                ?>
                <!-- end page title -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include resource_path('views/layouts/footer.php');?>
    </div>
    <!-- end main content-->

</div>


@endsection
