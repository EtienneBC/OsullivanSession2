<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Calculateur de fréquences</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        * {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .formulaire {
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
            border: 1px solid black;
            padding: 10px;
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="formulaire">
        <form method="post" action="Exercice4.php">
            <label for="phrase">Phrase</label>
            <input type="text" name="phrase" placeholder="" pattern="^[a-z\s\-]{15,}$" required>
            <label for="lettre">Lettre</label>
            <input type="text" name="lettre" placeholder="" pattern=[a-z] required>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $phrase = $_POST['phrase'];
            $lettre = $_POST['lettre'];
            $result = substr_count($phrase, $lettre);
            echo "<div class='result'>La lettre $lettre apparait $result fois dans la phrase $phrase</div>";
        }

        ?>
    </div>
</body>