<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            nav {
                padding-left: 30px;
                padding-right: 30px;
                background-color: #696969;
                font-size: 18px;
            }
            .extra {
                font-size: 23px;
            }
            .src {
                font-size: 18px;
            }
            .bt {
                background-color: #808080;
                outline-color: black;
                border-radius: 0px 5px 5px 0px;
            }
            .fixed-top {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                z-index: 1030;
            }
            li {
                padding-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <header class="header">
                <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color fixed-top">
                <a class="navbar-brand extra" href="{{URL::to('/')}}">Perpustakaan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Activity
                        </a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Peminjaman</a>
                        <a class="dropdown-item" href="#">Pengembalian</a>
                        <a class="dropdown-item" href="#">Pembayaran Denda</a>
                        </div>
                    </li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <form class="navbar-form navbar-left" action="#">
                        <div class="input-group src">
                            <input type="text" class="form-control" placeholder="Search Book">
                            <div class="input-group-btn">
                            <button type="submit" class="btn btn-secondary bt">Go</button>
                            </div>
                        </div>
                    </form>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Profile
                        <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">My Account</a>
                        <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                    </ul>
                </div>
                </nav>
            </header>
        </div>
        <!-- JavaScript Bundle with Popper.js -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    </body>
</html>