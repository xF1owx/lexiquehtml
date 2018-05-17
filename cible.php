<?php
   if  (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['message']) && !empty($_POST['email']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $message = $_POST['message'];
        $email = $_POST['email'];
	
	mail('florian.r@codeur.online','sujet', 'Hey Florian, tu as reçu une nouvelle demande via ton site sur les balises HTML de
    la part de '.$nom.' '.$prenom.' '.$email.' depuis le-mail suivant il a
    la question suivante pour toi  '.$message.'');
    echo 'mail envoyé';
    echo '<p><a href="index.php">Retour à l\'accueil</a></p>';
    }
    else
    {
        echo'il manque un renseignement';
    }
	
?>