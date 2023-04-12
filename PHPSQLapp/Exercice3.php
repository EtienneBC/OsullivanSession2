<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Reservation de voyage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        * {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        div {
            margin: 0 auto;
            width: 500px;
            border: 1px solid black;
            padding: 10px;
            background-color: black;
        }

        form {
            padding: 10px;
            margin: 0 auto;
            border: 1px solid black;
            background-color: whitesmoke;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        label,
        input,
        select {
            margin-top: 10px;
            width: 100%;

        }

        input,
        select {
            margin-left: auto;
            border: 1px solid black;
            padding: 10px 0;
            border-radius: 10px;
        }

        input[type=submit] {
            margin: 10px auto;
            width: 200%;
            border: 1px solid black;
            padding: 10px;
            background-color: purple;
            color: white;
        }

        .result {
            margin: 0 auto;
            border: 1px solid black;
            padding: 10px;
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <div>
        <form method="post" action="Exercice3.php">
            <label for="nom">Nom Complet</label>
            <input type="text" name="nom" placeholder="" required>
            <label for="nombre">Nombre de personnes</label>
            <input type="number" name="nombre" placeholder="" required>
            <label for="destination">Choisir une destination</label>
            <select id="destination" name="destination" required>
                <option value="NewYork">New York (300$)</option>
                <option value="Boston">Boston (200$)</option>
                <option value="Washignton">Washignton (400$)</option>
            </select>
            <label for="code">Code promo</label>
            <input type="text" name="code" placeholder="">
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $nombre = $_POST['nombre'];
            $destination =$_POST['destination'];
            $code = $_POST['code'];
            $prix = 0;
            $reduction = 0;
            $total = 0;
            switch ($destination) {
                case 'NewYork':
                    $prix = 300;
                    break;
                case 'Boston':
                    $prix = 200;
                    break;
                case 'Washignton':
                    $prix = 400;
                    break;
            }
            if ($code == 'OSULLIVAN') {
                $reduction = 0.1;
            }
            $total = $prix * $nombre * (1 - $reduction);
            print "<p class='result'> Bonjour $nom, le prix total de votre voyage est de $total$</p>";
        }
        ?>
    </div>
</body>