<!DOCTYPE html>
<html>
    <head> 
        <title>PHP</title> 
        <meta charset="utf-8"> 
    </head> 

    <body>
        <?php
            $EmployeStatuts = ['Charles Castonguay' => 'Directeur', 'Alain Losier' => 'Developpeur front-end', 'Melanie Dezery' => 'Developpeur back-end', 'Danny Hewitt' => 'Developpeur back-end'];
            var_dump($EmployeStatuts);
            $EmployeSalaire = ['Charles Castonguay' => 100000, 'Alain Losier' => 90000, 'Melanie Dezery' => 80000, 'Danny Hewitt' => 80000];
            var_dump($EmployeSalaire);

            function SalaireAscendant($EmployeSalaire){
                $SalaireAscendant = $EmployeSalaire;
                asort($SalaireAscendant);
                return $SalaireAscendant;
            }
            var_dump(SalaireAscendant($EmployeSalaire));

            function SalaireMoyen($EmployeSalaire){
                $Somme = 0;
                foreach($EmployeSalaire as $value){
                    $Somme += $value;
                }
                return $Somme / count($EmployeSalaire);
            }
            echo "Salaire moyen : " . SalaireMoyen($EmployeSalaire);

            function tirage($EmployeStatuts){
                $tirage = array_rand($EmployeStatuts);
                return $tirage;
            }
            function SalaireUpdate($EmployeSalaire, $tirage){
                $EmployeSalaire[$tirage] = $EmployeSalaire[$tirage] + 5000;
                return $EmployeSalaire;
            }
            
            echo "<br>Le gagnant est : " . tirage($EmployeStatuts);
            var_dump(SalaireUpdate($EmployeSalaire, tirage($EmployeStatuts)));