<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet">

    <title>Contact</title>
</head>

<body>
    <main>
        <a href="index.php" style="text-decoration: none" class="nope">
            <h1>CONTACT</h1>
        </a>
        <svg>
            <filter id="filter">
                <feFlood flood-color="black" flood-opacity=".6" />
                <feComposite in2="SourceAlpha" operator="out" />
                <feGaussianBlur stdDeviation="2" />
                <feOffset dx="0" dy="10" />
                <feComposite in2="SourceAlpha" operator="in" />
                <feMerge>
                    <feMergeNode in="SourceGraphic" />
                    <feMergeNode />
                </feMerge>
            </filter>
        </svg>
        <div class="formulaire">
            <h2 class="h2contact">Vos Informations:</h2>
            <form id="idform" autocomplete="off" method="post" action="cible.php">
                <p>

                    <input type="text" name="nom" placeholder="Nom">

                </p>
                <p class="erreurnom erreur"></p>

                <p>

                    <input type="text" name="prenom" placeholder="Prénom">
                </p>

                <p class="erreurprenom erreur"></p>

                <p>
                    <input type="text" name="email" placeholder="Adresse mail">
                </p>
                <p class="erreurmail erreur"></p>




                <p>
                    <label for="pays">Pays</label>
                    <select id="pays" name="pays">
                        <option value="none" selected> - </option>
                        <option value="France"> France </option>
                        <option value="Espagne"> Espagne </option>
                        <option value="Italie"> Italie </option>
                        <option value="Allemagne"> Allemagne </option>
                        <option value="Suisse"> Suisse </option>
                        <option value="Azeroth"> Azeroth </option>
                        <option value="Portugal"> Portugal </option>

                    </select>

                    <p class="erreurpays erreur"></p>
                </p>

                <h2 class="h2contact">Tranche d'âge:</h2>
                <p>
                    <label for="age1"> Jeune</label>
                    <input type="radio" name="age" value="jeune">
                </p>

                <p>
                    <label for="age1"> Normal</label>
                    <input type="radio" name="age" value="normal">
                </p>

                <p>
                    <label for="age1"> Vieux</label>
                    <input type="radio" name="age" value="vieux">
                </p>
                <p class="erreurage erreur"></p>
                <textarea class="message" rows="8" cols="50" name="message" placeholder="Entrez votre message ici"></textarea>
                <p class="erreurMessage erreur" hidden="true"></p>
                <p class="paragraph--useConditions">J'accepte les conditions d'utilisation
                    <input id="checkbox" type="checkbox" name="check">
                </p>
                <p class="erreurConditions erreur" hidden="true"></p>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <footer>
            <span class="flexend"> Groupe 4 &copy;</span>
        </footer>
        <script type="text/javascript" src="contactJS.js"></script>
    </main>
</body>

</html>