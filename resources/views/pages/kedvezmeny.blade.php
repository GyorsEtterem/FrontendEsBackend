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
                    <img src="../kepek/logo.png" alt="Oldalunk logója" class="logo">
                </div>
                <div class="cimMenuben">
                    <h1>Jelenleg Kedvezményes</h1>
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
            
            <div class="cimMenunKivul">
                <h1>Jelenleg Kedvezményes</h1>
            </div>
            <div class="nagydiv">
                <div class="termek">
                    <h3 class="termeknev">Lorem ipsum dolor</h3>
                    <img src="../kepek/kep1.jpg" alt="kep" class="kep" />
                    <p>Termék méret besorolása: <p class="meret"></p></p>
                    <p>Kedvezmény kezdete: <span class="kezdet"></span></p>
                    <p>Kedvezmény vége: <span class="veg"></span></p>
                    <p>Kedvezmény százaléka: <span class="szazalek"></span></p>
                    <p>Kedvezményes ár: <span class="kedvArr"></span></p>
                    <button class="modositas">MÓDOSÍT</button>
                </div>
            </div>
        </article>
        @endsection