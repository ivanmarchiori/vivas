<?php
include(resource_path("lang/{$lang}.php"));
?>
@extends('layouts.layout')
@section('conteudo')


<div class="authentication-bg min-vh-100">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 px-3 pt-4">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">

                    <div class="text-center mb-4">
                        <a href="/">
                            <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt"><?=$language['NomeEmpresa']?></span>
                        </a>
                   </div>

                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary"><?=$language['RegisterRegisterTitle']?></h5>
                                <p class="text-muted"><?=$language['RegisterGet']?></p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="/">

                                    <div class="mb-3">
                                        <label class="form-label" for="useremail"><?=$language['RegisterEmail']?></label>
                                        <input type="email" class="form-control" id="useremail" placeholder="<?=$language['RegisterEmail']?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username"><?=$language['RegisterUsername']?></label>
                                        <input type="text" class="form-control" id="username" placeholder="<?=$language['RegisterUsername']?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword"><?=$language['RegisterPassword']?></label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="<?=$language['RegisterPassword']?>">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                                        <label class="form-check-label" for="auth-terms-condition-check"><?=$language['RegisterI']?>
                                            <a href="javascript: void(0);" class="text-dark"><?=$language['RegisterTerms']?></a></label>
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit"><?=$language['RegisterRegister']?></button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title"><?=$language['RegisterSign']?></h5>
                                        </div>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-0"><?=$language['RegisterAlready']?> <a href="/login" class="fw-medium text-primary"> <?=$language['RegisterLogin']?></a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-muted p-4">
                        <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> <?=$language['NomeEmpresa']?>. <?=$language['Slogan']?></p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- end container -->
</div>
@endsection