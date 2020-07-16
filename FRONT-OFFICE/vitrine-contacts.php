<!DOCTYPE html>
<html>
<head>
<title>Acceuil</title>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/vitrine.css">
    <link rel="stylesheet" type="text/css" href="vitrine-contacts.css">
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

    <h2>Contacts</h2>

    <form action="/ma-page-de-traitement" method="post">
        <div>
            <label for="name">Votre nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">Votre e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Un message particulier :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>

    <footer>
        <a href="https://github.com/Eva-Poulaillon"><IMG class="displayed" src="logo_github.jpg" width="100" length="100" alt="logo_github"></a>
        <a href="https://www.linkedin.com/in/eva-poulaillon-b91444198/"><IMG class="displayed" src="logo_linkedin.png" width="100" length="100" alt="logo_linkedin"></a>
    </footer>
</body> <!-- fermeture de la balise body -->
</html>