<?php
use Illuminate\Support\Facades\App;
$lang = App::make('lang');
$language = App::make('language');
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
                        <a href="index.php">
                            <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">e-VIVAS</span>
                        </a>
                   </div>

                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-3">
                                <div class="avatar-xl mx-auto">
                                    <div class="avatar-title bg-light text-primary h1 rounded-circle">
                                        <i class="bx bxs-user"></i>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <h5><?=$language['YouareLoggedOut']?></h5>
                                    <p class="text-muted font-size-15"><?=$language['Thankyouforusing']?> <span class="fw-semibold text-dark">e-VIVAS</span></p>
                                    <div class="mt-4">
                                        <a href="/" class="btn btn-primary w-100 waves-effect waves-light"><?=$language['SignIn']?></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-muted p-4">
                        <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> e-VIVAS. Desenvolvido para seu Projeto.</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- end container -->
</div>
@endsection
