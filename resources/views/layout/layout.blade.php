<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    {{--<title>Home | LostRib</title>--}}
    <title>@yield('page_title')</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}" type="image/x-icon">

    {{--  extra css files to be loaded for a specific page  --}}
    @yield('extra_page_css')

</head>

<body>
<!--Top navbar -->
<section id="navbar">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="#"><img width="122px" class="img-responsive"
                                                      src="{{ asset('assets/img/mainlogo.png') }}"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Matches</a></li>
                    <li class=""><a href="#">Daily Matches</a></li>
                    <li class=""><a href="#">Premium</a></li>
                    <li class=""><a href="#">Upgrade</a></li>
                    <li class=""><a href="#">Help</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--Top navbar -->

    <!-- second navbar -->
    <nav class="secondNav">
        <ul>
            <li>
            <span>
                Over 1,200,203 genuine <img width="25.4" class="img-responsive img-circle" src="{{ asset('assets/img/nija.jpg') }}"> users since 2006</span>
            </li>
            <li class="new_user text-center">
                <span class="new_user_name">
                YESIMAMA<p style="font-size: 10px;">just joined</p>
                </span>
            </li>
            <li class="new_user text-center">
                <span class="new_user_name">
                RECENT ACTIVITIES<p style="font-size: 10px;">In the last one hour</p>
                </span>
            </li>
            <li>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        1392 Messages Sent
                    </div>
                </div>
            </li>
            <li>
                <div class="progress">
                    <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                        1392 Profile Views
                    </div>
                </div>
            </li>
            <li>
                <div class="progress">
                    <div class="progress-bar progress-bar-lime" role="progressbar" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        1392 Searches
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <!-- second navbar -->
</section>



{{--The Content of the page goes here --}}
@yield('content')


<div style="clear: both;" class="well-sm well-white text-center">
    <h4>&copy; Copyright {{ date('Y') }}. All Rights Reserved.</h4>
</div>
        <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>



{{-- specific scripts for the particular page --}}
@yield('extra_page_js')

</body>
</html>