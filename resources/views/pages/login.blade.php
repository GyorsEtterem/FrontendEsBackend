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
                    <img src="../kepek/logo.png" alt="Oldalunk logója" class="logo">
                </div>
                <div class="cimMenuben">
                    <h1>Bejelentkezés</h1>
                </div>
            </div>
        </header>
        <article>
            <div class="cimMenunKivul">
                <h1>Bejelentkezés</h1>
            </div>
            <form action="{{route('login-user')}}" method="post">
                @if(Session::has('sikeres'))
                <div class="alert alert-sikeres">{{Session::get('sikeres')}}</div>
                @endif
                @if(Session::has('sikertelen'))
                <div class="alert alert-danger">{{Session::get('sikertelen')}}</div>
                @endif
                @csrf
                <div class="container">
                    <label for="email"><b>Email:</b></label><br>
                    <input type="text" placeholder="Írja be az emailcímét" name="email" value="{{old('email')}}"><br><br>
                    <span>@error('email'){{$message}} @enderror</span><br>

                    <label for="jelszo"><b>Jelszó:</b></label><br>
                    <input type="password" placeholder="Írja be a jelszavát" name="jelszo" value="{{old('jelszo')}}"><br><br>
                    <span>@error('jelszo'){{$message}} @enderror</span><br>

                    <button type="submit">Bejelentkezés</button>
                </div>

            </form>
        </article>
</body>

</html>