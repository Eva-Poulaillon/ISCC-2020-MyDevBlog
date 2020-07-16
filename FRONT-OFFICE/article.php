<?php

$pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $pdo->prepare('SELECT * FROM articles WHERE id = ?');
$query->execute([$_GET['id']]);
$article = $query->fetch();

?>

<html>
<link rel="stylesheet" href="article.css">
<h1><?= $article['titre'] ?></h1>

<p><?= $article['date'] ?></p> <br/>

<p><?= $article['auteur'] ?></p> <br/>

<p><?= $article['contenu'] ?></p> <br/>

</html>

