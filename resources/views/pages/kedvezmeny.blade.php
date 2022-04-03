@extends('layouts.app')
@section('head')
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/stilus.css" rel="stylesheet" type="text/css" />
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css" />
    <script src="../js/ajax.js"></script>
    <script src="../js/kedvezmeny.js"></script>
    <script src="../js/script.js"></script>
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
                    <a href="index"><img src="../kepek/logo.png" alt="Oldalunk logója" class="logo"></a>
                </div>
                <div class="cimMenuben">
                    <h1>Termékeknek adható kedvezmények</h1>
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
            <section>
                <div class="cimMenunKivul">
                    <h1>Adható kedvezményeink</h1>
                </div>
                <div id="kedvezmenySablon">
                    <div class="kedvezmeny">
                        <p>Kedvezmény ID: <p class="kedvId"></p></p>
                        <p>Kedvezmény százaléka: <p class="kedvSzaz"></p></p>
                        <p>Kedvezmény kezdete: <p class="kedvKez"></p></p>
                        <p>Kedvezmény vége: <p class="kedvVeg"></p></p>
                        <a class="kTorles"><button>TÖRLÉS</button></a>
                    </div>
                </div>
                <div class="nagydiv">
                    
                </div>
            </section>
            <section class="urlap">
            <div class="container">
            <fieldset>
            <legend>Kedvezmény hozzáadása:</legend>
                <label for="uKedvSzaz">Kedvezmény százaléka:</label><br>
                <input type="text" id="uKedvSzaz" name="uKedvSzaz" value="{{old('uKedvSzaz')}}"><br><br>
                
                <label for="uKedvKez">Kedvezmény kezdete:</label><br>
                <input type="date" id="uKedvKez" name="uKedvKez" value="{{old('uKedvKez')}}"><br><br>

                <label for="uKedvVeg">Kedvezmény vége::</label><br>
                <input type="date" id="uKedvVeg" name="uKedvVeg" value="{{old('uKedvVeg')}}"><br><br>
                
                
                <button type="submit" class="gomb" id="kedvFelvesz">Hozzáadás</button>
            </fieldset>
            </div>
            </section>
        </article>
        @endsection