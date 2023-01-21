<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/0b65baf2e5.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <style>
        .dropdown-toggle::after {
            content: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fs-3" href="#"><img src="{{ asset('storage/assets/logo.png') }}" width="220px"
                    alt=""></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fs-5">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    @guest
                        <li class="nav-item fs-5">
                            <a class="nav-link" href="/catalogue">Car Catalougue</a>
                        </li>
                    @endguest
                    @lesse
                        <li class="nav-item fs-5">
                            <a class="nav-link" href="/catalogue">Car Catalougue</a>
                        </li>
                    @endlesse
                    @lessor
                        <li class="nav-item fs-5">
                            <a class="nav-link" href="/ownedCars">Owned Cars</a>
                        </li>
                    @endlessor
                    <li class="nav-item fs-5">
                        <a class="nav-link" href="#myProject">Contact Us</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle" style="font-size: 20px"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenu">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                @lesse
                                    <li><a class="dropdown-item" href="/orders">Orders</a></li>
                                    <li><a class="dropdown-item" href="/history">History</a></li>
                                @endlesse
                                @lessor
                                    <li><a class="dropdown-item" href="/history">Add Vehicle</a></li>
                                    <li><a class="dropdown-item" href="/pendingOrder">Pending Orders</a></li>
                                    <li><a class="dropdown-item" href="/history">History</a></li>
                                @endlessor
                                <li><a class="dropdown-item" href="/logout">Log out</a></li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item fs-5">
                            <a class="btn btn-outline-primary size" href="/register" role="register">Register</a>
                        </li>
                        <li class="nav-item fs-5">
                            <a class="btn btn-outline-primary size" href="/login" role="login">Login</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @extends('components.footer')
</body>

</html>
