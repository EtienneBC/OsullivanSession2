<html>
<head>
    <title>traitement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<?php //On démarre une nouvelle session 
session_start();
 /*On utilise session_id() pour récupérer l'id de session s'il existe. *Si l'id de session n'existe pas, session_id() rnevoie une chaine *de caractères vide*/ 
 $id_session = session_id(); 
    //On vérifie si le formulaire a été soumis
    if (isset($_POST['prenom']) && isset($_POST['nom'])) {
        //On récupère les valeurs du formulaire
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        //On vérifie si les champs ne sont pas vides
        if (!empty($prenom) && !empty($nom)) {
            //On vérifie si la session n'existe pas
            if (!isset($_SESSION['prenom']) && !isset($_SESSION['nom'])) {
                //On enregistre les valeurs dans la session
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                //On affiche un message de succès
                echo 'Vous êtes inscrits ! <br> <a href="verification.php">verifier</a>';
            } else {
                //On affiche un message d'erreur
                echo 'Vous êtes déjà inscrits !';
            }
        } else {
            //On affiche un message d'erreur
            echo 'Veuillez remplir tous les champs ! <br> <a href="formulaire.php">retour</a>';
        }
    } else {
        //On affiche un message d'erreur
        echo 'Veuillez remplir tous les champs ! <br> <a href="formulaire.php">retour</a>';
    }
 ?>

