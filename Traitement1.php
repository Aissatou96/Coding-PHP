<?php
    /*Recupérer le clic de l'utilisateur */
    if(isset($_POST['valider'])){
        $A = $_POST['nbreA'];
        $B = $_POST['nbreB'];
    /* Vérifions que tous les champs ont été saisis*/
        if(empty($_POST['nbreA']) || empty($_POST['nbreB'])){
            echo "Veuillez remplir tous les champs";
        }else{
     /* Vérifions si les nombres entrés sont des entiers*/
            if(!is_numeric($_POST['nbreA']) || !is_numeric($_POST['nbreB'])){
                echo "Veuillez saisir des nombres entiers";
            }else{
    /*Faisons les calculs*/
                $ratio = $A/$B;
                echo "la division de A et B est : ".$ratio. " <br>";
                $quotient = intval($A/$B);
                echo 'le quotient entier est ' .$quotient. ' <br>';
                $reste = $A % $B;
                echo 'le reste de la division est ' .$reste. ' <br>';
        
        
            }

        }
    }
    

?>