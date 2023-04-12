<?php //On démarre une nouvelle session 
session_start(); 
/*On utilise session_id() pour récupérer l'id de session s'il existe. 
*Si l'id de session n'existe pas, session_id() rnevoie une chaine 
*de caractères vide*/
$id_session = session_id(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Session PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Inscription</h1>
    <form action="traitement.php" method="post">
        <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <input class="btn" type="submit" value="S'inscrire">
    </form>
</body>

</html>