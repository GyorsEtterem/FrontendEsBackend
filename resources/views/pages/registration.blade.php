@extends('layouts.app')
@section('head')
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/stilus.css" rel="stylesheet" type="text/css"/>
    <link href="../css/bejelentkezes.css" rel="stylesheet" type="text/css">
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="../kepek/icon.png" type="image/png">
    <title>Gyorsétterem</title>
</head>
<body>
    <main>
    @endsection
    @section('header')
        <header> 
            <div class="felsoSav">
            <div>
                <img src="../kepek/logo.png" alt="Oldalunk logója" class="logo" >
            </div>
            <div>
                <h1>Regisztráció</h1>
            </div>
            <div>
                <nav>
                    @endsection
                        
                    @section('content')
                </nav>
            </div>
            </div>
        </header>
        <article>
        <form action="{{route('registration-user')}}" method="post">
            @if(Session::has('sikeres'))
            <div class="alert alert-sikeres">{{Session::get('sikeres')}}</div>
            @endif
            @if(Session::has('sikertelen'))
            <div class="alert alert-danger">{{Session::get('sikertelen')}}</div>
            @endif
            @csrf
        <div class="container">
    <p>Kérlek töltsd ki a közetkezőket új dolgozó regisztálásához:</p>
    <hr>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email"  value="{{old('email')}}">

    <!-- <label for="username"><b>Felhasználónév:</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>  -->
    

    <label for="jelszo"><b>Jelszó:</b></label>
    <input type="password" placeholder="Enter jelszo" name="jelszo" id="jelszo">

    <label for="jelszo-ismet"><b>Ismételje meg a jelszót:</b></label>
    <input type="password" placeholder="Ismételje meg a jelszót" name="jelszo-ismet" id="jelszo-ismet" >
    
    <label for="neve">Teljes név:</label><br>
    <input type="text" id="neve" name="neve" value="{{old('neve')}}">

    <label for="cim">Cím:</label><br>
    <input type="text" id="cim" name="cim"  value="{{old('cim')}}">

    <label for="szuldatum">Születési dátum:</label>
    <input type="datetime-local" id="szuldatum" name="szuldatum" value="{{old('szuldatum')}}"><br><br>

    
    <label for="telefonszam">Telefonszám:</label><br>
    <input type="text" id="telefonszam" placeholder="06301234567" name="telefonszam" value="{{old('telefonszam')}}"></br></br> <!-- pattern="[0-9]{10,}" maxlength="11"  -->
    
    <!-- <label for="munkakor_id">Munkakör:</label><br>
          <select name="munkakor_id" id="munkakor_id" required>
            <option value="munkakor_id">Pénztáros</option>
            <option value="munkakor_id">Konyhai dolgozó</option>
            <option value="munkakor_id">Menedzser</option>
          </select>  
    <hr> -->

    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
    <button type="submit" class="registerbtn">Regisztráció</button>
  </div>

    <!-- <p>Már van fiókod?<a class="login" href="/login"><button class="kozosGomb">Bejelentkezés</button></a>.</p> -->
    <p>Már van fiókod?<a class="login" class="kozosGomb" href="/login">Bejelentkezés</a></p>
  </div>
</form>
        </article>
        @endsection