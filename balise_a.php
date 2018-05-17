<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">  
        <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet"> 
        <title>Balise &lt;A&gt;</title>
    </head>

<body>
        <main>
            <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a>
            <?php
include("menu.php");
?>
                <h2>
                    Présentation de la balise <code>&lt;a&gt;</code>
                </h2>
            
                    <p>
                            La balise HTML <code>&lt;a&gt;</code> (ancre) permet de faire un lien,
                            une zone cliquable qui permet d'accéder à une autre page HTML. <br />
                            Elle possède de nombreux attributs compatibles comme le href par exemple.
                            "Href" correspond à l'adresse de l'objet que vous souhaitez lier, un peu comme son "numéro de téléphone". <br />
                            La fonction <strong>target="_blank"</strong> permet au lien de s'ouvrir dans un nouvel onglet.
                    </p>
                    
                                <p>
                                    <strong>Exemple :</strong><br/>
                                </p>

                    
                         <img src="./media/exemple_balise_a.jpg" alt="exemple d'une balise a" width="800" height="99" />
                    

                          <a href="https://www.accesscodeschool.fr/?gclid=Cj0KCQiA_JTUBRD4ARIsAL7_VeX5FQTmHhkxoD50drD64XOJ2YzdtZPPwWwMfYCyBbxm9fOwybbrCxEaAuVFEALw_wcB"
                            target="_blank">
                            Le lien d'Access Code School
                          </a>
                    </p>
                    
        
        <footer>
                <a class="contactus" href="./contact.php"> Nous contacter</a>
                <span> Groupe 4 &copy;</span>
        </footer>
    </main>
    </body>
    </html>