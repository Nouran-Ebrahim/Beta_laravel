<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @livewireStyles --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <title>Admin</title>
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


    <form method="GET" action="{{ route('links') }}"
        style="color: white;
    position: relative;
    top: 125px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction:column;">
        @csrf
        <div class="row" style="width: 100%;justify-content: center;">
            <div class="col-3">
                <select class="form-select form-select-lg mb-3" name='sub_name' aria-label=".form-select-lg example">
                    {{-- <option selected>اسم المادة</option> --}}
                    <option value="arabic">اللغة العربية</option>
                    <option value="english">انجليزى</option>
                    <option value="math">رياضة</option>
                    <option value="physics">فيزياء</option>
                    <option value="chemistry">كيمياء</option>
                    <option value="biology">احياء</option>
                    <option value="philosophyLogic">علم نفس و فلسفة </option>
                    <option value="geography">جغرافيا</option>
                    <option value="history">تاريخ</option>
                    <option value="analyticalengineering"> هندسة تحليلية</option>
                    <option value="algebratrigonometry">جبر</option>
                    <option value="frensh">فرنساوى</option>
                    <option value="german">المانى</option>
                    <option value="spanish">اسبانى</option>
                    <option value="italian">ايطالى</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select form-select-lg mb-3" name='prep_or_thanwy'
                    aria-label=".form-select-lg example">
                    {{-- <option selected>المرحلة</option> --}}
                    <option value="prep">الاعدادية</option>
                    <option value="thanwy">الثانوية</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select form-select-lg mb-3" name='level' aria-label=".form-select-lg example">
                    {{-- <option selected>السنة الدراسية</option> --}}
                    <option value="1">الصف الاول</option>
                    <option value="2">الصف الثانى</option>
                    <option value="3">الصف الثالث</option>
                </select>
            </div>

        </div>
        <div class="row">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>

    </form>

    <div class="row" style="position: relative;
    top: 155px;
    width: fit-content;
    left: 110px;">
        <div>
            <table class="table" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">subjest</th>
                        <th scope="col">unit</th>
                        <th scope="col">lesson</th>
                        <th scope="col">link</th>
                        <th scope="col" style="display: none" class='show'>New Link</th>
                    </tr>
                </thead>
                <tbody>

                    @for ($i = 1; $i <= $unit; $i++)
                        @foreach ($link as $links)
                            @if ($i == $links->unit_number)
                                <tr>
                                    <th scope="row">{{ $links->sub_name }}</th>
                                    <td scope="row">unit {{ $links->unit_number }}</td>
                                    <td scope="row">{{ $links->lesson_number }}</td>
                                    <td scope="row" id="link" style="width: 500px;">{{ $links->link }}</td>

                                    <td scope="row" style="display: none" class='show'><input type=""
                                            class="form-control" id="new-link" aria-describedby="emailHelp"
                                            placeholder="inter the new link">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success" id="edit-btn">Edit</button>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success show" id="save-btn" style="display: none">save</button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endfor
                </tbody>
            </table>
        </div>
        


    </div>
    <!-- ***** footer Area Start ***** -->
    <div class="footer start-footer"
        style="position: absolute;
                                            bottom: 0;
                                            right: 0;
                                            left: 0;">
        <p>Copyright © 2022 beta education Co., Ltd. All Rights Reserved.
            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">soul</a>
        </p>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/courses.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('#butsave').on('click', function() {
                var name = $('.class="my-class"').val();
                console.log(name)
            });
        });
        $("#edit-btn").click(function() {
            console.log('name')
            $(".show").css('display', 'block');
            $("#edit-btn").css('display', 'none');
            $("#edit-btn").css('pointer-events', 'none');

            // $("#id").attr("placeholder","inter the new link");
        });
        //  function edit(link , unit , lesson) {

        //   $("#link").append(" <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="inter the new link">");

        //  }
    </script>
</body>

</html>
