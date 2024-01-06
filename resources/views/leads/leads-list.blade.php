<?php
include(resource_path("lang/{$lang}.php"));
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
                $maintitle = $language['NomeEmpresa'] ;
                $title = $language["KanbanList"];
                ?>
                <?php
                include resource_path('views/layouts/breadcrumb.php');
                ?>
                <!-- end page title -->
                <div class="d-lg-flex">
                    <div class="chat-leftsidebar card">
                        <div class="p-3 px-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 me-3 align-self-center">
                                    <img src="/assets/images/users/{{auth()->user()->photo}}" class="avatar-sm rounded-circle" alt="">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Marcus <i class="mdi mdi-circle text-success align-middle font-size-10 ms-1"></i></a></h5>
                                    <p class="text-muted mb-0">Available</p>
                                </div>

                                <div class="flex-shrink-0">
                                    <div class="dropdown chat-noti-dropdown">
                                        <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Add Contact</a>
                                            <a class="dropdown-item" href="#">Setting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="search-box chat-search-box">
                                <div class="position-relative">
                                    <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                    <i class="bx bx-search search-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="pb-3">
                            <div class="chat-message-list" data-simplebar>
                                <div class="p-4 border-top">
                                    <div>
                                        <div class="float-end">
                                            <a href="" class="text-primary"><i class="mdi mdi-plus"></i> New Group</a>
                                        </div>
                                        <h5 class="font-size-16 mb-3"> Groups</h5>

                                        <ul class="list-unstyled chat-list group-list">
                                            <li>
                                                <a href="#">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                    G
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">General</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                    D
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">Designers</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                    M
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">Meeting</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="p-4 border-top">
                                    <div>
                                        <div class="float-end">
                                            <a href="" class="text-primary"><i class="mdi mdi-plus"></i> New Contact</a>
                                        </div>
                                        <h5 class="font-size-16 mb-3"> Contacts</h5>

                                        <ul class="list-unstyled chat-list">
                                            <li>
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0 me-3 align-self-center">
                                                            <div class="user-img online">
                                                                <img src="/assets/images/users/{{auth()->user()->photo}}" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-size-14 mb-1">John Howard</h5>
                                                            <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="font-size-11">02 min</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0 me-3 align-self-center">
                                                            <div class="user-img online">
                                                                <div class="avatar-sm align-self-center">
                                                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                        G
                                                                    </span>
                                                                </div>
                                                                <span class="user-status"></span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-size-14 mb-1">Galen Rizo</h5>
                                                            <p class="text-truncate mb-0 text-body">I've finished it! See you so</p>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="font-size-11 text-body">10 min</div>
                                                            <div class="unread-message">
                                                                <span class="badge bg-danger rounded-pill">01</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0 align-self-center me-3">
                                                            <div class="user-img away">
                                                                <img src="/assets/images/users/{{auth()->user()->photo}}" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-size-14 mb-1">Bernard Spencer</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="font-size-11">22 min</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0 align-self-center me-3">
                                                            <div class="user-img">
                                                                <img src="/assets/images/users/{{auth()->user()->photo}}" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-size-14 mb-1">Annie Holder</h5>
                                                            <p class="text-truncate mb-0">Nice to meet you</p>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="font-size-11">01 Hr</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0 align-self-center me-3">
                                                            <div class="user-img online">
                                                                <div class="avatar-sm align-self-center">
                                                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                        V
                                                                    </span>
                                                                </div>
                                                                <span class="user-status"></span>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-size-14 mb-1">Vernon Smith</h5>
                                                            <p class="text-truncate mb-0">Wow that's great</p>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="font-size-11">04 Hrs</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end chat-leftsidebar -->

                    <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
                        <div class="card">
                            <div class="p-3 px-lg-4 border-bottom">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <h5 class="font-size-16 mb-1 text-truncate"><a href="#" class="text-dark">Designers</a></h5>
                                        <p class="text-muted text-truncate mb-0">12 Members</p>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input rounded" placeholder="Enter Message...">

                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="p-3 chat-input-section">

                                <div id="table-contacts-list"></div>
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


<script src="/assets/libs/gridjs/gridjs.umd.js"></script>

<script src="/assets/js/pages/contacts-list.init.js"></script>

<script src="/assets/js/app.js"></script>

@endsection
