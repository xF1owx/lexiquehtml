<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
        <title>Balise &lt;body&gt;</title>
    </head>

<body>
        <main>
            <header>
                <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a>
                <?php
include("menu.php");
?>
                <h2> 
                    Présentation de la balise <code>&lt;body&gt;</code>
                </h2>

                <p>
                    La balise HTML <code>&lt;body&gt;</code> (corps) est l'un des éléments structurels qui composent un document HTML. <br />
                    Elle-même se compose de plusieurs éléments : header, main, et footer.
                    C'est ici que l'on vas intégrer le contenu principal du document HTML, ce que l'on veux montrer à l'utilisateur. <br />
    
                </p>

                <p>
                        <strong>Exemple :</strong><br/>
                </p>

                <p>
                    <img src="./media/exemple_balise_body.jpg" alt="exemple de balise body" width="1055" height="365" />
                </p>
            
            <footer>
                    <a class="contactus" href="./contact.php"> Nous contacter</a>
                <span> Groupe 4 &copy;</span>
            </footer>
        </main>  
    </body>
        </html>