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
    !-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
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
    <!-- Courses Start -->
    @if (Session::has('id'))
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5">

                    @if ($id == 1)
                        <h1 class="text" id="title">أولى إعدادى </h1>
                    @else
                        @if ($id == 2)
                            <h1 class="text" id="title">ثانيه إعدادى  </h1>
                        @else
                            <h1 class="text" id="title">ثالثه إعدادى  </h1>
                        @endif
                    @endif

                </div>
                @if (Session::has('success'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <h2 style="direction: rtl;color:white;">قسم المدارس العربي</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">

                            <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}" alt="">

                            <div class="course-content p-4">
                                @if ($id == 1)

                                    <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'arabic']) }}">عربي اولي</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'arabic']) }}">عربي ثانيه</a>
                                    @else
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'arabic']) }}">عربي ثالثه</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'arabic','lang'=>'ar']) }}> اشترك الان
                                        </a>

                                        <h5 class="m-1">$99</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/maths.png') }}" alt="">

                            <div class="course-content p-4">

                                @if ($_GET['id'] == 1)
                                    <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'math']) }}">رياضيات اولي
                                    </a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'math']) }}">رياضيات ثانيه</a>
                                    @else
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'math']) }}">رياضيات</a>
                                    @endif
                                @endif

                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'math','lang'=>'ar']) }}> اشترك الان
                                        </a>
                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/mountain.png') }}"
                                alt="">
                            <div class="course-content p-4">

                                @if ($id == 1)
                                    <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'social']) }}">دراسات اولي</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'social']) }}">دراسات تانيه</a>
                                    @else
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'social']) }}">دراسات</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'social' ,'lang'=>'ar']) }}> اشترك الان
                                        </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/physics.png') }}"
                                alt="">
                            <div class="course-content p-4">

                                @if ($id == 1)
                                    <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'science']) }}">علوم اولي</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'science']) }}">علوم ثانيه</a>
                                    @else
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'science']) }}">علوم</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'science','lang'=>'ar']) }}> اشترك الان
                                        </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/english.png') }}"
                                alt="">
                            <div class="course-content p-4">

                                @if ($id == 1)
                                    <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'english']) }}">انجليزي اولي</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'english']) }}">انجليزي ثانيه </a>
                                    @else
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'english']) }}">انجليزي</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'english','lang'=>'ar']) }}> اشترك الان
                                        </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/france.png') }}"
                                alt="">
                            <div class="course-content p-4">

                                @if ($id == 1)
                                    <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'frensh']) }}">فرنساوي اولي</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'frensh']) }}">فرنساوي ثانيه</a>
                                    @else
                                        <a class="h5" href="{{ route('showdetails', ['id' => $id,'subject' => 'frensh']) }}">فرنساوي</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'frensh','lang'=>'ar']) }}> اشترك الان
                                        </a>

                                        <h5 class="m-0">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- قسم اللغاااات -->
                <!-- Courses Start -->
                <h2 style="color:white;">Language school section</h2>
                <div class="row" >
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">

                            <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                alt="">

                            <div class="course-content p-4">

                                @if ($id == 1)
                                    <a class="h5" href=""> 1st Arabic</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href=""> 2st Arabic</a>
                                    @else
                                        <a class="h5" href=""> 3st Arabic</a>
                                    @endif
                                @endif

                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('subscribe', ['id' => $id, 'subject' => 'arabic','lang'=>'en']) }}> join now </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/maths.png') }}"
                                alt="">

                            <div class="course-content p-4">
                                
                                @if ($id == 1)
                                    <a class="h5" href=""> 1st Math</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href=""> 2st Math</a>
                                    @else
                                        <a class="h5" href=""> 3st Math</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('subscribe', ['id' => $id, 'subject' => 'math','lang'=>'en']) }}> join now </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/mountain.png') }}"
                                alt="">
                            <div class="course-content p-4">
                               
                                @if ($id == 1)
                                    <a class="h5" href=""> 1st Scoial Studies</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href=""> 2st Scoial Studies</a>
                                    @else
                                        <a class="h5" href=""> 3st Scoial Studies</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('subscribe', ['id' => $id, 'subject' => 'social','lang'=>'en']) }}> join now </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/physics.png') }}"
                                alt="">
                            <div class="course-content p-4">
                               
                                @if ($id == 1)
                                    <a class="h5" href=""> 1st Science</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href=""> 2st Science</a>
                                    @else
                                        <a class="h5" href=""> 3st Science</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent"
                                            href={{ route('subscribe', ['id' => $id, 'subject' => 'science','lang'=>'en']) }}> join now </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/english.png') }}"
                                alt="">
                            <div class="course-content p-4">
                               
                                @if ($id == 1)
                                    <a class="h5" href=""> 1st English</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href=""> 2st English</a>
                                    @else
                                        <a class="h5" href=""> 3st English</a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('subscribe', ['id' => $id, 'subject' => 'english','lang'=>'en']) }}> join now </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">
                            <img class="img-fluid photo" src="{{ asset('assets/images/france.png') }}"
                                alt="">
                            <div class="course-content p-4">
                                
                                @if ($id == 1)
                                    <a class="h5" href=""> 1st French</a>
                                @else
                                    @if ($id == 2)
                                        <a class="h5" href=""> 2st French</a>
                                    @else
                                        <a class="h5" href=""> 3st French </a>
                                    @endif
                                @endif
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('subscribe', ['id' => $id, 'subject' => 'frensh','lang'=>'en']) }}> join now </a>

                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <div class="row button-block">
                        <a class="thanwy-btn mr" href="{{ route('joinus') }}"><button type="button"
                                class="btn btn-outline-danger">please
                                joinus</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Courses End -->
    <div class="footer start-footer">
        <p>Copyright © 2022 beta education Co., Ltd. All Rights Reserved.
            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">soul</a>
        </p>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/courses.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>

</html>
