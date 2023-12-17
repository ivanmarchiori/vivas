<?php
include(resource_path("lang/br.php"));
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
                        <a href="/forgot-password">
                            <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">{{$language['NomeEmpresa']}}</span>
                        </a>
                   </div>

                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">{{$language['RecoverResetPassword']}}</h5>
                                <p class="text-muted">{{$language['RecoverReset']}} {{$language['NomeEmpresa']}}.</p>
                            </div>
                            <div class="p-2 mt-4">
                                @if ($errors->any())
                                    <div class="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                                @endif

                                @if (session()->has('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                                @endif


                                <div class="alert alert-success text-center small mb-4" role="alert">
                                    {{$language['RecoverEnterEmail']}}
                                </div>
                                <form action="{{route('login.resetPassword.post')}}" method="POST">
                                    @csrf
                                    <input type="text" name="token" id="token" value="{{$token}}" hidden>
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">{{$language['RecoverEmail']}}</label>
                                        <input type="email" class="form-control" id="email" required name="email" placeholder="{{$language['RecoverEmail']}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">{{$language['RecoverNewPassword']}}</label>
                                        <input type="password" class="form-control" id="password" required name="password" placeholder="{{$language['RecoverNewPassword']}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password_confirmation">{{$language['RecoverConfirmPassword']}}</label>
                                        <input type="password" class="form-control" id="password_confirmation" required name="password_confirmation" placeholder="{{$language['RecoverConfirmPassword']}}">
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">{{$language['RecoverReset']}}</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">{{$language['RecoverRemember']}}<a href="/login" class="fw-medium text-primary"> {{$language['RecoverSign']}} </a></p>
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
                        <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> {{$language['NomeEmpresa']}}. {{$language['Slogan']}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- end container -->
</div>
@endsection
