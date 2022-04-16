@extends('layouts.app')
@section('head')
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/reklamacio.css" rel="stylesheet" type="text/css" />
    <link href="../css/stilus.css" rel="stylesheet" type="text/css" />
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css" />
    <script src="../js/ajax.js"></script>
    <script src="../js/reklamacio.js"></script>
    <script src="../js/rendeles.js"></script>
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
                    <h1>Reklamáció</h1>
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
            <section class="reklamaciok">
                <div class="cimMenunKivul">
                    <h1>Reklamáció</h1>
                </div>
                <div class="nagydiv belsoMezo" id="reklamaicorespo">
                    <div class="reklamacio">
                        <h3 class="leiras">Lorem ipsum dolor</h3>
                        <h3 class="csere_ideje">Lorem ipsum dolor</h3>
                        <h3 class="termek_id">Lorem ipsum dolor</h3>
                        <h3 class="nyugta">Lorem ipsum dolor</h3>
                    </div>
                </div>

            </section>
            <section class="rendelesek10perc">
                <h1 class="rend10">Elmúlt 10perc átadott rendelései</h1>
                <div class="nagydiv" id="percrespo">
                    <div class="rendeles">
                        <p class="nyugta"></p>
                        <p class="termek_id"></p>
                        <p class="termeknev"></p>
                        <p class="termekAr"></p>
                        <p class="csere_ideje"></p>
                        <p class="hozzaad"><button>Reklamáció hozzáadása</button></p>
                    </div>
            </section>
            <section class="urlap">
                <form action="{{route('reklam-fel')}}" method="post">
                    @if(Session::has('sikeres'))
                    <div class="alert alert-sikeres">{{Session::get('sikeres')}}</div>
                    @endif
                    @if(Session::has('sikertelen'))
                    <div class="alert alert-danger">{{Session::get('sikertelen')}}</div>
                    @endif
                    @csrf
                    <div class="container">
                        <fieldset>
                            <legend>Reklamáció hozzáadáas</legend>
                            <label for="nyugta">Nyugta megadása:</label><br>
                            <!-- <p id="nyugta" name="nyugta" value="{{old('nyugta')}}"></p><br><br> -->
                            <input type="text" id="nyugta" name="nyugta" value="{{old('nyugta')}}"><br><br>

                            <label for="termek_id">Termék:</label><br>
                            <input type="text" id="termek_id" name="termek_id" value="{{old('termek_id')}}"><br><br>

                            <label for="leiras">Megjegyzés:</label><br>
                            <textarea rows="5" cols="30" id="leiras" name="leiras" value="{{old('leiras')}}"></textarea><br><br>

                            <label for="csere_ideje">Csere dátum:</label><br>
                            <input type="datetime-local" id="csere_ideje" name="csere_ideje" value="{{old('csere_ideje')}}"><br><br>


                            <button type="submit" class="gomb" id="felvesz">Hozzáadás</button>
                        </fieldset>
                    </div>
                </form>
            </section>

        </article>
        @endsection