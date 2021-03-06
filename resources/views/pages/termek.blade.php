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
    <link href="../css/termek.css" rel="stylesheet" type="text/css" />
    <script src="../js/ajax.js"></script>
    <script src="../js/kosar.js"></script>
    <script src="../js/termek.js"></script>
    <script src="../js/indexJs.js"></script>
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
                        <p class="szazalekId"></p>
                        <p class="szazalek"></p>
                        <p class="titkosKedvAr"></p>
                        <p class="kedvAr"></p>
                        <a class="tTorles"><button>TÖRLÉS</button></a>
                        <a class="tModositas" href="#ulaphozUgro"><button>MÓDOSÍT</button></a>
                    </div>
                </div>
                <div class="nagydiv">

                </div>
                <section class="urlap" id="ulaphozUgro">
                    <form action="">
                        <fieldset>
                            <legend>Termék szerkesztése:</legend>
                            <input type="number" name="termek_id" id="termek_id">
                            <label for="termekFaj">Termék fajta:</label><br>
                            <form action="">
                                <select name="termekFaj" id="termekFaj">
                                    <option value="B">B</option>
                                    <option value="K">K</option>
                                    <option value="I">I</option>
                                    <option value="D">D</option>
                                    <option value="SZ">SZ</option>
                                    <option value="M">M</option>
                                </select>
                            </form><br><br>
                            <label for="termeknev">Terménév:</label><br>
                            <input type="text" id="termeknev" name="termeknev"><br><br>

                            <label for="termekEladhat">Termék eladható:</label><br>
                            <form action="">
                                <select name="termekEladhat" id="termekEladhat">
                                    <option value="1">igen</option>
                                    <option value="0">nem</option>
                                </select>
                            </form><br>
                            <label for="termekRaktar">Termék raktáron:</label><br>
                            <form action="">
                                <select name="termekRaktar" id="termekRaktar">
                                    <option value="1">igen</option>
                                    <option value="0">nem</option>
                                </select>
                            </form><br>
                            <label for="termekMeret">Termék méret besorolása:</label><br>
                            <form action="">
                                <select name="termekMeret" id="termekMeret">
                                    <option value="kicsi">kicsi</option>
                                    <option value="közepes">közepes</option>
                                    <option value="nagy">nagy</option>
                                </select>
                            </form><br>
                            <label for="termekAr">Teljes ár:</label><br>
                            <input type="text" id="termekAr" name="termekAr"><br><br>
                            <label for="termekSzaz">Kedvezmény:</label><br>
                            <form action="">
                                <select name="termekSzaz" id="termekSzaz">
                                    <option value="0">0%</option>
                                </select>
                            </form><br>
                            <label for="termekKep">Kép:</label><br>
                            <input type="text" id="termekKep" name="termekKep"><br><br>
                            <div>
                                <input type="submit" class="gomb" id="tAjaxModosit" value="MÓDOSÍT" style="display: none">
                                <input type="submit" class="gomb" id="ajaxUjTermek" value="ÚJ TERMÉK">
                            </div>
                        </fieldset>
                    </form>
                </section>
            </section>
            <section class="kosar">
                <h3>Rendelési tételek</h3>
                <div id="kosaram"></div><br>
                <span id="osszar"></span><br><br>
                <a href="index" class="cursor"><button>Főoldalra</button></a>
            </section>
        </article>
        @endsection