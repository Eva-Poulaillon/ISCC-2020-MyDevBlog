<?php $pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $pdo->prepare('SELECT * FROM utilisateurs');
    $result=$query->execute();
    $utilisateurs=$query->fetchAll();

    ?>

<link rel="stylesheet" href="ajout_utilisateur.css">
<header>
    <nav>
        <a href="connexion.php">Connexion</a>
        <a href="ajout_utilisateur.php">Ajout_U</a>
        <a href="ajout_article.php">Ajout_A</a>
    </nav>
    <h1>MyDevBlog</h1>
    
</header>

    <ul>
        <?php foreach ($utilisateurs as $utilisateur): ?>
            <li><?= $utilisateur['utilisateur'] ?> <a href="supprimer.php?numUser=<?= $utilisateur['id'] ?>">Supprimer</a> <br/>
             
                
        </li>
        <?php endforeach ?>
    </ul>