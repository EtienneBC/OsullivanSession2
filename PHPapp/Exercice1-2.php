<!DOCTYPE html>
<html>
    <head> 
        <title>PHP</title> 
        <meta charset="utf-8"> 
    </head> 

    <body>
        <?php 
        // $Tableau = [3,4,13,5];
        // $Somme = 0;
        // foreach($Tableau as $value){
        //        $Somme += $value;
        //     };
        //     print_r($Tableau);
        //     echo "<br>$Somme"; 
            
            $Tableau2 = [59,95,58,72,40,5,33,48,21,3];
            $Inferieur = [];
            $Superieur = [];

            foreach($Tableau2 as $value){
                if($value < 50){
                    array_push($Inferieur, $value);
                }else{
                    array_push($Superieur, $value);
                }
            }
            echo "<br>";  
            print_r($Inferieur);
            echo "<br>";
            print_r($Superieur);
            echo "<br>";
            echo "Tableau 1:" .($Superieur[0]). " " .$Superieur[1]. " " .$Superieur[2]. " " .$Superieur[3]. " " .$Superieur[4]. " " .$Superieur[5]. " " .$Superieur[6]. " " .$Superieur[7]. " " .$Superieur[8]. " " .$Superieur[9];
            echo "<br>";
            echo "Tableau 2:" .$Inferieur[0]. " " .$Inferieur[1]. " " .$Inferieur[2]. " " .$Inferieur[3]. " " .$Inferieur[4]. " " .$Inferieur[5]. " " .$Inferieur[6]. " " .$Inferieur[7]. " " .$Inferieur[8]. " " .$Inferieur[9];


        ?>
            </body>
        </html>
        