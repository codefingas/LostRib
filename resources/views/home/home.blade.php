@extends('layout.layout')

@section('title', 'Home | LostRib')

@section('content')
    <div class="container-fluid">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 pd-0">
                        <div>
                            <a href="#">
                                <div class="card p-t-20 p-b-20 bg-pink">
                                    <i class="fa fa-user-plus c-white" style="font-size: 700%"></i>
                                    <p class="f-20 c-white">Add me</p>
                                    <p class="f-20 c-white">Here</p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-10">
                        <div id="Carousel" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>
                                <li data-target="#Carousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--.row-->
                                </div><!--.item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--.row-->
                                </div><!--.item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID:127990300</b></p>
                                                    <p class=""><span class="gender">Female, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Christian</span> <span
                                                                class="location">Abuja</span></p>
                                                    <p class="intro">I am nice and a little bit...</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--.row-->
                                </div><!--.item-->

                            </div><!--.carousel-inner-->
                            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                        </div><!--.Carousel-->

                    </div>
                </div>
            </div><!--.container-->
        </section>
        <section>
            <div class="large-banner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-msg">

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 banner-search p-t-20">
                                    <div id="custom-search-input">
                                        <h3 class="c-white p-t-60 p-l-50 p-r-20" style="font-size:250%">Your Soulmate is
                                            only a click away</h3>
                                        <div class="input-group col-md-12">
                                            <input type="text" class="search-query form-control"
                                                   placeholder="Search by Location or Matrimony ID"/>
				                                <span class="input-group-btn">
				                                    <button class="btn btn-danger" type="button">
                                                        <span class=" fa fa-search"></span>
                                                    </button>
				                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-invite">
                            <p class="text-center c-white p-t-20 f-18 shadow-text2">Want an invite? Click <a
                                        href="#">Here</a> to get started.</p>
                        </div>

                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
        <section class="p-b-20">
            <div class="meet-head p-t-20">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-sm-3">
                            <div class="p-t-20" style="border-bottom: 1px solid #ddd"></div>
                        </div>
                        <div class="col-sm-6"><h4 class="text-center">Everyone else willing to meet you</h4></div>
                        <div class="col-sm-3">
                            <div class="p-t-20" style="border-bottom: 1px solid #ddd"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="meet-box">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <div class="p-b-20">From period
                                    <select class="sel-drop b-shadow">
                                        <option>January</option>
                                        <option>March</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                    </div>
                                    <div class="content">
                                        <p class="mat-id"><b>Mat ID:127990300</b></p>
                                        <p><span class="gender c-blue">Female, </span><span class="age c-blue">26</span>
                                        </p>
                                        <p><span class="religion">Christian</span> <span class="location">Abuja</span>
                                        </p>
                                        <p class="intro">I am nice and a little bit...</p>
                                        <p><a href="#">
                                                <button type="button" class="btn view-profile">View Profile</button>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                    </div>
                                    <div class="content">
                                        <p class="mat-id"><b>Mat ID:127990300</b></p>
                                        <p><span class="gender c-blue">Female, </span><span class="age c-blue">26</span>
                                        </p>
                                        <p><span class="religion">Christian</span> <span class="location">Abuja</span>
                                        </p>
                                        <p class="intro">I am nice and a little bit...</p>
                                        <p><a href="#">
                                                <button type="button" class="btn view-profile2">View Profile</button>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                    </div>
                                    <div class="content">
                                        <p class="mat-id"><b>Mat ID:127990300</b></p>
                                        <p><span class="gender c-blue">Female, </span><span class="age c-blue">26</span>
                                        </p>
                                        <p><span class="religion">Christian</span> <span class="location">Abuja</span>
                                        </p>
                                        <p class="intro">I am nice and a little bit...</p>
                                        <p><a href="#">
                                                <button type="button" class="btn view-profile">View Profile</button>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="{{ asset('assets/img/boy.png') }}" alt=""/>
                                    </div>
                                    <div class="content">
                                        <p class="mat-id"><b>Mat ID:127990300</b></p>
                                        <p><span class="gender c-blue">Female, </span><span class="age c-blue">26</span>
                                        </p>
                                        <p><span class="religion">Christian</span> <span class="location">Abuja</span>
                                        </p>
                                        <p class="intro">I am nice and a little bit...</p>
                                        <p><a href="#">
                                                <button type="button" class="btn view-profile2">View Profile</button>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flexy">
                <div class="page-nation">
                    <ul class="pagination pagination-large">
                        <li class="disabled"><span>«</span></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li class="disabled"><span>...</span></li>
                        <li>
                        <li><a rel="next" href="#">Next</a></li>
                    </ul>
                </div>
            </div><!--end display -->
        </section>
        <section>
            <div class="how-it">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="how-it-works">
                            <h1 class="text-center shadow-text2">How it Works</h1>
                            <h4 class="text-center shadow-text2">Create a Simple Private Profile</h4>
                            <p class="text-justify">Create your private profile. Then once you find a Profile that
                                appeals
                                to you. <h6>Please click on show interest.</h6>
                            <h4 class="text-center shadow-text2">Tell Us what makes you Tick</h4>
                            <p class="text-justify">
                                All new matches and clients are personally screened. We'll develop your profile by
                                mining
                                the depths of your romantic wish list every time we link you to your</p>
                            <h6> "LostRib."</h6>
                            <h4 class="text-center shadow-text2">We carefully select your Matches</h4>
                            <p class="text-justify">
                                No heartless number exchanges, fast food dates or awkward group lunches<br/> here,
                                people!
                                Every match is approved by human beings not algorithms.</p>
                        </div>
                        <div class="button-flexy">
                            <a class="get-start" href="#">
                                <button>Get Started!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-purple p-t-30 p-b-30">
            <div class="container-fluid">
                <div class='row'>
                    <div class='col-md-offset-2 col-md-8'>
                        <h2 class="text-center c-pink shadow-text2">Love Stories</h2>
                        <p class="text-center c-white p-b-10">Because this is what is all about. Read what our client
                            has to
                            say about us and their experiences</p>
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="{{ asset('assets/img/boy.png') }}"
                                                     style="width: 100px;height:100px;">
                                                <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="c-white">My matchmaker has setup outstanding dates. The
                                                    locations
                                                    have been interesting and the people were good matches. She checks
                                                    in
                                                    frequently and provided excellent follow-up."</p>
                                                <small class="c-white">Temple</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="{{ asset('assets/img/boy.png') }}"
                                                     style="width: 100px;height:100px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.
                                                    Etiam auctor nec lacus ut tempor. Mauris.</p>
                                                <small class="c-white">Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="{{ asset('assets/img/boy.png') }}"
                                                     style="width: 100px;height:100px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.
                                                    Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed
                                                    ultricies commodo tortor, eu pretium mauris.</p>
                                                <small class="c-white">Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                        class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                                        class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <footer>
                <div class="flexy p-t-20 p-b-20">
                    <img src="{{ asset('assets/img/boy.png') }}">
                </div>
                <p class="text-center">&copy;Copyright 2017. all rights Reserved.</p>
            </footer>
        </section>
    </div><!-- /.container -->
@endsection

