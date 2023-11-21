<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" contac="IE=edge" >
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connection</title>
    </head>

    <body>
        <!-- menu part -->
                    <nav class="box">
                        <img class="logo" src="assets\logo.JPG">
                        <ul>
                            <li><a href="Actualités">Actualités</a></li>
                            <li><a href="Jeux">Jeux</a></li>
                        </ul>
        <!-- search bar part -->
                        <form name="fo" method="get" action="">
                            <input class="search" type="text" name="keywords" placeholder="Rechercher un jeu"/>
                            <input class="search" type="submit" name="valider" value="Rechercher"/>
                        </form>
                        <section>
                        </section>
        <!-- Inscription/Identification renvoi part -->
                        <ul>
                        <li><a href="inscription_membres.php">S'inscrire</a></li>
                        <li><a href="connection_membres.php">Se connecter</a></li>
                        </ul>
                    </nav>

    <form method="POST" action="example.php">
        <H1>Rejoindre votre compte</H1>
            <label for="username">Votre Pseudo*</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre username" required>
        <br>
            <label for="password">Votre mot de passe*</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
        <br>
        <input type="submit" value ="Me connecter" name="ok">
    </form>

    <footer>
        <div>* Informations obligatoires <br><br>

            En tant que responsable de traitement, Gamesoft traite vos données personnelles sur le site gamesoft.fr pour vous permettre d’accéder aux services du site gamesoft.fr. Vous disposez d’un droit d’accès, de rectification, d’effacement ou de portabilité de vos données personnelles. Vous pouvez vous opposer ou limiter certains traitements. Vous disposez également du droit de définir des directives relatives au sort de vos données après votre décès. Enfin, vous avez le droit d’introduire une réclamation auprès de la Commission nationale de l’informatique et des libertés. Pour en savoir plus sur la gestion de vos données par Gamesoft et de vos droits sur le site gamesoft.fr, consultez notre Politique de protection des données.</div>
    </footer>

</body>
</html>