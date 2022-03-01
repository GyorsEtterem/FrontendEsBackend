<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/reklamacio.css" rel="stylesheet" type="text/css"/>
    <link href="../css/stilus.css" rel="stylesheet" type="text/css"/>
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css"/>
    <script src="../js/ajax.js"></script>
    <script src="../js/reklamacio.js"></script>
    <script src="../js/rendeles.js"></script>
    <script src="../js/script.js"></script>
    <link rel="icon" href="../kepek/icon.png" type="image/png">
    <title>Gyorsétterem</title>
</head>
<body>
    <main>
        <header> 
            <div class="felsoSav">
            <div>
                <img src="../kepek/logo.png" alt="Oldalunk logója" class="logo" >
            </div>
            <div class="cimMenuben">
                <h1>Reklamáció</h1>
            </div>
            <div>
                <nav>
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
                                <a href="konyha.html">asdasdasd</a>
                                <a href="konyha.html">asdasdasd</a>
                                <a href="konyha.html">asdasdasd</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            </div>
        </header>
        <article>
            <section  class="reklamaciok">
            <div class="cimMenunKivul">
                <h1>Reklamáció</h1>
            </div>
            <div class="nagydiv belsoMezo" id="reklamaicorespo">
                <div class="reklamacio">
                    <h3 class="leiras">Lorem ipsum dolor</h3>
                    <h3 class="mennyiseg">Lorem ipsum dolor</h3>
                    <h3 class="datum">Lorem ipsum dolor</h3>
                    <button class="bovebb">LEZÁRÁS</button>
                </div>
               
            </div>
            </section>
            <section class="rendelesek10perc">
            <h2>Elmúlt 10perc átadott rendelései:</h2>
            <div class="nagydiv" id="percrespo">
                 <div class="rendeles">
                    <h3 class="rendelesszam">Lorem ipsum dolor</h3>
                    <p>Dátum: <p class="datum"></p></p>
                    <button class="reklamhozza">REKLAMÁCIÓ HOZZÁADÁSA</button>
                </div>
                
            </div>
            </section>
            <section class="urlap">
            <fieldset>
                <legend>Reklamáció hozzáadáas:</legend>
                <label for="termeknev">Terménév:</label><br>
                <input type="text" id="termeknev" name="termeknev"><br><br>
                <label for="termekMegjegyzes">Megjegyzés:</label><br>
                <textarea rows="5" cols="30" id="termekMegjegyzes"></textarea><br><br>
                <label for="termekAr">Ár:</label><br>
                <input type="text" id="termekAr" name="termekAr"><br><br>
                <label for="termekAr">Mennyiség:</label><br>
                <input type="text" id="termekAr" name="termekAr"><br><br>
                <div>
                  <input type="button" class="gomb" id="ajaxModosit" value="MÓDOSÍT">
                </div>
            </fieldset>
            </section>
            <div></div>
            
        </article>
        <footer>
            <p>Az oldalt készítették: Szabó Gergő, Szántai Barna, Tóth Virág</p>
        </footer>
    </main>
</body>
</html>