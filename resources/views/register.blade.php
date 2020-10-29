<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Radley:ital@1&display=swap" rel="stylesheet">

        <!-- <link href="/website/vendor/scrivo/highlight.php/styles/styles.css" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Radley', serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .page-content {
                outline-color: black;
                width: 750px;
                height: 530px;
                background-color: #696969;
                border-radius: 30px;
                vertical-align: auto;
            }

            .title {
                font-size: 40px;
                padding-top: 15px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            input {
                width: 500px;
                height: 30px;
            }

            button {
                width: 30%;
                height: 25px;
                font-size: 14px;
                vertical-align: middle;
            }

            label {
                align-items: left;
                font-size: 16px;
            }

            .register {
                width: fit-content;
                height: fit-content;
                stroke-linecap: round;
                color: coral;
            }

            form {
                padding-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="page-content">

            <div class="content">
                <div class="title m-b-md">
                    Register Form
                </div>

                <!-- <div class="page-content"> -->

                <form class="" action="{{URL::to('/signup')}}" method="post">

                    <!-- <label for="username">Username</label> -->
                    <input type="text" name="username" placeholder="Username" value="">
                    <br><br>
                    <!-- <label for="name">Nama</label> -->
                    <input type="text" name="name" placeholder="Name" value="">
                    <br><br>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" name="email" placeholder="Email" id="">
                    <br><br>
                    <!-- <label for="telp">No Telepon</label> -->
                    <input type="text" name="telp" placeholder="Phone Number" value="">
                    <br><br>
                    <!-- <label for="alamat">Alamat</label> -->
                    <input type="text" name="alamat" placeholder="Address" value="">
                    <br><br>
                    <!-- <label for="password">Password</label> -->
                    <input type="password" name="password" placeholder="Password" value="">
                    <br><br>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <button type="submit" name="button">Register</button>
                </form>

                Have an account? <a href="{{URL::to('/login')}}">Login</a>   

                <!-- </div> -->
            </div>
            </div>

        </div>
    </body>
</html>