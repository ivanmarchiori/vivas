@extends('layouts.layout')
<?php
use Illuminate\Support\Facades\App;
$lang = App::make('lang');
$language = App::make('language');
?>
<div class="authentication-bg min-vh-100" style="background: url(./assets/images/auth-bg.jpg) bottom;">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="home-wrapper text-center">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-sm-9">
                                <div class="error-img">
                                    <img src="/assets/images/404-img.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="text-uppercase mt-5">{{$language['404Title']}}</h4>
                    <p class="text-muted">{{$language['404Desc']}}</p>
                    <div class="mt-5">
                        <a class="btn btn-primary waves-effect waves-light" href="/">{{$language['404Button']}}</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end authentication section -->
