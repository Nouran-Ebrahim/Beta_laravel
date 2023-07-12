<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/reg.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Join Us</title>
</head>

<body>
    <div class="reg" style="margin-top: 6%;">
        <div class="back">
            <a href="{{route('index')}}"><i class="bi bi-arrow-left-circle-fill"></i></a>
            <p>Sign UP</p>
        </div>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">Name</label>
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">Mobile</label>
                    <input name="mobile" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Mobile"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">Perent Mobile</label>
                    <input name="parent_mobile" type="text" class="form-control" id="formGroupExampleInput" placeholder="Perent Mobile"
                        required>
                </div>
            </div>

            <div class="form-row justify-items-center align-items-center ">
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">Phone</label>
                    <input name="phone" type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone">
                </div>
                <div class="form-check">
                    <input  type="radio" name="gender" id="male"
                        value="male">
                    <label  for="male">
                        Male
                    </label>
                    <input  type="radio" name="gender" id="female"
                        value="female">
                    <label  for="female">
                    Female
                    </label>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">City</label>
                    <input name="city" type="text" class="form-control" id="formGroupExampleInput" placeholder="City" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">School</label>
                    <input name="school" type="text" class="form-control" id="formGroupExampleInput" placeholder="School Name"
                        required>
                </div>
            </div>
            <div class="form-row justify-items-center align-items-center">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Your Grade</label>
                    <select name="grade" class="form-control" id="exampleFormControlSelect1" required>
                        <option>1st Preparatory </option>
                        <option>2nd Preparatory </option>
                        <option>3th Preparatory </option>
                        <option>1st Secoundary </option>
                        <option>2nd Secoundary </option>
                        <option>3th Secoundary </option>
                    </select>
                </div>
                <div>
                    <div class="form-check">
                        <input type="radio" name="type" id="exampleRadios2"
                            value="Experimental School">
                        <label class="form-check-label" for="exampleRadios2">
                            Experimental School
                        </label>
                    </div>
                    <div class="form-check">
                        <input  type="radio" name="type" id="exampleRadios2"
                            value="Languege School">
                        <label  for="exampleRadios2">
                            Languege School
                        </label>
                    </div>
                </div>
            </div>
            <div class="center">
                <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
        {{-- @php
            if(isset($_POST['submit'])){
                echo "<script>alert('done');</script>";
            }
        @endphp --}}
    </div>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}">

</body>

</html>