<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'utilisateur</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="ajout_utilisateur.css">
  <script src="script.js"></script>
</head>
<body>
<header>
    <nav>
        <a href="ajout_article.php">Ajout_A</a>
        <a href="connexion.php">Connexion</a>
        <a href="utilisateurs.php">Utilisateurs</a>
    </nav>
    <h1>MyDevBlog</h1>
    
</header>
  
    <h2> Ajouter un utilisateur </h2>

    <form action="insertion.php" method="post">

    <p> <label for="utilisateur">Utilisateur</label>
        <input id="utilisateur" type="text" name="nom">
    </p>

    <p> <label for="login">Login</label>
        <input id="login" type="text" name="identifiant">
    </p>

    <p> <label for="mdp">mdp</label>
        <input id="mdp" type="text" name="password">
    </p>

    <p>
        <input type="submit" value="Ajouter">
    </p>

</form>



</body>
</html>