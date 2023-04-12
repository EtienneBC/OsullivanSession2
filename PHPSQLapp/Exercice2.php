<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset="utf-8">
    <style>
        div {
            margin: 0 auto;
            width: 500px;
            height: 500px;
            border: 1px solid black;
            padding: 10px;
        }
        
        form {
            margin: 0 auto;
            border: 1px solid black;
        }
        p {
            display: inline-block;
        }
        input {
            display: inline-block;
            margin-left: auto;
            width: 200px;
            border: 1px solid black;
            padding: 10px;
        }
        
        input[type=submit] {
            margin: 0 auto;
            width: 400px;
            height: 30px;
            border: 1px solid black;
            padding: 10px;
            background-color: green;
            color: white;
        }
    </style>
</head>

<body>
    <div>
    <form type=post action="Exercice2.php">
        <p>Quelle est la capitale du Canada?</p>
        <input type="text" name="Canada" placeholder="" required>
        <p>Quelle est la capitale de la France?</p>
        <input type="text" name="France" placeholder="" required>
        <p>Quelle est la capitale de l'Italie?</p>
        <input type="text" name="Italie" placeholder="" required>
        <p>Quelle est la capitale de l'Allemagne?</p>
        <input type="text" name="Allemagne" placeholder="" required>
        <p>Quelle est la capitale de la Belgique?</p>
        <input type="text" name="Belgique" placeholder="" required>
        <input type="submit" name="submit" value="Afficher le score">
    </form>
    <p>Votre score est de $score/5";
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $score = 0;
        if ($_POST["Canada"] == "Ottawa") {
            $score++;
        }
        if ($_POST["France"] == "Paris") {
            $score++;
        }
        if ($_POST["Italie"] == "Rome") {
            $score++;
        }
        if ($_POST["Allemagne"] == "Berlin") {
            $score++;
        }
        if ($_POST["Belgique"] == "Bruxelles") {
            $score++;
        }
        echo "Votre score est de $score/5";
    }

    ?>
</body>