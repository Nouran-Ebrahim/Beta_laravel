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
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
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
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <div class="row  justify-content-center align-items-center">

                            <div class="col-lg-2 col-12  d-flex  align-items-center iconn ">
                                <div class="logo logo-img">
                                    <a href="index.blade.php">
                                        <img src="assets/images/logoo2.png" class="img-responsive">
                                    </a>
                                </div>
                                <a class='menu-trigger'>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <div class="offset-lg-1 col-lg-9 col-12 justify-content-center d-flex align-items-center">
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

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
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
    <!-- ***** Welcome Area End ***** -->
    <!-- ***** Levels Area Start ***** -->
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
                    {{-- prepratory levels  --}}
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
                    {{-- thanwy levels  --}}
                    <div class="row" id="thawy-content" style="row-gap: 8px;">
                        {{-- frist level thanawy  --}}
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">الصف الاول الثانوى</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p> --}}
                                    <a href="{{ route('thanwy12-courses', ['id' => 1]) }}" class="card-link"><button
                                            type="button" class="btn btn-outline-primary view">View</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">الصف الثانى الثانوى</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p> --}}
                                    <a href="{{ route('start', ['id' => 2]) }}" class="card-link"><button
                                            type="button" class="btn btn-outline-primary view">View</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card item">
                                <div class="card-body">
                                    <h5 class="card-title">الصف الثالث الثانوى</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk
                                        of the
                                        card's
                                        content.</p> --}}
                                    <a href="{{ route('start', ['id' => 3]) }}" class="card-link"><button
                                            type="button" class="btn btn-outline-primary view">View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Levels Area End ***** -->
    <!-- ***** Why us Area Start ***** -->
    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="padding-top:2%" class="section-heading">
                        <h2>why us</h2>
                    </div>
                </div>
                <ul class="tilesWrap">
                    <li>
                        <h2>01</h2>
                        <p>
                            Make periodic exams after the end of the class to measure the student's level after
                            each lesson.
                        </p>
                    </li>
                    <li>
                        <h2>02</h2>
                        <p>
                            Facilitate communication between the teacher and parents, informing parents of the
                            results of their children.
                        </p>
                    </li>
                    <li>
                        <h2>03</h2>
                        <p>
                            Easy access to scientific material.
                        </p>

                    </li>

                    <li>
                        <h2>04</h2>
                        <p>
                            Support the interaction between the teacher and the student.
                        </p>

                    </li>
                    <li>
                        <h2>05</h2>
                        <p>
                            Giving students the opportunity to retrieve what has been studied at any time.
                        </p>

                    </li>
                    <li>
                        <h2>06</h2>
                        <p>
                            Solving the problem of private lessons is to create new educational methods replacing
                            traditional ones.
                        </p>

                    </li>
                </ul>

                <div class="col-lg-12">
                    <div class="row">

                        <div class="meeting-item col-12 col-lg-6">
                            <div class="thumb">

                                <img src="assets/images/1.jpg" alt="New Lecturer Meeting">
                            </div>

                        </div>



                        <div class="meeting-item col-12 col-lg-6">
                            <div class="thumb">

                                <img src="assets/images/2.jpg" alt="Higher Education">
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why us Area End  ***** -->
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>STUDY MORE, EFFORT LESS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills cources Area Start ***** -->

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
                            <img src="assets/images/coming-soon-clerks-iii.gif" style="height: 95px !important;" alt="Course Two">
                            <img src="assets/images/english-course.jpg" alt="Course One">
                            <div class="down-content">
                                <h4>English course</h4>
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
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/coming-soon-clerks-iii.gif" style="height: 95px !important;" alt="Course Two">

                            <img src="assets/images/computer-course.jpg" alt="Course Two">
                            <div class="down-content">
                                <h4>Computer course</h4>
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
                                            <span></span>
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
    <!-- ***** Skills cources Area End ***** -->
    <!-- ***** Teacher Area Start ***** -->

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
                                    <img src="assets/images/customer-img.jpg" class="" alt="...">
                                </div>
                                <div class="label">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item  w-100" data-bs-interval="10000">
                                <div class="pic">
                                    <img src="assets/images/customer-img.jpg" class="" alt="...">
                                </div>
                                <div class="label">
                                    <h5>First slide label2</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item  w-100" data-bs-interval="10000">
                                <div class="pic">
                                    <img src="assets/images/customer-img.jpg" class="" alt="...">
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
    <!-- ***** Teacher Area End ***** -->
    <!-- ***** Contact us/footer Area Start ***** -->

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                {{-- <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="mailto:beta.education2022@gmail.com" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="email" id="email"
                                                placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject"
                                                placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button name='submit' type="submit" id="form-submit"
                                                class="button">SEND
                                                MESSAGE NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 col-lg-6 ">
                    <div class="right-info">
                        <ul>
                            <li class="col-12">

                                <div class="d-flex"
                                    style="gap: 25px;
                                align-items: center;
                                justify-content:flex-start;
                                color: white;">
                                    <i class="fa-solid fa-phone fa-beat-fade fs-3"></i>
                                    <div>
                                        <h6>Phone Number</h6>
                                        <span>000000000</span>
                                    </div>

                                </div>
                            </li>
                            <li class="col-12">
                                <div class="d-flex"
                                    style="gap: 25px;
                                align-items: center;
                                justify-content:flex-start;
                                color: white;">
                                    <i class="fa-regular fa-envelope-open fa-beat-fade fs-3"></i>
                                    <div>
                                        <h6>Email Address</h6>
                                        <span>beta.education2022@gmail.com</span>
                                    </div>

                                </div>
                            </li>
                            <li class="col-12">

                                <div class="d-flex"
                                    style="gap: 25px;
                                align-items: center;
                                justify-content: flex-start;
                                color: white;">
                                    <i class="fa-solid fa-location-dot fa-beat-fade fs-3"></i>
                                    <div>
                                        <h6>Street Address</h6>
                                        <span>Lorem ipsum dolor sit amet.</span>
                                    </div>

                                </div>
                            </li>
                            <li class="col-12">

                                <div class="d-flex"
                                    style="gap: 25px;
                                align-items: center;
                                justify-content: flex-start;
                                color: white;">
                                    <i class="fa-solid fa-globe fa-beat-fade fs-3"></i>
                                    <div>
                                        <h6>Website URL</h6>
                                        <span>Lorem ipsum dolor sit amet.</span>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- footer area --}}
        <div class="footer">
            <p>Copyright © 2022 beta education Co., Ltd. All Rights Reserved.
                <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">soul</a>
            </p>
        </div>
    </section>
    <!-- ***** Contact us/footer  Area End ***** -->

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
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
