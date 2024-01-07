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
                    $title = $language['SetupCompany'];
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
                                                            class="text-dark"><?php echo $title?></a></h5>
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

                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="inputAddress" class="form-label">Campo</label>
                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Place Holder">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="inputAddress" class="form-label">Campo</label>
                                                    <input type="text" class="form-control" id="inputAddress" placeholder="Place Holder">
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="inputCity" class="form-label">Campo</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label for="inputState" class="form-label">Combo</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label for="inputZip" class="form-label">Campo</label>
                                                        <input type="text" class="form-control" id="inputZip">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                                        <label class="form-check-label" for="customCheck11">Checklist field</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>

                                            </form>
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
