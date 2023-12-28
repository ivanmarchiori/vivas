<?php
include(resource_path("lang/{$lang}.php"));
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
                                    <img src="/assets/images/users/{{auth()->user()->photo}}" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                    <h5 class="font-size-15 mt-3">{{$language['BlockUserName']}}</h5>
                                </div>
                                @if ($mensagem = Session::get('erro'))
                                @if($mensagem="EmailSenha")
                                    <div class="alert alert-danger">{{$language['LoginEmailSenha'] }}</div>
                                @endif
                                @endif



                                @if (session()->has('error'))
                                <div class="alert alert-danger">{{$language['LoginEmailSenha']}}</div>
                                @endif

                                @if (session()->has('success'))
                                <div class="alert alert-success">{{$language['RecoverSuccess']}}</div>
                                @endif
                                <form action="{{route('login.auth')}}" method="POST">
                                    @csrf
                                    <input type="text" hidden class="form-control" name="email" id="email" required value="{{auth()->user()->email}}">
                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="/login/recoverpw" class="text-muted">{{$language['LoginForgot']}}</a>
                                        </div>
                                        <label class="form-label" for="password">{{$language['LoginPassword']}}</label>
                                        <input type="password" class="form-control" required name="password" id="password" placeholder="{{$language['LoginPassword']}}">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">{{$language['LoginRemember']}}</label>
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
                        <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> {{$language['NomeEmpresa'] }}. {{$language['Slogan']}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- end container -->
</div>

@endsection
