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
    <link href="../css/bejelentkezes.css" rel="stylesheet" type="text/css">
    <link href="../css/dolgozo.css" rel="stylesheet" type="text/css">
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css"/>
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
                    <h1>Felhasználói Profil</h1>
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
                <h1>Felhasználói Profil</h1>
            </div>
            
            <h1>{{$data->neve}}</h1>
            <table class="dolgozok">
                <thead>
                <th>Név:</th>
                        <th>Szül dátum:</th>
                        <th>Címe:</th>
                        <th>Telefonszám:</th>
                        <th>Email:</th>
                        <th>Munkakör:</th>
                    <th></th>
                </thead>
                @foreach($data as $adat)
                <tbody class="dolgozok_tabla">
                    <tr class="dolgozo">
                        <td>{{$adat->neve}}</td>
                        <td>{{$adat->szuldatum}}</td>
                        <td>{{$adat->cim}}</td>
                        <td>{{$adat->telefonszam}}</td>
                        <td>{{$adat->email}}</td>
                        <td>{{$adat->munkakor_id}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table> 
            <div>
            <a href="logout"><button class="kozosGomb">Kijelentkezés</button></a>
                    
            </div>

        </article>
        @endsection