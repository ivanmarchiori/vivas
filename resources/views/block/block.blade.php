<?php
use Illuminate\Support\Facades\App;
$lang = App::make('lang');
$language = App::make('language');
?>

@extends('layouts.layout')
@section('conteudo') <div class="authentication-bg min-vh-100">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 px-3 pt-4">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">

                    <div class="text-center mb-4">
                        <a href="index.php">
                            <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">{{$language['NomeEmpresa'] }}</span>
                        </a>
                   </div>

                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">{{$language['BlockTitle'] }}</h5>
                                <p class="text-muted">{{$language['BlockDesc'] }}</p>
                            </div>
                            <div class="p-2 mt-4">
                                <div class="user-thumb text-center mb-4">
                                    <img src="/assets/images/users/avatar-4.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                    <h5 class="font-size-15 mt-3">{{$language['BlockUserName']}}</h5>
                                </div>
                                <form action="index.php">

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">{{$language['Senha']}}</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="{{$language['Senha']}}">
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">{{$language['Unlock'] }}</button>
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
                        <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> {{$language['NomeEmpresa'] }}. Desenvolvido para seu Projeto.</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- end container -->
</div>

@endsection
