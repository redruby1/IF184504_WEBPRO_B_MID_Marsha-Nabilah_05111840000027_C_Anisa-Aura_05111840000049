@include('includes.navbar')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .title {
                font-size: 35px;
                padding bottom: 30px;
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

            input {
                width: 500px;
                height: 30px;
            }

            button {
                width: 30%;
                height: 25px;
                font-size: 14px;
                vertical-align: middle;
                background-color: gray;
                color: white;
            }

            form {
                padding-bottom: 10px;
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{URL::to('/homepage')}}">Home</a>
                    @else
                        <a href="{{URL::to('/login')}}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{URL::to('/register')}}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">INSERT NEW BOOK'S DATA</div>
                <form class="" action="{{URL::to('/book-plus')}}" method="post">
                    <input type="text" name="nomor" placeholder="Book Number" value="">
                    <br><br>
                    <input type="text" name="judul" placeholder="Title" value="">
                    <br><br>
                    <input type="text" name="penulis" placeholder="Author" id="">
                    <br><br>
                    <input type="text" name="penerbit" placeholder="Publisher" value="">
                    <br><br>
                    <input type="text" name="tahun" placeholder="Year" value="">
                    <br><br>
                    <input type="text" name="kategori" placeholder="Category" value="">
                    <br><br>
                    <input type="text" name="deskripsi" placeholder="Description" value="">
                    <br><br>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <button type="submit" name="button">Insert</button>
                </form>
            </div>
        </div>
    </body>
</html>
