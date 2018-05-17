<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
        <title> Balise &lt;Select&gt; </title>
    </head>

<body>
            <main>
                <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a>
                <?php
include("menu.php");
?>
                    <h2>
                        Présentation de la balise <code>&lt;select&gt;</code>
                    </h2>
         <header>
             <p>La balise <code>&lt;select&gt;</code> représente un contrôle qui fournit une liste d'options afin d'offrir un choix multiple à l'utilisateur.<br />
                il existe 2 types de balises <code>&lt;select&gt;</code>:
                <ul>

                <li>Basique</li>
                <li>Multi-sélection</li>

                </ul>
             <h2><p>Exemple de balise <code>&lt;select&gt;</code>"basique":</h2></p>
            
            
             <select id="choix">
                <option value="Par défaut" selected > Par défaut</option>
                <option value="Choix 1" > Choix 1</option>
                <option value="Choix 2" > Choix 2</option>
                <option value="Choix 3" >Choix 3</option>
            </select>

            <p><h2>Exemple pour cette page :</h2>
                <img src="./media/exselect.png"></p>

                <p>*Notez le "selected" qui sera la valeur sélectionnée par défaut.</p><br />

                <h2><p>Exemple de balise <code>&lt;select&gt;:</code>"multi-sélection"</h2></p>

                <select id="choix"multiple>
                        <option value="Choix 1" > Choix 1</option>
                        <option value="Choix 2" > Choix 2</option>
                        <option value="Choix 3" > Choix 3</option>
                        <option value="Choix 4" > Choix 4</option>
                        <option value="Choix 5" > Choix 5</option>
                        <option value="Choix 6" > Choix 6</option>
                        <option value="Choix 7" >Choix 7 </option>
                    </select><br />

                    <p><h2>Exemple pour cette page :</h2>
                        <img src="./media/exselectm.png"></p>

                        <p>*Notez que la seule différence avec le modèle basique réside dans l'attribut "multiple" </p><br />


         </header>
            <footer>
                    <a class="contactus" href="./contact.php"> Nous contacter</a>
                <span> Groupe 4 &copy;</span>
         </footer>
        </main>
    </body>
</html>