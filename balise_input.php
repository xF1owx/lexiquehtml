<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">  
        <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet"> 
        <title> Balise &lt;Input&gt; </title>              
    </head>

<body>
            <main>
                <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a>
                <?php
include("menu.php");
?>
                    <h2>
                        Présentation de la balise <code>&lt;input&gt;</code>
                    </h2>
         <header>
             <p>La balise html <code>&lt;input&gt;</code> est utilisée pour créer un contrôle interactif dans un formulaire web qui permet à l'utilisateur de <br />
                 saisir des données. Les saisies possibles et le comportement de l'élément <code>&lt;input&gt;</code> dépendent fortement de la valeur indiquée dans son attribut "type."<br /> 

            Plus simplement la balise <code>&lt;input&gt;</code> permet des entrées de données par l'utilisateur (Cocher une case, saisir un mot de passe, une<br /> 
            adresse mail etc) et même d'ajouter un bouton "submit / envoyer". </p>

            <p><h2><strong>Exemples de balises <code>&lt;input&gt;</code>:</strong></h2>
            <ul class="exempleinput">
               <li> <input id="input1" type="text"> Type text</li>
                <li><input id="input2" type="checkbox"> Type checkbox</li>
                <li><input id="input3" type="radio"> Type radio</li>
                <li><input id="input4" type="color"> Type color</li>
                <li><input id="input5" type="submit"> Type submit</li>
                <li><input id="input6" type="password"> Type password, pour cacher les caractères entrés (mot de passe) </li><br />
                </ul>
            <strong>Exemple :</strong><br />
            <img src="./media/exinput.png"><br />
            *La liste de tout les types d'input étant assez conséquente, je ne présente donc que quelques exemples<br />
        </p>

                <p>La balise <code>&lt;input&gt;</code> offre une multitude de possibilités et de combinaisons possibles,<br />
                tel que les formulaires d'inscription, composés de plusieurs champs de différents types.<br />
                <br />

            <p><strong>Exemple de formulaire avec différents types de champs:</strong><br />

            <form action="getform.php" method="get"class="exformulaire">
              <label>Prénom : <input type="text"></label><br>
              <label>Nom : <input type="text"></label><br>
              <label>Adresse email : <input type="email"></label><br />
              <input type="submit" value="Envoyer">
            </form><br />
            <strong>Code pour cet exemple de formulaire:</strong><br />
            <img src="./media/excombinaison.png"><br />

        </p>

         </header>
            <footer>
                    <a class="contactus" href="./contact.php"> Nous contacter</a>
                <span> Groupe 4 &copy;</span>
         </footer>
        </main>
    </body>
</html>