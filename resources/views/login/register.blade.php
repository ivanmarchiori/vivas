<?php
include resource_path("lang/{$lang}.php");
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
                                <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span
                                    class="logo-txt"><?= $language['NomeEmpresa'] ?></span>
                            </a>
                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary"><?= $language['RegisterRegisterTitle'] ?></h5>
                                    <p class="text-muted"><?= $language['RegisterGet'] ?></p>
                                </div>

                                @if ($errors->any())
                                    <div class="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <div class="p-2 mt-4">
                                    <form action="{{ route('login.register.post') }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label"
                                                for="name"><?= $language['RegisterUsername'] ?></label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="<?= $language['RegisterUsername'] ?>"
                                                value="{{ old('name') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"
                                                for="email"><?= $language['RegisterEmail'] ?></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="<?= $language['RegisterEmail'] ?>" value="{{ old('email') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"
                                                for="password"><?= $language['RegisterPassword'] ?></label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="<?= $language['RegisterPassword'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"
                                                for="password_confirmation"><?= $language['RegisterPasswordConfirm'] ?></label>
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation"
                                                placeholder="<?= $language['RegisterPasswordConfirm'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"
                                                for="lang"><?= $language['RegisterLanguage'] ?></label>


                                            <select name="lang" id="lang" class="form-control" required
                                                placeholder="<?= $language['RegisterLanguage'] ?>">
                                                <option value="" @selected(old('lang') == '')></option>
                                                <option value="br" @selected(old('lang') == 'br')>Brasil</option>
                                                <option value="en" @selected(old('lang') == 'en')>English</option>
                                                <option value="sp" @selected(old('lang') == 'sp')>Spanish</option>
                                            </select>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-terms-condition-check"
                                                name="auth-terms-condition-check">
                                            <label class="form-check-label"
                                                for="auth-terms-condition-check"><?= $language['RegisterI'] ?>
                                                <a href="javascript: void(0);"
                                                    class="text-dark"><?= $language['RegisterTerms'] ?></a></label>
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light"
                                                type="submit"><?= $language['RegisterRegister'] ?></button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 title"><?= $language['RegisterAlready'] ?></h5>
                                            </div>

                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0"><a href="/login"
                                                    class="fw-medium text-primary btn btn-primary">
                                                    <?= $language['RegisterSign'] ?></a></p>
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
                            <p class="text-white-50">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> <?= $language['NomeEmpresa'] ?>. <?= $language['Slogan'] ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
@endsection
