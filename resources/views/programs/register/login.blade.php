<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="/image/png" href="{{asset('programs/form/assets/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('programs/form/assets/css/util.css')}}">
    <script src="https://unpkg.com/feather-icons"></script>
    @extends('layouts.layout')
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter" style="background-color: #ebeeef">

        <div class="container" style="padding:20px 0px 0px 20px;background-color: #ebeeef;">
            <a href="{{route('programs.hackathon')}}" style="font-size: 13px;font-weight: 600;text-transform: uppercase;letter-spacing: 1px;display: inline-block;padding: 10px 32px;border-radius: 4px;background: #F39C12; color:black;">Go to Home</a>
        </div>
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{asset('programs/form/assets/images/bg-01.jpg)')}}">
                    <span class="login100-form-title-1">
                        Vadodara
                        Hackathon 2.0 Login
                    </span>
                </div>
                <x-alert />
                <div class="container p-5">
                    <div class="d-flex row mx-5">
                        <div class="col-lg-8 mx-auto my-3">
                            <a href="{{ route('login.auth') }}" class="d-flex justify-content-center">
                                <button class=" btn btn-outline-info text-dark p-3 font-weight-bold">
                                    <span class="mx-1"><img src="{{ asset('logos/google.svg') }}" alt="google-logo" width="20" height="20"></span>
                                    Sign In With Google
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-8 mx-auto my-3">
                            <a href="{{ route('login.github') }}" class="d-flex justify-content-center">

                                <button class=" btn btn-outline-info text-dark p-3 font-weight-bold">
                                    <span class="mx-1"><img src="{{ asset('logos/github.svg') }}" alt="github-logo" width="20" height="20"></span>
                                    Sign In With Github
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-8 mx-auto my-3">
                            <a href="" class="d-flex justify-content-center">
                                <button class=" btn btn-outline-info text-dark p-3 font-weight-bold">
                                    <span class="mx-1"><img src="{{ asset('logos/linkedin.svg') }}" alt="linkedin-logo" width="20" height="20"></span>
                                    Sign In With linkedin
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        feather.replace()

    </script>
    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('programs/form/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('programs/form/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('programs/form/assets/js/main.js')}}"></script>

</body>

</html>
