<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahsboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('main/dist/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('main/dist/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('main/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('main/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('main/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('main/dist/assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <style>
        .sidebar-wrapper .sidebar-header img {
            height: 5.2rem;
        }

        .sidebar-wrapper .menu .sidebar-item.active .sidebar-link {
            background-color: #d0010187;
        }
    </style>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{url('dashboard')}}"><img src="{{asset('main/dist/assets/images/logo.png')}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                @include('main/sidebar')
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>



            @yield('container')

            <script src="{{asset('main/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}">
            </script>
            <script src="{{asset('main/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

            <script src="{{asset('main/dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
            <script src="{{asset('main/dist/assets/js/pages/dashboard.js')}}"></script>

            <script src="{{asset('main/dist/assets/js/main.js')}}"></script>
</body>

</html>