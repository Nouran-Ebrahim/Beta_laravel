<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <nav class="navbar navbar-expand-lg  header-area header-sticky">
        <div class="container">
            <a class="navbar-brand  me-auto" href="index.blade.php" style='width:7%'>
                <img src="assets/images/logoo2.png" class='w-100'>
            </a>
            <a class='menu-trigger'>
                            <span >Menu</span>
                        </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#top" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#levels" id="level" class="nav-link">Levels</a>
                    </li>
                    <li class="nav-item">
                    <li><a href="#courses" id="skill" class="nav-link">Skills</a></li>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('joinus') }}" class="nav-link">Join Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>

                    @if (Session::get('id') === 70)
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin</a></li>
                    @endif


                </ul>

            </div>
        </div>
    </nav>
    <!-- <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12 head">
                    <nav class="main-nav">
                        <div class="row">

                    <div class="col-lg-6 col-12">
                    <a href="index.blade.php" class="logo logo-img">
                            <img src="assets/images/logoo2.png">
                        </a>
                    </div>
                        <div class="col-lg-6 col-12">
                        <ul class="nav">
                            <li><a href="#top" class="active">Home</a></li>
                            <li><a href="#levels" id="level">Levels</a></li>
                            <li><a href="#courses" id="skill">Skills</a></li>
                            <li><a href="{{ route('joinus') }}">Join Us</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            @if (Session::get('id') === 70)
                                <li><a href="{{ route('admin') }}">Admin</a></li>
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header> -->
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('assets/images/course-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            @if (Session::has('id'))
                            <h6>Hello {{ $data->name }} </h6>
                            @else
                            <h6>Hello student </h6>
                            @endif

                            <h2>Welcome to Education</h2>
                            <p><span style="font-weight: bold">STUDY MORE , EFFORT LESS</span>.... Contribute in a real
                                and effective way to raising
                                the level of student achievement by providing them with the best educational services
                                and videos.</p>
                            <div class="main-button-red">
                                <div><a href="{{ route('joinus') }}">Join Us Now!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
    {{-- <section class="services" id="levels">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="prep" class="nav-link">Preparatory Stage</a>
                </li>
                <li class="nav-item">
                    <a id="thanwy" class="nav-link">Secondary Stage</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="dir" id="prep-content">
                    <div class="row" style="row-gap: 10px;">
                        <div class="col-lg-4 justify-content-center align-items-center d-flex">
                            <div class="card item" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">1st Grad</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('prep-courses', ['id' => 1]) }}" class="card-link">
    <button type="button" class="btn btn-outline-primary view" id="prep-1">View</button>
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 justify-content-center align-items-center d-flex">
        <div class="card item" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">2nd Grad</h5>
                <p class="card-text">Some quick example text to build on the card title and make
                    up
                    the
                    bulk
                    of the
                    card's
                    content.</p>
                <a href="{{ route('prep-courses', ['id' => 2]) }}" class="card-link"><button type="button"
                        class="btn btn-outline-primary view" id="prep-2">View</button></a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 justify-content-center align-items-center d-flex">
        <div class="card item" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">3rd Grad</h5>
                <p class="card-text">Some quick example text to build on the card title and
                    make up
                    the
                    bulk
                    of the
                    card's
                    content.</p>
                <a href="{{ route('prep-courses', ['id' => 3]) }}" class="card-link"><button type="button"
                        class="btn btn-outline-primary view" id="prep-3">View</button></a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="dir" id="thawy-content">
        <div class="row">
            <div class="col-lg-4 justify-content-center align-items-center d-flex">
                <div class="card item" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">1st Grad</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up
                            the
                            bulk
                            of the
                            card's
                            content.</p>
                        <a href="{{ route('thanwy12-courses', ['id' => 1]) }}" class="card-link"><button type="button"
                                class="btn btn-outline-primary view">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 justify-content-center align-items-center d-flex">
                <div class="card item" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">2nd Gradd</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up
                            the
                            bulk
                            of the
                            card's
                            content.</p>
                        <a href="{{ route('start', ['id' => 2]) }}" class="card-link"><button type="button"
                                class="btn btn-outline-primary view">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 justify-content-center align-items-center d-flex">
                <div class="card item" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">3rd Grad</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up
                            the
                            bulk
                            of the
                            card's
                            content.</p>
                        <a href="{{ route('start', ['id' => 3]) }}" class="card-link"><button type="button"
                                class="btn btn-outline-primary view">View</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </section> --}}
    <section id="levels" class="level-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a id="prep" class="nav-link">Preparatory Stage</a>
                        </li>
                        <li class="nav-item">
                            <a id="thanwy" class="nav-link">Secondary Stage</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="row" id="prep-content" style="row-gap: 8px;">
                        <div class="col-lg-4">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">1st Grad</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('prep-courses', ['id' => 1]) }}" class="card-link">
                                        <button type="button" class="btn btn-outline-primary view"
                                            id="prep-1">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">2nd Grad</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('prep-courses', ['id' => 2]) }}" class="card-link"><button
                                            type="button" class="btn btn-outline-primary view"
                                            id="prep-2">View</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">3rd Grad</h5>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('prep-courses', ['id' => 3]) }}" class="card-link"><button
                                            type="button" class="btn btn-outline-primary view"
                                            id="prep-3">View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="thawy-content" style="row-gap: 8px;">
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">1st Grad</h5>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('thanwy12-courses', ['id' => 1]) }}" class="card-link"><button
                                            type="button" class="btn btn-outline-primary view">View</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">2nd Gradd</h5>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('start', ['id' => 2]) }}" class="card-link"><button type="button"
                                            class="btn btn-outline-primary view">View</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">3rd Grad</h5>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p>
                                    <a href="{{ route('start', ['id' => 3]) }}" class="card-link"><button type="button"
                                            class="btn btn-outline-primary view">View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="padding-top:2%" class="section-heading">
                        <h2>why us</h2>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-items-center align-items-center">
                    <div class="categories w-100">

                        <ul style="list-style-type: circle;">
                            <li>- Make periodic exams after the end of the class to measure the student's level after
                                each lesson.</li>
                            <li>- Facilitate communication between the teacher and parents, informing parents of the
                                results of their children.</li>
                            <li>- Easy access to scientific material.</li>
                            <li>- Support the interaction between the teacher and the student.</li>
                            <li>- Giving students the opportunity to retrieve what has been studied at any time.</li>
                            <li>- Solving the problem of private lessons is to create new educational methods replacing
                                traditional ones.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div>
                            <div class="meeting-item">
                                <div class="thumb">

                                    <img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting">
                                </div>

                            </div>
                        </div>

                        <div>
                            <div class="meeting-item">
                                <div class="thumb">

                                    <img src="assets/images/meeting-03.jpg" alt="Higher Education">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>STUDY MORE, EFFORT LESS</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Skills Courses</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item">
                            <img src="assets/images/course-01.jpg" alt="Course One">
                            <div class="down-content">
                                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$160</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-02.jpg" alt="Course Two">
                            <div class="down-content">
                                <h4>Curabitur molestie dignissim purus vel</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Nulla at ipsum a mauris egestas tempor</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Aenean molestie quis libero gravida</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$250</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-02.jpg" alt="">
                            <div class="down-content">
                                <h4>TemplateMo is the best website for Free CSS</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$270</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Web Design Templates at your finger tips</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$340</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Please visit our website again</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$360</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Responsive HTML Templates for you</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$400</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Download Free CSS Layouts for your business</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$430</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Morbi in libero blandit lectus cursus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$480</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Curabitur molestie dignissim purus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$560</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>teachers</h2>
                    </div>
                </div>
                <div class="techer-container col-lg-12">
                    <div id="carouselExampleDark"
                        class="d-flex-col aling-text-center justify-content-center align-items-center w-75 carousel carousel-dark slide"
                        data-bs-ride="carousel">

                        <div class="carousel-inner d-flex-col justify-content-center align-items-center w-100 techer">
                            <div class="carousel-item active w-100" data-bs-interval="10000">
                                <div class="pic">
                                    <img src="assets/images/customer-img.jpg" class="w-25" alt="...">
                                </div>
                                <div class="label">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item  w-100" data-bs-interval="10000">
                                <div class="pic">
                                    <img src="assets/images/customer-img.jpg" class="w-25" alt="...">
                                </div>
                                <div class="label">
                                    <h5>First slide label2</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item  w-100" data-bs-interval="10000">
                                <div class="pic">
                                    <img src="assets/images/customer-img.jpg" class="w-25" alt="...">
                                </div>
                                <div class="label">
                                    <h5>First slide label3</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="mailto:beta.education2022@gmail.com" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="YOURNAME...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="email" id="email" placeholder="YOUR EMAIL..."
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message"
                                                placeholder="YOUR MESSAGE..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button name='submit' type="submit" id="form-submit" class="button">SEND
                                                MESSAGE NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>000000000</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>nnnnnnn</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>center adress</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>hvhjvg</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 beta education Co., Ltd. All Rights Reserved.
                <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">soul</a>
            </p>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/customs.js') }}"></script>
    <script src="{{ asset('assets/js/sharedd.js') }} "></script>

    <!-- <script src="assets/js/levels.js"></script> -->
    <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
    </script>
</body>

</html>