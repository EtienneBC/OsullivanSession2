<!DOCTYPE html>
<html>
<head>
<title>Cours PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>Titre principal</h1>
<?php
$initial = 600;
$iteration = 0;
while(mt_rand(0,1000) != $initial){
    $iteration++;
}
echo "Nombre d'itération : $iteration";

?>