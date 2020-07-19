<?php
    /*Recupérer le clic de l'utilisateur */
    if(isset($_POST['valider'])){
        $x = $_POST['reel'];
        $n = $_POST['entier'];
    /* Vérifions que tous les champs ont été saisis*/
        if(empty($_POST['reel']) || empty($_POST['entier'])){
            echo "Veuillez remplir tous les champs";
        }else{
     /* Vérifions si les nombres entrés sont de type numeric*/
            if(!is_numeric($_POST['reel']) || !is_numeric($_POST['entier'])){
                echo "Veuillez saisir des numériques";
            }else{
    /*Afficher la puissance*/
                $Puissance = pow($x, $n);
                echo $x. ' à la puissance ' .$n. ' est égal à ' .$Puissance;
                
        
            }

        }
    }
?>