<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <title>Cources</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/cources.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/course-details.css') }}">

 
    <link href="img/favicon.ico" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                        <a href="index.php" class="logo logo-img">
                            <img src="{{ asset('assets/images/logoo2.png') }}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('index') }}" class="active" id="level">Levels</a></li>
                            <li><a href="{{ route('index') }}" id="skill">Skills</a></li>
                            <li><a href="{{ route('joinus') }}">Join Us</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('index') }}">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @if ($status == 'open')
        <div class="container-detail">

            <div class="main-video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SPRwCvM3Zkc"
                    title="YouTube video player" frameborder="0" class="main-video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                {{-- <video src="https://www.youtube.com/embed/SPRwCvM3Zkc" loop controls class="main-video"></video> --}}
                <h3 class="main-vid-title">house flood animation</h3>
            </div>

            <div class="video-list-container">

                <div class="list active">
                    <video src="https://youtu.be/SPRwCvM3Zkc" class="list-video"></video>
                    <h3 class="list-title">house flood animation</h3>
                </div>

                <div class="list">
                    <video src="https://youtu.be/SPRwCvM3Zkc" class="list-video"></video>
                    <h3 class="list-title">zoombie walking animation</h3>
                </div>

                {{-- <div class="list">
              <video src="images/vid-3.mp4" class="list-video"></video>
              <h3 class="list-title">emoji falling animation</h3>
           </div>
     
           <div class="list">
              <video src="images/vid-4.mp4" class="list-video"></video>
              <h3 class="list-title">3D town animation</h3>
           </div>
     
           <div class="list">
              <video src="images/vid-5.mp4" class="list-video"></video>
              <h3 class="list-title">man chasing carrot animation</h3>
           </div>
     
           <div class="list">
              <video src="images/vid-6.mp4" class="list-video"></video>
              <h3 class="list-title">door hinge animation</h3>
           </div>
     
           <div class="list">
              <video src="images/vid-7.mp4" class="list-video"></video>
              <h3 class="list-title">poeple walking in town animation</h3>
           </div>
     
           <div class="list">
              <video src="images/vid-8.mp4" class="list-video"></video>
              <h3 class="list-title">knight chasing virus animation</h3>
           </div>
     
           <div class="list">
              <video src="images/vid-9.mp4" class="list-video"></video>
              <h3 class="list-title">3D helicopter animation</h3>
           </div> --}}

            </div>

        </div>
    @endif
    <div class="footer start-footer">
        <p>Copyright © 2022 beta education Co., Ltd. All Rights Reserved.
            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">soul</a>
        </p>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/courses.js') }}"></script>
    <script src="{{ asset('assets/js/course-details.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>

</html>
