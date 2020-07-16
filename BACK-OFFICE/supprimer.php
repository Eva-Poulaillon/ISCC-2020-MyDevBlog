<?php

$pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pdoStat = $pdo->prepare('DELETE FROM utilisateurs WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numUser'], PDO::PARAM_INT);

$insertIsOK = $pdoStat->execute();

if($insertIsOK){
    $message = 'L utilisateur a été supprimé';
}
else {
    $message = 'Echec de la suppression';
}

?>

<html>
    <h1> Suppression d'un utilisateur </h1>

    <p><?php echo $message; ?></p>

</html>