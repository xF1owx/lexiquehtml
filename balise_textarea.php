<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">  
        <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
        <title>Balise &lt;Textarea&gt;</title>
    </head>

<body>
    <main>
        <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a> 
        <?php
include("menu.php");
?>
<header>
    <h2>
        Présentation de la balise <code>&lt;textarea&gt;</code>
    </h2>
</header>
    <p>L'élément <code>&lt;textarea&gt;</code> permet d'éditer du texte sur plusieurs lignes.
    <br />
    <textarea name="textarea" rows="10" cols="50">
        Bla bla bla
    </textarea>
    </p>
    <p>La largeur et la hauteur du tableau sont définies par les attributs "rows" (rangées)
        et "cols" (colonnes)</p>
    <br />
    <strong>Exemple :</strong><br/>
    <img src="./media/extextarea.png"/>
    <br />
    <p class="pmaudit">À l'instar des autres éléments HTML, <code>&lt;textarea&gt;</code> inclut les attributs universels (attributs communs à l'ensemble des éléments HTML).
    </p>

    <footer>
            <a class="contactus" href="./contact.php"> Nous contacter</a>
        <span> Groupe 4 &copy;</span>
    </footer>
</main>
</body>