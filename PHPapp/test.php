<!DOCTYPE html>
<html>
<head>
<title>Cours PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>Titre principal</h1>
<?php
$prenom = "Mohamed";
echo gettype($prenom); // Affiche string
$age = 30; //$age stocke le nombre 30 echo "La variable \$age contient : "; echo $age;
echo "<br>";
$age = 31; //$ages tocke le nombre 31 echo "La variable\$age contient : "; echo $age;
echo "la variable \$age contient : $age"; // Affiche la variable $age
$x = 7;
$y = '7';
echo "<br>";
if($x === $y) {
echo "Les deux variables sont identiques";
} else {
echo "Les deux variables sont différentes";
}
echo "<br>";
?>

<?php 
function bool($var){ 
    if($var) echo 'TRUE<br>'; 
    else echo 'FALSE<br>';
}
bool(""==FALSE); 
bool("0"=="");
bool(0==""); 
bool(0===FALSE); 
bool("0"==FALSE);
?> 

<?php 

function note($note){
    if($note >= 18 && $note <= 20){
        echo "A";
    }elseif($note >= 14 && $note < 18){
        echo "B";
    }elseif($note >= 10 && $note < 14){
        echo "C";
    }elseif($note >= 0 && $note < 10){
        echo "D";
    }else{
        echo "Note invalide";
    }
}

note(20);
echo "<br>";
?>

<?php
$nombre = 20;
if(($nombre % 3 == 0) && ($nombre % 7 == 0)){
    echo "Le nombre est à la fois multiple de 3 et de 7";
}else{
    echo "Le nombre n'est pas à la fois multiple de 3 et de 7";
}

echo "<br>";
?>
<?php
$nombre1 = 10;
$nombre2 = 5;
$operation = "addition";
if($operation == "addition"){
    echo $nombre1 + $nombre2;
}elseif($operation == "soustraction"){
    echo $nombre1 - $nombre2;
}elseif($operation == "multiplication"){
    echo $nombre1 * $nombre2;
}elseif($operation == "division"){
    echo $nombre1 / $nombre2;
}else{
    echo "Opération invalide";
}
echo "<br>";
?>
<?php
$nombre1 = 10;
$nombre2 = 5;
$operation = "soustraction";
switch($operation){
    case "addition":
        echo $nombre1 + $nombre2;
        break;
    case "soustraction":
        echo $nombre1 - $nombre2;
        break;
    case "multiplication":
        echo $nombre1 * $nombre2;
        break;
    case "division":
        echo $nombre1 / $nombre2;
        break;
    default:
        echo "Opération invalide";
}
echo "<br>";





?>
<?php
$score = 600;
if($score < 600){
    echo "faible";
}else{
    echo "fort";
}
echo "<br>";
?>
</body>