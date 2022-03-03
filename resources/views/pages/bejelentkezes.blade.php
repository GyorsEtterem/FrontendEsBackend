<html lang="hu"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/stilus.css" rel="stylesheet" type="text/css">
    <link href="../css/bejelentkezes.css" rel="stylesheet" type="text/css">
    <link href="../css/szerkezet.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../kepek/icon.png" type="image/png">
    <title>Gyorsétterem</title>
</head>

<body>
    <main>
        <header> 
            <div class="felsoSav">
            <div>
                <img src="../kepek/logo.png" alt="Oldalunk logója" class="logo">
            </div>
            <div>
                <h1>Bejelentkezés</h1>
            </div>
            <div>
            </div>
            </div>
        </header>
        <article>
            <form action="login" method="post">
                <input type="hidden" name="_token" value="unFJwsoVKiaeEz7KgepH8kdXSTPwBNDCD55YNVyu">                <div class="imgcontainer">
                    <!-- <img src="../kepek/icon.png" alt="Avatar" class="avatar"> -->
                </div>

                <div class="container">
                    <label for="username"><b>Felhasználónév:</b></label><br><br>
                    <input type="text" placeholder="Írja be a felhasználónevét" name="username" required=""><br><br>

                    <label for="psw"><b>Jelszó</b></label><br><br>
                    <input type="password" placeholder="Írja be a jelszavát" name="psw" required=""><br><br>

                    <button type="submit">Bejelentkezés:</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Emlékezzen rám
                    </label> -->
                </div>

                <!-- <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Mégse</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div> -->
            </form>
        </article>
    </main>


</body></html>