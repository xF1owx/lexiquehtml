<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">   
        <title>Balise &lt;Form&gt;</title>
    </head>

<body>
    <main>
        <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a> 
        <?php
include("menu.php");
?>

<header>
        <h2>
            Présentation de la balise <code>&lt;form&gt;</code>
        </h2>
    </header>
        <p>L'élément <code>&lt;form&gt;</code> représente une section d'un document qui contient des contrôles interactifs qui permettent à
            l'utilisateur d'envoyer des données à un serveur web.
        <br />
    </p>
        <p>
            <form action="" method="get">
              <label for="GET-name">Nom :</label>
              <input id="GET-name" type="text" name="name">
              <input type="submit" value="Enregistrer">
            </form>
        </p>
        <br />
        <p><strong>Exemple :</strong><br/>
            <img src="./media/exform.png"/>
        </p>
 
    <footer>
            <a class="contactus" href="./contact.php"> Nous contacter</a>
        <span> Groupe 4 &copy;</span>
    </footer>
</main>
    </body>
</html>