<?php
    /*Recupérer le clic de l'utilisateur */
    if(isset($_POST['valider'])){
        $R1 = $_POST['r1'];
        $R2 = $_POST['r2'];
        $R3 = $_POST['r3'];
    /* Vérifions que tous les champs ont été saisis*/
        if(empty($_POST['r1']) || empty($_POST['r2']) || empty($_POST['r3'])){
            echo "Veuillez remplir tous les champs";
        }else{
     /* Vérifions si les nombres entrés sont des entiers*/
            if(!is_numeric($_POST['r1']) || !is_numeric($_POST['r2']) || !is_numeric($_POST['r3'])){
                echo "Veuillez saisir des nombres entiers";
            }else{
    /*Faisons les calculs*/
                $RenSerie = $R1 + $R2 + $R3;
                echo 'La résistance en série est égale à ' .$RenSerie. '<br>';
                $RenParallele = ($R1 * $R2 * $R3) / ($R1*$R2 + $R2*$R3 + $R1*$R3);
                echo 'La résistance en paralèlle est égale à ' .$RenParallele. '<br>';

/*********************************************************************************************************/
        if (isset($_POST['choisir'])){
            $C1 = $_POST['choix1'];
            $C2 = $_POST['choix2'];
            /* Vérifions que tous les champs ont été saisis*/
        if(empty($_POST['choix'])){
            echo "Veuillez choisir 1 ou 2";
        }else
     /* Vérifions si les nombres entrés sont des entiers*/
            if(!is_numeric($_POST['choix'])){
                echo "Veuillez saisir un entier";
            }else{
    /*Faisons les calculs*/
                Switch($_POST['choix']){
                    case "Résistance en série":
                        $RenSerie = $R1 + $R2 + $R3;
                        echo 'La résistance en série est égale à ' .$RenSerie;
                    break;
                    case "Résistance en parallèle":
                        $RenParallele = ($R1 * $R2 * $R3) / ($R1*$R2 + $R2*$R3 + $R1*$R3);
                        echo 'La résistance en paralèlle est égale à ' .$RenParallele;
                    break;
                    default:
                    echo "veuillez choisir 1 ou 2";
                    break;  
                }
                
        }
               
        
        
            }

        }
    }
}
    
        ?>