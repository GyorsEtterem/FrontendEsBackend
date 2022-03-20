<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/stilus.css" rel="stylesheet" type="text/css">
    <link href="../css/bejelentkezes.css" rel="stylesheet" type="text/css">
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../kepek/icon.png" type="image/png">
    <title>Gyorsétterem</title>
</head>

<body>
<main>
        <header> 
            <div class="felsoSav">
            <div>
                <a href="index"><img src="../kepek/logo.png" alt="Oldalunk logója" class="logo"></a>
            </div>
            <div>
                <h1>Bejelentkezés</h1>
            </div>
            <div>
                <nav>
                </nav>
            </div>
            </div>
        </header>
        <article>
            <form action="{{route('login-user')}}" method="post">
                @if(Session::has('sikeres'))
                <div class="alert alert-sikeres">{{Session::get('sikeres')}}</div>
                @endif
                @if(Session::has('sikertelen'))
                <div class="alert alert-sikertelen">{{Session::get('sikertelen')}}</div>
                @endif
                @csrf
                <div class="container">
                    <label for="email"><b>Email:</b></label><br>
                    <input type="text" placeholder="Írja be az emailcímét" name="email" value="{{old('email')}}"><br><br>  <!--required="" -->
                    <span>@error('email'){{$message}} @enderror</span><br>

                    <label for="jelszo"><b>Jelszó:</b></label><br>
                    <input type="password" placeholder="Írja be a jelszavát" name="jelszo" value="{{old('jelszo')}}"><br><br>  <!--required="" -->
                    <span>@error('jelszo'){{$message}} @enderror</span><br>

                    


                    <!-- <div class="from-group">
                        <label for="email">Email:</label>
                        <input type="email" class="from-control" placeholder="Írd be az emailod:" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="from-group">
                        <label for="jelszo">Jelszó:</label>
                        <input type="jelszo" class="from-control" placeholder="Írd be a jelszavad:" name="jelszo" value="{{old('jelszo')}}">
                        <span class="text-danger">@error('jelszo') {{$message}} @enderror</span>
                    </div>
                    <div class="from-group">
                        <button class="btn btn-block btn-primary" type="submit">Belépés</button>
                    </div> -->

                    <button type="submit">Bejelentkezés</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Emlékezzen rám
                    </label> -->
                </div>

                <!-- <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Mégse</button>
                    <span class="psw">Forgot <a href="#">jelszo?</a></span>
                </div> -->
            </form>
        </article>
        </body>
</html>