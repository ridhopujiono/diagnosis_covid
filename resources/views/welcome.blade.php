<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('main/dist/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('main/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('main/dist/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('main/dist/assets/css/pages/auth.css')}}">
</head>

<body>
    <style>
        #auth #auth-left .auth-logo img {
            height: 5rem;
        }

        #auth #auth-left .auth-logo {
            margin-bottom: unset;
            margin-bottom: 25px;
        }

        #auth #auth-right {
            height: 100%;
            background: url(../../images/bg/4853433.jpg), linear-gradient(90deg, #435ebe, #d00000);
        }
    </style>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <!-- <center>
                            <a href="index.html"><img src="{{asset('main/dist/assets/images/logo.png')}}" alt="Logo"></a>

                        </center> -->
                        <img src="{{asset('main/dist/assets/images/logo.png')}}" style="height: 175px" alt="">
                        <h4 class="ms-3" style="    color: #746f6f;
                        letter-spacing: 2px;">DiagnosisCovid</h4>
                    </div>

                    <h3 class="text-center">Login</h3>
                    @error('email')
                    <div class="alert alert-danger">
                        Data anda tidak sesuai
                    </div>
                    @enderror
                    @if(session('success'))
                    <div class="alert alert-success">
                        Registrasi berhasil
                    </div>
                    @endif
                    <form action="{{url('auth')}}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2" style="background-color: #15253d;" type="submit">Log in</button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-6">
                        <p class="text-gray-600">Tidak punya akun ? <a href="{{url('regis')}}" class="font-bold">Registrasi</a>.</p>

                    </div>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" style="background-color: red;">
                    <center>
                        <img src="{{asset('main/dist/assets/images/doctor.png')}}" style="height: 100vh" alt="">

                    </center>
                </div>
            </div>
        </div>

    </div>
</body>

</html>