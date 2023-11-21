<?php
    $bdd = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
    $games = $bdd>query('SELECT * FROM games ORDER BY id DESC');
    if(isset($_GET['s']) AND !empty($_GET['s'])){
        $recherche = htmlspecialchars($_GET['s']);
        $gamers = $bdd->query('SELECT title FROM games WHERE title LIKE "%'.$recherche.'%" ORDER BY id DESC');
    }
?>

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" contat="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recherche jeux</title>
    </head>

<body>

    <form method="GET">
        <input type="search" name="s" placeholder="rechercher un jeu">
        <input type="submit" name="envoyer" placeholder="Rechercher">
    </form>



</body>
</html>