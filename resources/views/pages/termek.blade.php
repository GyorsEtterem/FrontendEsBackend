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
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css"/>
    <link href="../css/termek.css" rel="stylesheet" type="text/css"/>
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
                <div class="cimMenuben">
                    <h1>Termékek</h1>
                </div>
                <div>
                    <nav>
                        @endsection
                        
                        @section('content')
                    </nav>
                </div>
            </div>
        </header>
        <article class="termekarticle">
            <section>
            <div class="cimMenunKivul">
                <h1>Termékek</h1>
            </div>
            <div class="nagydiv">
                <div class="termek">
                    <h3 class="termeknev">Lorem ipsum dolor</h3>
                    <img src="" alt="" class="termekKep" />
                    <p>Termék méret besorolása: <p class="meret"></p></p>
                    <p>Kedvezmény százaléka: <p class="szazalek"></p></p>
                    <p>Kedvezményes ár: <span class="kedvAr"></span></p>
                    <a href="#ulaphozUgro"><button class="modositas">MÓDOSÍT</button></a>
                </div>
            </div>
            <section class="urlap" id="ulaphozUgro" >
                <fieldset>
                    <legend>Termék szerkesztése:</legend>
                    <label for="termeknev">Terménév:</label><br>
                    <input type="text" id="termeknev" name="termeknev"><br><br>
                    <label for="termekAr">Ár:</label><br>
                    <input type="text" id="termekAr" name="termekAr"><br><br>
                    <label for="szazalek">Kedvezmény:</label><br>
                    <input type="text" id="szazalek" name="szazalek"><br><br>
                    <label for="kep">Válasszon képet:</label>
                      <input type="file" id="kep" name="kep"><br><br>
                      <div>
                    <div>
                        <input type="button" class="gomb" id="ajaxModosit" value="MÓDOSÍT">
                    </div>
                </fieldset>
            </section>
        </section>
            <section class="kosar">
                <h3>Rendelési tételek</h3>
                <div id="kosaram">
                    <!-- ide kerülnek majd a rendelésbe felvett termékek + mindhez egy x gomb -->
                </div>
                <span id="osszar"></span>
                <a href="rendelesek.html"><button class="rendel">Véglegesítés</button></a>
            </section>
        </article>
        @endsection