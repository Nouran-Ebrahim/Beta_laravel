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
                            @if (Session::get('id') === 70)
                                <li><a href="{{ route('admin') }}">Admin</a></li>
                            @endif
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
    <div class="container-fluid py-5">
        <div style="color: white" class="container py-5">


            {{ $course_data->name }}
        </div>
        <form method="post" action="{{ route('change_status', ['st_id' =>$course_data->student_id ]) }}">
            @csrf
            @for ($i = 3; $i < count($col_names) - 2; $i++)
                @php
                    $sub = $col_names[$i];
                    $status = $course_data->$sub;
                @endphp
                <label style="color: white">open</label>
                <input type="radio"  name={{ $col_names[$i]}} value="open">
                <label style="color: white">closed</label>
                <input type="radio"  name={{ $col_names[$i]}} value="closed">
                <label style="color: white" > {{ $col_names[$i] }}</label>
                <label style="color: white"> {{ $status }}</label><br>


                {{-- <input class="my-class" type="checkbox" id="math1" name="cource{{$i}}" value="{{ $col_names[$i] }}">
            <label style="color: white" for="math1"> {{ $col_names[$i]}}</label>
            <label style="color: white" > {{ $status}}</label><br>   --}}
            @endfor

            <input class="#butsave" type="submit" value="Submit">
        </form>
    </div>
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
    <script>
        $(document).ready(function() {

            $('#butsave').on('click', function() {
                var name = $('.class="my-class"').val();
                // var email = $('#email').val();
                // var phone = $('#phone').val();
                // var city = $('#city').val();
                // var password = $('#password').val();
                console.log(name)
                // if (name != "" && email != "" && phone != "" && city != "") {
                //     /*  $("#butsave").attr("disabled", "disabled"); */
                //     $.ajax({
                //         url: "/userData",
                //         type: "POST",
                //         data: {
                //             _token: $("#csrf").val(),
                //             type: 1,
                //             name: name,
                //             email: email,
                //             phone: phone,
                //             city: city
                //         },
                //         cache: false,
                //         success: function(dataResult) {
                //             console.log(dataResult);
                //             var dataResult = JSON.parse(dataResult);
                //             if (dataResult.statusCode == 200) {
                //                 window.location = "/userData";
                //             } else if (dataResult.statusCode == 201) {
                //                 alert("Error occured !");
                //             }

                //         }
                //     });
                // } else {
                //     alert('Please fill all the field !');
                // }
            });
        });
    </script>
</body>

</html>
