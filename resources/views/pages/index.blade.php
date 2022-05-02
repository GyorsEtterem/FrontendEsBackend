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
    <link href="../css/fooldal.css" rel="stylesheet" type="text/css"/>
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css"/>
    <script src="../js/ajax.js"></script>
    <script src="../js/kosar.js"></script>
    <script src="../js/termek.js"></script>
    <script src="../js/indexJs.js"></script>
    <script src="../js/script.js"></script>
    <title>Gyorsétterem</title>
    <link rel="icon" href="../kepek/icon.png" type="image/png">
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
                    <h1>RENDELÉS FELVÉTEL</h1>
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
            <a href="https://youtu.be/dQw4w9WgXcQ" class="eltun"><img src="../kepek/nagykep.jpg" alt="Egy nagy kép egy burger rétegeiről" class="nagykep" ></a>
            <div>
                <div class="cimMenunKivul">
                    <h1>RENDELÉS FELVÉTEL</h1>
                </div>
            <p id="kategoriaCim">Kérlek válaszd ki milyen kategóriából szeretnél terméket választani:</p>
            <div class="kategoriak">
                
            <div class="kategoria">
                <a href="termek" class="bKategoria"><img src="../kepek/kep1.jpg" alt="Burgerek kategória" class="kep" >
                    <div class="KKepCim">
                        Burgerek
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek" class="kKategoria"><img src="../kepek/kep2.jpg" alt="Köretek kategória" class="kep" >
                    <div class="KKepCim">
                        Köretek
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek" class="iKategoria"><img src="../kepek/kep3.jpg" alt="Italok kategória" class="kep" >
                    <div class="KKepCim">
                        Italok
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek" class="dKategoria"><img src="../kepek/kep4.jpg" alt="Desszertek kategória" class="kep" >
                    <div class="KKepCim">
                        Desszertek
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek" class="szKategoria"><img src="../kepek/kep5.jpg" alt="Szószok kategória" class="kep" >
                    <div class="KKepCim">
                        Szószok
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek" class="mKategoria"><img src="../kepek/kep8.jpg" alt="Menük kategória" class="kep" >
                    <div class="KKepCim">
                        Menük
                    </div>
                </a>
            </div>
            </div>
            </div>
            <aside class="kosar">
            <h3>Rendelési tételek</h3>
                <div id="kosaram"></div><br>
                <span id="osszar"></span><br><br>

                <a id="rendAtad" class="cursor"><button>Véglegesítés</button></a>
            </aside>
            
        </article>
        @endsection
        