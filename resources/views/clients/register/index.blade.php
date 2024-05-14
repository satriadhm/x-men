<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('auth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('auth/css/main.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--===============================================================================================-->
</head>

<body>
    @include('sweetalert::alert')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route('login-check') }}" method="POST">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        Daftar Untuk Pertama Kali
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid username is required: abc123">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid phone number is required">
                        <input class="input100" type="text" name="phone">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Phone Number</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Confirm Password</span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="Role is required">
						<select class="input100" name="role" style="border: none;">
							<option value="">role</option>
							<option value="admin">Admin</option>
							<option value="talent">Talent</option>
						</select>
					</div>
                    @include('sweetalert::alert')


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Masuk
                        </button>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url({{ url('auth/images/bg-01.jpg') }});">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="{{ url('auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('auth/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('auth/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ url('auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('auth/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('auth/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ url('auth/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('auth/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('auth/js/main.js') }}"></script>

</body>

</html>
