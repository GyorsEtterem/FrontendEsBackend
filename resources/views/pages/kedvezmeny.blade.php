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
    <link href="../css/kedvezmeny.css" rel="stylesheet" type="text/css" />
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
                        <p class="kedvId"></p>
                        <p class="kedvSzaz"></p>
                        <p class="kedvKez"></p>
                        <p class="kedvVeg"></p>
                        <a class="kTorles cursor"><button>TÖRLÉS</button></a>
                    </div>
                </div>
                <div class="nagydiv belsoMezo">

                </div>
            </section>
            <section class="urlap">
                <div class="container">
                    <fieldset>
                        <legend>Kedvezmény hozzáadása:</legend>
                        <label for="uKedvSzaz">Kedvezmény százaléka:</label><br>
                        <select name="uKedvSzaz" id="uKedvSzaz" default="0">
                            <option value="0">0</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="30">30</option>
                            <option value="35">35</option>
                            <option value="40">40</option>
                            <option value="45">45</option>
                            <option value="50">50</option>
                            <option value="55">55</option>
                            <option value="60">60</option>
                            <option value="65">65</option>
                            <option value="70">70</option>
                            <option value="75">75</option>
                            <option value="80">80</option>
                            <option value="85">85</option>
                            <option value="90">90</option>
                            <option value="95">95</option>
                            <option value="100">100</option>
                        </select><br><br>

                        <label for="uKedvKez">Kedvezmény kezdete:</label><br>
                        <input type="date" id="uKedvKez" name="uKedvKez"><br><br>

                        <label for="uKedvVeg">Kedvezmény vége::</label><br>
                        <input type="date" id="uKedvVeg" name="uKedvVeg"><br><br>

                        <input type="submit" class="gomb" id="ajaxUjKedvezmeny" value="HOZZÁAD">
                    </fieldset>
                </div>
            </section>
        </article>
        @endsection