<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <form action="Exercice1.php" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prenom" required>
        <input type="date" name="naissance" placeholder="Date de naissance" required>
        <label for="Region" required>Region</label>
        <select name="Region" id="Region">
            <option value="QC">QC (Québec)</option>
            <option value="ON">ON (Ontario)</option>
            <option value="BC">BC (Colombie-Britannique)</option>
        </select>
        <input type="submit" name="submit" value="Construire">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nom = strtoupper(substr($_POST['nom'], 0, 2));
        $prenom = strtoupper(substr($_POST['prenom'], 0, 2));
        $naissance = str_replace('-', '', $_POST['naissance']);
        $region = $_POST['Region'];
        echo implode("", [$nom, $prenom, $naissance, $region]);
    }
    ?>
</body>