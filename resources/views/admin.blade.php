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
        <div class="container py-5">
            <form method="post" action="{{route('adminstore')}}">
                @csrf
                <p>Please select the student:</p>

                @foreach ($FetchData as $data)
                   <button type="submit" name="id" value="{{$data->student_id}}"> edit </button>
                    <label style="color: white" for="html">{{$data->name}}</label><br>
                    @endforeach
                {{-- <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Student_id</th>
                        <th scope="col">1math</th>
                        <th scope="col">1arabic</th>
                        <th scope="col">2math</th>
                        <th scope="col">2arabic</th>
                        <th scope="col">3math</th>
                        <th scope="col">3arabic</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($FetchData as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->student_id}}</td>
                        <td><select name="selected" class="form-select" aria-label="Default select example">
                            <option selected>closed</option>
                            <option value="1">open</option>
                          </select>
                        </td>
                        <td><select name="selected1" class="form-select" aria-label="Default select example">
                            <option selected>closed</option>
                            <option value="1">open</option>
                          </select></td>
                        <td><select name="selected2" class="form-select" aria-label="Default select example">
                            <option selected>closed</option>
                            <option value="1">open</option>
                          </select></td>
                        <td><select name="selected3" class="form-select" aria-label="Default select example">
                            <option selected>closed</option>
                            <option value="1">open</option>
                          </select></td>
                        <td><select name="selected4" class="form-select" aria-label="Default select example">
                            <option selected>closed</option>
                            <option value="1">open</option>
                          </select></td>
                        <td><select name="selected5" class="form-select" aria-label="Default select example">
                            <option selected>closed</option>
                            <option value="1">open</option>
                          </select></td>
                    </tr>
                @endforeach
                    
                </tbody>
            </table> --}}
                
            </form>
        </div>
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

</body>

</html>
{{-- <script>
    $(document).ready(function() {

        $('#butsave').on('click', function() {
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var city = $('#city').val();
            var password = $('#password').val();
            if (name != "" && email != "" && phone != "" && city != "") {
                /*  $("#butsave").attr("disabled", "disabled"); */
                $.ajax({
                    url: "/userData",
                    type: "POST",
                    data: {
                        _token: $("#csrf").val(),
                        type: 1,
                        name: name,
                        email: email,
                        phone: phone,
                        city: city
                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            window.location = "/userData";
                        } else if (dataResult.statusCode == 201) {
                            alert("Error occured !");
                        }

                    }
                });
            } else {
                alert('Please fill all the field !');
            }
        });
    });
</script> --}}