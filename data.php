<?php
$bdd = newPDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from games');
while ($donnees = $reponse->fetch())
    {
?>

        <p><?php echo $donnees['title']; ?></p>
<?php
    }
    $reponse->closeCursor();//important
?>