<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" contac="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <title>Inscription</title>
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

        <!-- Inscription/Identification renvoi part -->
                        <ul>
                        <li><a href="inscription_membres.php">S'inscrire</a></li>
                        <li><a href="connection_membres.php">Se connecter</a></li>
                        </ul>
                    </nav>
        <!-- partie inscription membres -->
        <div>
            <?php

                    $servername="localhost";
                    $username ="root";
                    $password ="";

                    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');


                    if(isset($_POST['ok'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email_address = $_POST['email_address'];
                        $requete = $bdd->prepare("INSERT INTO users VALUES (0, :username, :email_address, :password)");
                        $requete-> execute(
                        array(
                            "username" =>$username,
                            "email" =>$email_address,
                            "password" =>$password,
                        ));
                            echo "Inscription réussie !";
                    }

                ?>
            </div>

    <form method="POST" action="traitement.php">
            <H1>Ajouter un compte</H1>
            <label for="username">* Pseudo</label>
            <input type="text" id="username" name="username" placeholder="Entrez votre username" required>
        <br>
            <label for="mail">* Adresse email</label>
            <input type="mail" id="email_address" name="email_address" placeholder="Entrez votre adresse email" required>
            <input type="mail" id="email_address" name="email_address" placeholder="Retappez votre adresse email" required>
        <br>
            <label for="password">* Mot de passe</label>
            <ol>
                <li> 8 à 72 caractères</li>
                <li> 1 chiffre</li>
                <li> 1 miniscule</li>
            </ol>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            <input type="password" id="password" name="password" placeholder="Retapez votre mot de passe" required>
        <br>
        <label>
            <input type="checkbox"> J'ai lu et j'accepte les conditions générales d'utilisation *</input><br>
            <input type="checkbox"> Je souhaite recevoir la newsletter partenaire (bon plans, préventes...)</input><br>
            <input type="checkbox"> Je ne souhaite pas recevoir la newsletter éditoriale (news, tests, sorties...)</input>
        </laber>
        <input type="submit" value ="M'inscrire" name="ok">
    </form>

    <footer>
        <div>* Informations obligatoires <br><br>

            En tant que responsable de traitement, Gamesoft traite vos données personnelles sur le site gamesoft.fr pour vous permettre d’accéder aux services du site gamesoft.fr. Vous disposez d’un droit d’accès, de rectification, d’effacement ou de portabilité de vos données personnelles. Vous pouvez vous opposer ou limiter certains traitements. Vous disposez également du droit de définir des directives relatives au sort de vos données après votre décès. Enfin, vous avez le droit d’introduire une réclamation auprès de la Commission nationale de l’informatique et des libertés. Pour en savoir plus sur la gestion de vos données par Gamesoft et de vos droits sur le site gamesoft.fr, consultez notre Politique de protection des données.</div>
    </footer>

</body>
</html>