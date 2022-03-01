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
    <title>Gyorsétterem</title>
    <!-- <link rel="icon" href="icon_path" type="image/icon type"> -->
    <link rel="icon" href="../kepek/icon.png" type="image/png">
</head>
<body>
    <main>
        <header> 
            <div class="felsoSav">
                <div>
                    <a href="index.html"><img src="../kepek/logo.png" alt="Oldalunk logója" class="logo"></a>
                </div>
                <div class="cimMenuben">
                    <h1>RENDELÉS FELVÉTEL</h1>
                </div>
                <div>
                    <nav>
                        <!-- fejlesztéshez használt navigáció/admin látásmód -->
                        <ul>
                            <div id="menuszet1">
                                <a href="index.html"><li>Kezdőlap</li></a>
                                <a href="konyha.html"><li>Konyha</li></a>
                                <a href="dolgozo.html"><li>Dolgozók</li></a>
                                <a href="profil.html"><li>Profil</li></a>
                            </div>
                            <div id="menuszet2">
                                <a href="kedvezmeny.html"><li>Kedvezmény</li></a>
                                <a href="rendelesek.html"><li>Rendelések</li></a>
                                <a href="reklamacio.html"><li>Reklamáció</li></a>
                            </div>
                        </ul>
                        
                        <div class="dropdown">
                            <button class="dropbtn">Menü</button>
                            <div class="dropdown-content">
                                <a href="konyha.html">Konyha</a>
                                <a href="dolgozo.html">Dolgozók</a>
                                <a href="profil.html">Profil</a>
                                <a href="kedvezmeny.html">Kedvezmény</a>
                                <a href="rendelesek.html">Rendelések</a>
                                <a href="reklamacio.html">Reklamáció</a>
                                <div class="dropdown2">
                                <a href="#"  class="dropbtn2">Termékek</a>
                                <div class="dropdown-content2">
                                    <a href="konyha.html">Burgerek</a>
                                    <a href="konyha.html">Köretek</a>
                                    <a href="konyha.html">Menük</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
         
        <article>
            <img src="../kepek/nagykep.jpg" alt="Egy nagy kép egy burger rétegeiről" class="nagykep" >
            <div>
                <div class="cimMenunKivul">
                    <h1>RENDELÉS FELVÉTEL</h1>
                </div>
            <p id="kategoriaCim">Kérlek válaszd ki milyen kategóriából szeretnél terméket választani:</p>
            <div class="kategoriak">
                
            <div class="kategoria">
                <a href="termek.html">
                    <img src="../kepek/kep1.jpg" alt="Burgerek kategória" class="kep" >
                    <div class="KKepCim">
                        Burgerek
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek.html"><img src="../kepek/kep2.jpg" alt="Köretek kategória" class="kep" >
                    <div class="KKepCim">
                        Köretek
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek.html"><img src="../kepek/kep3.jpg" alt="Italok kategória" class="kep" >
                    <div class="KKepCim">
                        Italok
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek.html"><img src="../kepek/kep4.jpg" alt="Desszertek kategória" class="kep" >
                    <div class="KKepCim">
                        Desszertek
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek.html"><img src="../kepek/kep5.jpg" alt="Szószok kategória" class="kep" >
                    <div class="KKepCim">
                        Szószok
                    </div>
                </a>
            </div>
            <div class="kategoria">
                <a href="termek.html"><img src="../kepek/kep8.jpg" alt="Menük kategória" class="kep" >
                    <div class="KKepCim">
                        Menük
                    </div>
                </a>
            </div>
            </div>
            </div>
            <aside class="kosar">
                <h3>Rendelési tételek</h3>
                <div class="kosaram belsoMezo">
                    <!-- ide kerülnek majd a rendelésbe felvett termékek + mindhez egy x gomb -->
                    <p>ez egy termék</p>
                    <p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p><p>ez egy termék</p>
                </div>
                <h3>Összesen: <span id="osszar">999</span> Ft</h3>
                <a href="rendelesek.html"><button class="rendel">Véglegesítés</button></a>
            </aside>
        </article>
        
        <footer >
            <p>Az oldalt készítették: Szabó Gergő, Szántai Barna, Tóth Virág</p>
        </footer>
    </main>
</body>
</html>