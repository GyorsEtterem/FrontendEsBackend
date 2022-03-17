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
    <link href="../css/dolgozo.css" rel="stylesheet" type="text/css" />
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css" />
    <script src="../js/ajax.js"></script>
    <script src="../js/dolgozo.js"></script>
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
                    <h1>Dolgozók</h1>
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
                <h1>Dolgozók</h1>
            </div>
            <table class="dolgozok">
                <thead>
                    <tr>
                        <th>Név:</th>
                        <th>Szül dátum:</th>
                        <th>Címe:</th>
                        <th>Telefonszám:</th>
                        <th>Munkakör:</th>
                    </tr>

                </thead>
                <tbody class="dolgozok_tabla">
                    <tr class="dolgozo">
                        <td class="dolgozonev">Dolgozó neve</td>
                        <td class="szuldatum">Születési dátum</td>
                        <td class="cime">Cím</td>
                        <td class="telszam">Telefonszám</td>
                        <!-- <td class="jelszo">Jelszó</td> -->
                        <td class="munkakor">Munkakör</td>
                        <td class="torles"><button>Törlés</button></td>
                        <td class="modositas"><button>MÓDOSÍT</button></td>
                    </tr>
                </tbody>
            </table>
            <a class="regisztraciofelv" href="regisztracio"><button class="kozosGomb">Új dolgozó regisztrácálása</button></a>
        </article>

        @endsection