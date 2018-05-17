<!DOCTYPE html>
<html>
    <head>
          <meta charset="utf-8" />
          <link rel="stylesheet" type="text/css" href="style.css"> 
          <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">  
          <title>Balise &lt;Table&gt;</title>
    </head>

<body>
  <main>
    <a href="index.php" style="text-decoration: none" class="nope"><h1>LEXIQUE HTML</h1></a> 
    <?php
include("menu.php");
?>
<header>
        <h2>
          Présentation de la balise <code>&lt;table&gt;</code>
        </h2>
    </header>
        <p>L'élément <code>&lt;table&gt;</code> permet de représenter des informations exprimées dans un tableau de données en deux dimensions.</p>
        <br />
        <p>
        <table class="extable">
            <tr>
              <th>Prénom</th>
              <th>Nom</th>
            </tr>
            <tr>
              <td>Jean</td>
              <td>Dupont</td>
            </tr>
            <tr>
              <td>Marion</td>
              <td>Duval</td>
            </tr>
          </table>
        </p>
        <p>La largeur et la hauteur du tableau sont définies par les attributs "rows" (rangées)
            et "cols" (colonnes)</p>
        <br />
        <p><strong>Exemple :</strong><br/>
            <img src="./media/extable.png"/>
        </p><br />
        <p>
            On peut également créer des tableaux incluant header, body et footer :
        </p><br />
        <article class="extable3">
          <img src="./media/extable2.png"/>
            <table class="extable2">
                <thead>
                  <tr>
                    <th>Contenu d'en-tête 1</th>
                    <th>Contenu d'en-tête 2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Contenu interne 1</td>
                    <td>Contenu interne 2</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td>Pied de tableau 1</td>
                    <td>Pied de tableau 2</td>
                  </tr>
                </tfoot>
              </table>
        </article>
        <footer>
            <a class="contactus" href="./contact.php"> Nous contacter</a>
          <span> Groupe 4 &copy;</span>
        </footer>    
    </main>
    
  </div>
    </body>