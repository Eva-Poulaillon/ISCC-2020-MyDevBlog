<?php

$pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pdoStat = $pdo->prepare('INSERT INTO articles VALUES (NULL, :titre, :date, :auteur, :contenu, :extrait)');

$pdoStat->bindValue(':titre', $_POST['title'], PDO::PARAM_STR);
$pdoStat->bindValue(':date', $_POST['day'], PDO::PARAM_STR);
$pdoStat->bindValue(':auteur', $_POST['author'], PDO::PARAM_STR);
$pdoStat->bindValue(':contenu', $_POST['content'], PDO::PARAM_STR);
$pdoStat->bindValue(':extrait', $_POST['extray'], PDO::PARAM_STR);

$insertIsOK = $pdoStat->execute();

if($insertIsOK){
    $message = 'L article a été ajouté';
}
else {
    $message = 'Echec de l insertion';
}

?>

<html>
    <h1> Ajout d'un article </h1>

    <p><?php echo $message; ?></p>

</html>