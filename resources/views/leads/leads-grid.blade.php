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

        <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">
        <link rel="stylesheet" href="/assets/libs/kanban/css/kanban.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <?php
                    $maintitle = $language['NomeEmpresa'];
                    $title = $language['Oportunidades'];
                    ?>
                    <?php
                    include resource_path('views/layouts/breadcrumb.php');
                    ?>
                    <!-- end page title -->
                    <div class="row">
                        <div role="region" class="rs-panel-body" style="overflow-x: auto;">
                            <div class="rs-stack" style="align-items: flex-start; flex-direction: row; gap: 10px;">
                                <?php
                                $columnsId = ['1','2','3','4','5','6','7','8','9'];
                                $columnsLabel = ['Oportunidades','Apresentar','Perguntar','Respondido','Enviar Proposta','Aguardando Aprovação','Aprovado','Reprovado','Expirados'];
                                $columnsParamColor = [['#090','#FFF'],['#EEE','#000'],['#EEE','#000'],['#EEE','#000'],['#EEE','#000'],['#EEE','#000'],['#EEE','#000'],['#EEE','#000'],['#900','#FFF']];
                                $cards = ['Cliente Xpto0','Cliente Xpto1','Cliente Xpto2','Cliente Xpto3','Cliente Xpto4','Cliente Xpto5','Cliente Xpto6','Cliente Xpto7','Cliente Xpto8'];

                                $colPos = 0;
                                foreach($columnsId as $column){
                                    ?>
                                <div class="rs-stack-item">
                                    <div data-rbd-droppable-id="0" data-rbd-droppable-context-id="2"
                                        class="board-column rs-panel">
                                        <div aria-expanded="false" class="rs-panel-header p-2" tabindex="-1"
                                            style="background-color:<?= $columnsParamColor[$colPos][0] ?>;color:<?= $columnsParamColor[$colPos][1] ?>;">
                                            <div class="rs-panel-title rs-stack"
                                                style="align-items: center; justify-content: space-between;">
                                                <div class="rs-stack-item">
                                                    <div class="text-editor"><input class="rs-input" type="text"
                                                            value="Tutorials">
                                                        <div class="text-view"><?php echo $columnsLabel[$colPos]; ?></div>
                                                    </div>
                                                </div>
                                                <?php if($colPos==0){?>
                                                <div class="rs-stack-item"><button type="button"
                                                        class="rs-btn-icon rs-btn-icon-placement-left rs-btn rs-btn-subtle"
                                                        style="border: 1px solid #247913; color:#FFF;"><svg width="1em"
                                                            height="1em" viewBox="0 0 16 16" fill="currentColor"
                                                            aria-hidden="true" focusable="false" class="rs-icon"
                                                            aria-label="more" data-category="application">
                                                            <path
                                                                d="M4 8a1 1 0 11-2 0 1 1 0 012 0zM14 8a1 1 0 11-2 0 1 1 0 012 0zM9 8a1 1 0 11-2 0 1 1 0 012 0z">
                                                            </path>
                                                        </svg><span class="rs-ripple-pond"><span class="rs-ripple"
                                                                style="width: 66.4831px; height: 66.4831px; left: -21.2415px; top: -10.2415px;"></span></span></button>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div role="region" class="rs-panel-body my-custom-scrollbar" style="max-height:600px;">
                                            <div role="list" class="rs-list">
                                                <?php
                                                foreach($cards as $card){
                                                ?>
                                                <div role="button" data-rbd-draggable-context-id="2"
                                                    data-rbd-draggable-id="131" tabindex="0"
                                                    aria-describedby="rbd-hidden-text-2-hidden-text-162"
                                                    data-rbd-drag-handle-draggable-id="131"
                                                    data-rbd-drag-handle-context-id="2" draggable="false"
                                                    class="card rs-list-item rs-list-item-md mt-1" style="">
                                                    <?php echo $card; ?><div class="rs-stack"
                                                        style="align-items: center; justify-content: space-between; margin-top: 10px;">
                                                        <div class="rs-stack-item">
                                                            <div class="rs-avatar-group rs-avatar-group-stack">
                                                                <div class="rs-avatar rs-avatar-xs rs-avatar-circle"><img
                                                                        class="rs-avatar-image"
                                                                        src="https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1241.jpg"
                                                                        alt="Nico Heller"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rs-stack-item">
                                                            <div role="group" class="card-actions rs-btn-group"><button
                                                                    type="button"
                                                                    class="rs-btn-icon rs-btn-icon-placement-left rs-btn rs-btn-default rs-btn-sm"><svg
                                                                        stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 16 16" height="1em"
                                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.23 1h-1.46L3.52 9.25l-.16.22L1 13.59 2.41 15l4.12-2.36.22-.16L15 4.23V2.77L13.23 1zM2.41 13.59l1.51-3 1.45 1.45-2.96 1.55zm3.83-2.06L4.47 9.76l8-8 1.77 1.77-8 8z">
                                                                        </path>
                                                                    </svg><span class="rs-ripple-pond"><span
                                                                            class="rs-ripple"></span></span></button><button
                                                                    type="button"
                                                                    class="rs-btn-icon rs-btn-icon-placement-left rs-btn rs-btn-default rs-btn-sm"><svg
                                                                        stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 16 16" height="1em"
                                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 3h3v1h-1v9l-1 1H4l-1-1V4H2V3h3V2a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v1zM9 2H6v1h3V2zM4 13h7V4H4v9zm2-8H5v7h1V5zm1 0h1v7H7V5zm2 0h1v7H9V5z">
                                                                        </path>
                                                                    </svg><span class="rs-ripple-pond"><span
                                                                            class="rs-ripple"></span></span></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php
                                $colPos++;
                                $cards = ['Cliente Xpto0'.$colPos,'Cliente Xpto1'.$colPos,'Cliente Xpto2'.$colPos];
                                }
                                    ?>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!--  successfully modal  -->
            <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true"
                data-bs-scroll="true">
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
            <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myExtraLargeModalLabel">Add New</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Username">Username</label>
                                        <input type="text" class="form-control" placeholder="Enter Username"
                                            id="AddNew-Username">
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
                                        <input type="text" class="form-control" placeholder="Enter Email"
                                            id="AddNew-Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddNew-Phone">Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone"
                                            id="AddNew-Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                            class="bx bx-x me-1"></i> Cancel</button>
                                    <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#success-btn" id="btn-save-event"><i
                                            class="bx bx-check me-1"></i> Confirm</button>
                                </div>
                            </div>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



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

    <script>
        $(function() {
            $(".draggable-card").draggable({
                revert: "invalid",
                cursor: "move"
            });

            $(".droppable-column").droppable({
                accept: ".draggable-card",
                drop: function(event, ui) {
                    // Lógica para mover o card entre as colunas
                    var draggedCard = ui.helper.clone();
                    draggedCard.removeClass("ui-draggable-dragging");
                    $(this).append(draggedCard);
                    ui.helper.remove();
                }
            });
        });
    </script>
@endsection
