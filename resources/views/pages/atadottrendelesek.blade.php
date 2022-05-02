@extends('layouts.app')
@section('head')
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/rendeles.css" rel="stylesheet" type="text/css" />
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
                    <a href="index"><img src="../kepek/logo.png" alt="Oldalunk logója" class="logo"></a>
                </div>
                <div class="cimMenuben">
                    <h1>átadott Rendelések</h1>
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
                <h1>átadott Rendelések</h1>
            </div>
            <div class="nagydiv" id="atrendelesek">
                <div class="rendeles">
                    <h3 class="rendelesszam">Lorem ipsum dolor</h3>
                    <p>Rendelés állapota:
                    <p class="rendelesAll"></p>
                    </p>
                    <p>Termék:
                    <p class="termeknev"></p>
                    </p>
                    <p>Termék ár: <span class="termekAr"></span></p>
                    <button class="bovebb">BŐVEBBEN</button>
                </div>
                <div class="rendeles">
                    <h3 class="rendelesszam">Lorem ipsum dolor</h3>
                    <p class="rendelesAll"></p>
                    </p>
                    <p>Rendelés állapota:
                    <p class="rendelesAll"></p>
                    </p>
                    <p>Termék:
                    <p class="termeknev"></p>
                    </p>
                    <p>Termék ár: <span class="termekAr"></span></p>
                    <button class="bovebb">BŐVEBBEN</button>
                </div>
                <div class="rendeles">
                    <h3 class="rendelesszam">Lorem ipsum dolor</h3>
                    <p>Rendelés állapota:
                    <p class="rendelesAll"></p>
                    </p>
                    <p>Termék:
                    <p class="termeknev"></p>
                    </p>
                    <p>Termék ár: <span class="attermekAr"></span></p>
                    <button class="bovebb">BŐVEBBEN</button>
                </div>
            </div>
        </article>
        @endsection