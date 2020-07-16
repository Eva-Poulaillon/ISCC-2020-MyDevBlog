<!DOCTYPE html>
<html>
<head>
<title>Acceuil</title>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/vitrine.css">
    <link rel="stylesheet" type="text/css" href="vitrine-articles.css">
</head>
<body> <!-- ouverture de la balise body -->
    <header>
    <nav>
        <a href="vitrine-accueil.php">Acceuil</a>
        <a href="vitrine-contacts.php">Contacts</a>
        <a href="vitrine-articles.php">Articles</a>
    </nav>
    <h1>MyDevBlog</h1>
    
    </header>

    <h2> Liste de tous les articles </h2>

    <?php $pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    

    $query = $pdo->prepare('SELECT * FROM articles');
    $result=$query->execute();
    $articles=$query->fetchAll();

    ?>



    <ul>
        <?php foreach ($articles as $article): ?>
            <li><a href="article.php?id=<?= $article['id'] ?>"><?= $article['titre'] ?></a> <br/>
                
        </li>
        <?php endforeach ?>
    </ul>


    <footer>
      <a href="https://github.com/Eva-Poulaillon"><IMG class="displayed" src="logo_github.jpg" width="100" length="100" alt="logo_github"></a>
      <a href="https://www.linkedin.com/in/eva-poulaillon-b91444198/"><IMG class="displayed" src="logo_linkedin.png" width="100" length="100" alt="logo_linkedin"></a>
    </footer>
</body> <!-- fermeture de la balise body -->
</html>
