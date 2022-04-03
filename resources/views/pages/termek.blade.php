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
    <script src="../js/ajax.js"></script>
    <script src="../js/kosar.js"></script>
    <script src="../js/termek.js"></script>
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
            <div id="termekSablon">
                <div class="termek">
                    <h3 class="termeknev">Lorem ipsum dolor</h3>
                    <img src="" alt="" class="termekKep" />
                    <p class="meret"></p>
                    <p class="szazalek"></p>
                    <p class="kedvAr"></p>
                    <a class="tTorles"><button>TÖRLÉS</button></a>
                    <a class="tModositas" href="#ulaphozUgro"><button>MÓDOSÍT</button></a>
                </div>
            </div>
            <div class="nagydiv">
                
            </div>
            <section class="urlap" id="ulaphozUgro" >
                <form action="">
                    <fieldset>
                        <legend>Termék szerkesztése:</legend>
                        <label for="termek_id">Termék ID:</label><br>
                        <input type="number" name="termek_id" id="termek_id" ><br><br>
                        <label for="termeknev">Terménév:</label><br>
                        <input type="text" id="termeknev" name="termeknev"><br><br>
                        <label for="termekAr">Ár:</label><br>
                        <input type="text" id="termekAr" name="termekAr"><br><br>
                        <label for="szazalek">Kedvezmény:</label><br>
                        <input type="text" id="szazalek" name="szazalek"><br><br>
                        <label for="termekKep">Kép:</label><br>
                        <input type="text" id="termekKep" name="termekKep"><br><br>
                        <label for="kep">Válasszon képet:</label>
                        <input type="file" id="kep" name="kep"><br><br>
                        <div>
                        <div>
                            <input type="submit" class="gomb" id="tAjaxModosit" value="MÓDOSÍT">
                        </div>
                    </fieldset>
                </form>
            </section>
        </section>
            <section class="kosar">
                <h3>Rendelési tételek</h3>
                <div id="kosaram"></div>
                <span id="osszar"></span>

                <a href="rendelesek.html"><button class="rendel">Véglegesítés</button></a>
            </section>
        </article>
        @endsection