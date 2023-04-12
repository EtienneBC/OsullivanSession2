<!-- Restaurer la session initiee -->
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Verification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php echo 'Bonjour ' . $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>
</body>

</html>