<?php
 session_start();

if(isset($_POST['valider']))
{
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $pdo = new PDO("mysql:host=localhost;dbname=MyDevBlog","root","root");

    $sql = "SELECT * FROM utilisateurs WHERE login = '$login' ";
    $result = $pdo->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {

        $data = $result->fetchAll();
        if (password_verify($pass, $data[0]["mdp"]))
        {
            echo "Connexion reussi";
            $_SESSION['login'] = $login;
        }
    }
    else{
        echo "fail";
    }
}

?>

<html>
<header>
    <nav>
        <a href="ajout_article.php">Ajout_A</a>
        <a href="ajout_utilisateur.php">Ajout_U</a>
        <a href="utilisateurs.php">Utilisateurs</a>
    </nav>
    <h1>MyDevBlog</h1>
    
    </header>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="style/vitrine.css">
    <link rel="stylesheet" type="text/css" href="connexion.css">
    
</head>
<body>
<h2>Connexion</h2>
<form name="inscription" method="post" action="">
login : <input type="text" name="login"/> </br>
password : <input type="password" name="pass" /> </br>
<input type="submit" name="valider" value="OK"/>
</form>

</body>
</html>