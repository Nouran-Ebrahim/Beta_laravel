<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <title>thanwy Cources</title>
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
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

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

                        <a href="index.blade.php" class="logo logo-img">
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
    @if (Session::has('id'))
        <!-- Courses Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    @if ($id == 1)

                        <h1 class="text" id="title">اولي ثانوي </h1>
                    @else
                        @if ($id  == 2 && $sub  == 1)

                            <h1 class="text" id="title">ثانيه ثانوي ادبي</h1>
                        @elseif($id == 2 && $sub == 2)
                            <h1 class="text" id="title">ثانيه ثانوي علمي</h1>
                        @else
                            @if ($sub == 1)
                                <h1 class="text" id="title">ثالثه ثانوي ادبي</h1>
                            @else
                                @if ($sub == 2)
                                    <h1 class="text" id="title">ثالثه ثانوي علمي علوم</h1>
                                @else
                                    <h1 class="text" id="title">ثالثه ثانوي علمي رياضه</h1>
                                @endif
                            @endif
                        @endif
                    @endif
                </div>
                @if (Session::has('successth'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('successth') }}
                </div>
            @endif
            <h2 style="direction: rtl;color:white;">قسم المدارس العربي</h2>
                <div class="row" >
                    @if ($id == 1)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2 bg">

                                <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                    alt="">

                                <div class="course-content p-4">
                                    
                                    <a class="h5" href="">عربي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'arabic','lang'=>'ar']) }}> اشترك الان </a>
                                            <h5 class="m-1">$99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2 bg">

                                <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                    alt="">

                                <div class="course-content p-4">
                                    
                                    <a class="h5" href="">الفلسفه والمنطق</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'philosophyLogic','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">جبر وحساب مثلثات</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'algebratrigonometry','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">الهندسه التحليلية</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'analyticalengineering','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">تاريخ</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'history','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">جغرفيا</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'geography','lang'=>'ar']) }}> اشترك الان </a>
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
            
                                    <a class="h5" href="">الفزياء</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'physics','lang'=>'ar']) }}> اشترك الان </a>
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
            
                                    <a class="h5" href="">الكمياء</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'chemistry','lang'=>'ar']) }}> اشترك الان </a>
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
            
                                    <a class="h5" href="">الاجياء</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'biology','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">انجليزي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'english','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">فرنساوي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'frensh','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">ايطالي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'italian','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">اللماني</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'german','lang'=>'ar']) }}> اشترك الان </a>
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
                                    
                                    <a class="h5" href="">اسباني</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'spanish','lang'=>'ar']) }}> اشترك الان </a>
                                            <h5 class="m-1">$99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($id == 2 && $sub == 1)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2 bg">

                                <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                    alt="">

                                <div class="course-content p-4">
                                    
                                    <a class="h5" href="">عربي ادبي{{$sub}}</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'اللغه العربيه','sec'=>'ادبي','sub'=>$sub]) }}> اشترك الان </a>
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
                                   
                                    <a class="h5" href="">رياضيات</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'رياضيات','sec'=>'ادبي','sub'=>$sub]) }}> اشترك الان </a>

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
                                    
                                    <a class="h5" href="">دراسات</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                   
                                    <a class="h5" href="">علوم</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                   
                                    <a class="h5" href="">انجليزي ثانيه</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                   
                                    <a class="h5" href="">فرنساوي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-1">$99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($id == 2 && $sub == 2)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2 bg">

                                <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                    alt="">

                                <div class="course-content p-4">
                                   
                                    <a class="h5" href="">عربي علمي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'اللغه العربيه','sec'=>'علمي','sub'=>$sub]) }}> اشترك الان </a>

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
                                    
                                    <a class="h5" href="">رياضيات</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'الرياضيات','sec'=>'علمي','sub'=>$sub]) }}> اشترك الان </a>

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
                                    
                                    <a class="h5" href="">دراسات</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                   
                                    <a class="h5" href="">علوم</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">انجليزي ثانيه</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                   
                                    <a class="h5" href="">فرنساوي</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-1">$99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @if ($sub == 1)
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="rounded overflow-hidden mb-2 bg">

                                    <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                        alt="">

                                    <div class="course-content p-4">
                                     
                                        <a class="h5" href="">عربي تالته ادبي</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'اللغه العربيه','sec'=>'ادبي','sub'=>$sub]) }}> اشترك الان </a>

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
                                       
                                        <a class="h5" href="">رياضيات ادبي</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                       
                                        <a class="h5" href="">دراسات</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                       
                                        <a class="h5" href="">علوم</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                       
                                        <a class="h5" href="">انجليزي ثانيه</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                       
                                        <a class="h5" href="">فرنساوي</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="m-1">$99</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @if ($sub == 2)
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="rounded overflow-hidden mb-2 bg">

                                        <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                            alt="">

                                        <div class="course-content p-4">
                                           
                                            <a class="h5" href="">عربي</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'اللغه العربيه','sec'=>'علمي علوم','sub'=>$sub]) }}> اشترك الان </a>

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
                                          
                                            <a class="h5" href="">رياضيات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">دراسات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">انجليزي تالته علمي علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">فرنساوي علمي علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="m-1">$99</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="rounded overflow-hidden mb-2 bg">

                                        <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                            alt="">

                                        <div class="course-content p-4">
                                            
                                            <a class="h5" href="">عربي</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <a class="btn btn-danger" href={{ route('secoundtherdsubscribe', ['id'=>$id,'subject'=>'اللغه العربيه','sec'=>'علمي رياضه','sub'=>$sub]) }}> اشترك الان </a>

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
                                            
                                            <a class="h5" href="">رياضيات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">دراسات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                           
                                            <a class="h5" href="">علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                           
                                            <a class="h5" href="">انجليزي ثانيه</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">فرنساوي علمي رياضه</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="m-1">$99</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                    @endif

                </div>
                <!-- قسم اللغاااات -->
                <!-- Courses Start -->
                <h2 style="color:white;">Language school section</h2>
                <div class="row" >
                    @if ($id == 1)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">

                            <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                alt="">

                            <div class="course-content p-4">
                                
                                <a class="h5" href="">عربي</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'arabic','lang'=>'en']) }}> Join now </a>
                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2 bg">

                            <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                alt="">

                            <div class="course-content p-4">
                                
                                <a class="h5" href="">الفلسفه والمنطق</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'philosophyLogic','lang'=>'en']) }}> Join now</a>
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
                                
                                <a class="h5" href="">Algebratr and Igonometry</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'algebratrigonometry','lang'=>'en']) }}> Join now  </a>
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
                                
                                <a class="h5" href=""> Analytical Engineering</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'analyticalengineering','lang'=>'en']) }}> Join now  </a>
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
                                
                                <a class="h5" href="">تاريخ</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'history','lang'=>'en']) }}>  Join now </a>
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
                                
                                <a class="h5" href="">جغرفيا</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'geography','lang'=>'en']) }}> Join now  </a>
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
        
                                <a class="h5" href="">physics</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'physics','lang'=>'en']) }}> Join now </a>
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
        
                                <a class="h5" href="">Chemistry</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'chemistry','lang'=>'en']) }}>  join now </a>
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
        
                                <a class="h5" href="">Biology</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'biology','lang'=>'en']) }}>  join now </a>
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
                                
                                <a class="h5" href="">English</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'english','lang'=>'en']) }}>  join now </a>
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
                                
                                <a class="h5" href="">Frensh</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'frensh','lang'=>'en']) }}>  join now </a>
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
                                
                                <a class="h5" href="">Italian</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'italian','lang'=>'en']) }}>  join now </a>
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
                                
                                <a class="h5" href="">German</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'german','lang'=>'en']) }}>  join now </a>
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
                                
                                <a class="h5" href="">Spanish</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger sent" href={{ route('firstsubscribe', ['id'=>$id,'subject' => 'spanish','lang'=>'en']) }}>  join now </a>
                                        <h5 class="m-1">$99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($id == 2 && $sub == 2)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2 bg">

                                <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                    alt="">

                                <div class="course-content p-4">
                                   
                                    <a class="h5" href="">2ndArabic 3lmy</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">

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
                                    
                                    <a class="h5" href="">math</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">sosical studies</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">since</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                   
                                    <a class="h5" href="">English </a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">frensh</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-1">$99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($id == 2 && $sub == 1)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2 bg">

                                <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                    alt="">

                                <div class="course-content p-4">
                                    
                                    <a class="h5" href="">2ndArabic 2daby</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">

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
                                    
                                    <a class="h5" href="">math</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">sosical studies</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">since</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">English </a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
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
                                    
                                    <a class="h5" href="">frensh</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-1">$99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @if ($sub == 1)
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="rounded overflow-hidden mb-2 bg">

                                    <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                        alt="">

                                    <div class="course-content p-4">
                                        
                                        <a class="h5" href="">3rd arabic 2daby</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">

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
                                        
                                        <a class="h5" href="">math 2daby </a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                        
                                        <a class="h5" href="">دراسات</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                        
                                        <a class="h5" href="">علوم</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                        
                                        <a class="h5" href="">انجليزي ثانيه</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
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
                                       
                                        <a class="h5" href="">فرنساوي</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="m-1">$99</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @if ($sub == 2)
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="rounded overflow-hidden mb-2 bg">

                                        <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                            alt="">

                                        <div class="course-content p-4">
                                           
                                            <a class="h5" href="">3rd arbic 3loom</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">

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
                                           
                                            <a class="h5" href="">رياضيات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="m-1">$99</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="rounded overflow-hidden mb-2 bg">
                                        <img class="img-fluid photo"
                                            src="{{ asset('assets/images/mountain.png') }}" alt="">
                                        <div class="course-content p-4">
                                            
                                            <a class="h5" href="">دراسات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">انجليزي تالته علمي علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                            
                                            <a class="h5" href="">فرنساوي علمي علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="m-1">$99</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="rounded overflow-hidden mb-2 bg">

                                        <img class="img-fluid photo" src="{{ asset('assets/images/arabic.png') }}"
                                            alt="">

                                        <div class="course-content p-4">
                                           
                                            <a class="h5" href="">3rd arabic ryada</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">

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
                                            
                                            <a class="h5" href="">رياضيات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="m-1">$99</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="rounded overflow-hidden mb-2 bg">
                                        <img class="img-fluid photo"
                                            src="{{ asset('assets/images/mountain.png') }}" alt="">
                                        <div class="course-content p-4">
                                           
                                            <a class="h5" href="">دراسات</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                           
                                            <a class="h5" href="">علوم</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                           
                                            <a class="h5" href="">انجليزي ثانيه</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
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
                                           
                                            <a class="h5" href="">فرنساوي علمي رياضه</a>
                                            <div class="border-top mt-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="m-1">$99</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                    @endif

                </div>
                <!-- Courses End -->
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

    <div class="footer start-footer">
        <p>Copyright © 2022 beta education Co., Ltd. All Rights Reserved.
            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">soul</a>
        </p>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/thanwy.js') }}"></script>



</body>

</html>
