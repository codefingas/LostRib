@extends('layout.layout')

@section('title', 'Login | LostRib')

@section('extra_page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
@endsection

@section('content')
    <section class="login">
        <div class="container-fluid">
            <div class="row">
                {{--<div class="well well-white text-center">
                    <a class="navbar-brand" href="#"><img width="122px" class="img-responsive" src="{{ asset('assets/img/logo.jpg') }}"></a>
                </div>--}}
                <div class="background">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="login_area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="social_login">
                                                                <div class="">
                                                                    <button class="btn btn-block btn-primary">
                                                                        <i class="fa fa-facebook"></i>
                                                                        <span>Login in with facebook</span>
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-block btn-aqua">
                                                                        <i class="fa fa-twitter"></i>
                                                                        <span>Login in with twitter</span>
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-block btn-brown">
                                                                        <i class="fa fa-google-plus"></i>
                                                                        <span>Login in with Google+</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="well-sm well-white">
                                                                <h4 class="text-center">Sign in manually</h4>
                                                            </div>
                                                            <div>
                                                                <form method="POST"
                                                                      action="{{ route('process_login') }}">

                                                                    {{ csrf_field() }}

                                                                    <div class="form-group">
                                                                        <input type="email"
                                                                               placeholder="Email"
                                                                               class="form-control" name="email"
                                                                               id="email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" placeholder="Password"
                                                                               class="form-control" name="password"
                                                                               id="pwd">
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label><input class="remind" type="checkbox">
                                                                            Remember me</label>
                                                                        <button type="submit"
                                                                                class="btn btn-lg btn-default">LOGIN
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                                <br/>
                                                                <h5>
                                                                    <span><a href="{{ route('register') }}"> Register
                                                                            now </a> </span>|<span>Forgot password?</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection