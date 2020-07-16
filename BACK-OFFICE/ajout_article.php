<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'article</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="ajout_article.css">
  <script src="script.js"></script>
</head>

<body>
<header>
    <nav>
        <a href="connexion.php">Connexion</a>
        <a href="ajout_utilisateur.php">Ajout_U</a>
        <a href="utilisateurs.php">Utilisateurs</a>
    </nav>
    <h1>MyDevBlog</h1>
    
    </header>

    <h2> Ajouter un article </h2>

    <form action="insertion_article.php" method="post">

    <p> <label for="titre">Titre</label>
        <input id="titre" type="text" name="title">
    </p>

    <p> <label for="date">Date</label>
        <input id="date" type="date" name="day">
    </p>

    <p> <label for="auteur">Auteur</label>
        <input id="auteur" type="text" name="author">
    </p>

    <p> <label for="contenu">Contenu</label>
        <input id="contenu" type="text" name="content">
    </p>

    <p> <label for="extrait">Extrait</label>
        <input id="extrait" type="text" name="extray">
    </p>


    <p>
        <input type="submit" value="Ajouter">
    </p>

</form>



</body>
</html>