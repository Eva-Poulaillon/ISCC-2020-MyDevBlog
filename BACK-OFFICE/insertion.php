<?php

$pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pdoStat = $pdo->prepare('INSERT INTO utilisateurs VALUES (NULL, :utilisateur, :login, :mdp)');

$pdoStat->bindValue(':utilisateur', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':login', $_POST['identifiant'], PDO::PARAM_STR);
$pdoStat->bindValue(':mdp', $_POST['password'], PDO::PARAM_STR);

$insertIsOK = $pdoStat->execute();

if($insertIsOK){
    $message = 'L utilisateur a été ajouté';
}
else {
    $message = 'Echec de l insertion';
}

?>

<html>
    <h1> Ajout d'utilisateur </h1>

    <p><?php echo $message; ?></p>

</html>