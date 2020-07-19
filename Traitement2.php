<?php
    /*Recupérons le clic de l'utilisateur*/
    if(isset($_POST['valider'])) {
        $r= $_POST['ry'];
    

        /* Vérifions que tous les champs ont été saisis*/
        if(empty($_POST['ry'])){
            echo "Veuillez entrer un rayon";
        }else{
        /*Verifions si la valeur du rayon entré est un nombre*/
            if(!is_numeric($_POST['ry'])){
            echo "Veuillez saisir un nombre";
        }else{
            /*faisons les calculs*/
            $Surface = 3.14 * pow($r,2);
            echo 'La surface du cercle est: ' .$Surface. '<br>';
            $Perimetre = 2 * 3.14 * $r;
            echo 'le périmètre du cercle est: ' .$Perimetre;
        }
    }
    }
       
?>