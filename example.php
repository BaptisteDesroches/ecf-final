<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="Baptiste Desroches" />
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js"></script>
        <title>Page d'accueil</title>
    </head>

    <body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from games');
while ($donnees = $reponse->fetch())
    {
?>

        <p><?php echo $donnees['title']; ?></p>
<?php
    }
    $reponse->closeCursor();//important
?>
    </body>


    <?php //partie connection membres
                            $bdd = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
                            $reponse = $bdd->query('select * from games');
                            while ($donnees = $reponse->fetch())
                                {
                            ?>

                                    <p><?php echo $donnees['title']; ?></p>
                                    <p><?php echo $donnees['description']; ?></p>
                            <?php
                                }
                                $reponse->closeCursor();//important
                            ?>

                            <?php
                                if($title->rowCount() > 0 ){
                                    while($tot = $allusers->fetch()){
                                        ?>
                                        <p><?= $user['pseudo']; ?></p>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <a>Aucun jeu trouvé</a>
                                    <?php
                                }

                            ?>

<?php //partie inscription membres
    //connecter à la bdd
    $servername="localhost";
    $username ="root";
    $password ="root";

    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');

    // récupérer la data insite
    if(isset($_POST['ok'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email_address = $_POST['email_address'];
    }

    //envoyer la data à la bdd
    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :username, :password, :email_address)";
    $requete-> execute(
    array(
        "username" =>$username,
        "password" =>$password,
        "email" =>$email_address,
    ))
    );
        echo "Inscirption réussie !";
?>


</html>