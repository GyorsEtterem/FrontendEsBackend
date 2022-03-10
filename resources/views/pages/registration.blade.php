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
            <div class="alert alert-sikertelen">{{Session::get('sikertelen')}}</div>
            @endif
            @csrf
        <div class="container">
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email"  value="{{old('email')}}">

    <!-- <label for="username"><b>Felhasználónév:</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>  -->
    

    <label for="password"><b>Jelszó:</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="password-repeat"><b>Ismételje meg a jelszót:</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required>
    
    <label for="name">Teljes név:</label><br>
    <input type="text" id="name" name="name" value="{{old('name')}}">

    <label for="lakohely">Cím:</label><br>
    <input type="text" id="lakohely" name="lakohely" required>

    <label for="birthdate">Dátum:</label>
    <input type="text" id="birthdate" name="birthdate"><br><br>

    
    <label for="tel">Telefonszám:</label><br>
    <input type="tel" id="tel" placeholder="06301234567" pattern="[0-9]{10,}" maxlength="11" required></br></br>
    
    <label for="mkor">Munkakör:</label><br>
          <select name="mkor" id="mkor" required>
            <option value="mkor">Pénztáros</option>
            <option value="mkor">Konyhai dolgozó</option>
            <option value="mkor">Menedzser</option>
          </select>  
    <hr>

    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
    <button type="submit" class="registerbtn">Regisztráció</button>
  </div>

  <div class="container signin">
    <p>Már van fiókod?<a href="login">Bejelentkezés</a>.</p>
  </div>
</form>
        </article>
        @endsection