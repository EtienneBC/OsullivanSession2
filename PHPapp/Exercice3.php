<!DOCTYPE html>
<html>
    <head> 
        <title>PHP</title> 
        <meta charset="utf-8"> 
    </head> 

    <body>
        <?php
        function AfficherTableau($Tableau){
            foreach($Tableau as $value){
                echo "$value ";
            }
        }
        function Moyenne($Tableau){
            $Somme = 0;
            foreach($Tableau as $value){
                $Somme += $value;
            }
            return $Somme / count($Tableau);
        }
        function PlusGrand($Tableau){
            $PlusGrand = 10;
            foreach($Tableau as $value){
                if($value > $PlusGrand){
                    $PlusGrand = $value;
                }
            }
            return $PlusGrand;
        }
        function test20($Tableau){
            $trouve = false;
            foreach($Tableau as $value){
                if($value == 20){
                }
                return $trouve;
            }
            return false;
        }

        function Maximum($Tableau){
            $Maximum = 0;
            foreach($Tableau as $value){
                if($value > $Maximum){
                    $Maximum = $value;
                }
            }
            return $Maximum;
        }

        $Tableau = [3,4,13,5];

        echo "Tableau : ";
        AfficherTableau($Tableau);
        echo "<br>";
        echo "Moyenne : " . Moyenne($Tableau);
        echo "<br>";
        echo "Plus grand : " . PlusGrand($Tableau);
        echo "<br>";
        echo "Contient 20 : " . test20($Tableau);
        echo "<br>";
        echo "Maximum : " . Maximum($Tableau);
        echo "<br>";
        ?>
    </body>
</html>
