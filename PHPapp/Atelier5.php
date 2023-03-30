<!DOCTYPE html>
<html>
    <head> 
        <title>PHP</title> 
        <meta charset="utf-8"> 
    </head> 

    <body>
        <h1>Titre principal</h1>
        <!-- Créer et initialiser un tableau $notes avec les valeurs suivantes -->
        <?php
            $ages = ['Victoria' => 15, 'David' => 18, 'Gabriel' => 16, 'Mireille' => 13];
            // Ajouter au tableau la note 10 de l’étudiant "Mohamed
            $ages['Mohamed'] = 10;
            // Supprimer la note de l’étudiant "Gabriel"
            unset($ages['Gabriel']);
            // Déterminer la note maximale et la note minimale du groupe. 
            $max = max($ages);
            $min = min($ages);
            echo "La note maximale est $max et la note minimale est $min";
            // Afficher le tableau après l'avoir trié par ordre alphabétique des étudiants. 
            ksort($ages);
            print_r($ages);
            // Classer les étudiants par ordre de mérite et afficher le tableau.
            arsort($ages);
            print_r($ages);
            // Déterminer la moyenne de la classe.
            $moyenne = array_sum($ages) / count($ages);
            echo "La moyenne de la classe est $moyenne";

        
        ?>