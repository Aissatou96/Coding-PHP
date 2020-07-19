<?php
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    <form method="POST">
        <label for="valeur">VEUILLEZ ENTRER UNE VALEUR SUPERIEURE A 10000:</label><br>
        <input type="text" for="valeur" name="val" <?php if(isset($_POST['val'])){echo $_POST['val'];}?>>
        <br><br>
        <input type="submit" name="valider" value="OK">
        <br><br>
    </form>

    <?php
    /*Création de la fonction premier pour vérifier si un nombre est premier*/
        function premier($P){
            $i=2;
            while($i<$P){
                if($P%$i==0){
                    return false;
                }
                $i++;
            }
            return true;
        }

    /*Création de la fonction moyenne*/
        function moyenne($tableau){
            $som = 0;
            for($i=0;$i<count($tableau);$i++){
                $som = $som + $tableau[$i];
            }
            $Moyenne = $som / count($tableau);
            return $Moyenne;
        }

    /*Recupérer le clic de l'utilisateur*/
        if(isset($_POST['valider'])){
            $valeur = $_POST['val'];

    /*Vérifier si l'utilisateur a entré une valeur supérieure à 10000*/
            if($valeur<=10000){
                echo "Veuillez saisir une valeur supérieure à 10000";
            }elseif (empty($valeur)){
                echo "Veuillez saisir une valeur s'il vous plaît!";
            
    /*Vérifier si la valeur entrée est bien un nombre*/
            }elseif (!is_numeric($valeur)){
                echo "Veuillez entrer un nombre entier";
            }else{
    /*Utilisation de la fonction premier pour recupérer tous les nombres premiers dans un tableau*/
                $tab=array(); #déclaration du tableau qui doit recevoir les nombres premiers
                for ($i=2; $i<=$valeur ; $i++){ 
                    if(premier($i)){
                        $tab[] = $i;
                    }
                }

    /*Affichage du tableau de nombres premiers*/
                print_r($tab);
                echo "<br><br>";                

    /*Partie2: déclaration de 2 tableaux associatifs pour les valeurs inférieures et les valeurs supérieures*/
                $Vinf = array();
                $Vsup = array();

    /*On stocke la valeur de moyenne dans une variable $X*/
                $X = moyenne($tab);
    /*On parcourt le tableau de nombre premier $tab et à chaque fois on compare si la valeur à l'indice i est inférieure
    *à la moyenne ou supérieure à la moyenne*/
                for($i=0;$i<count($tab);$i++){
                    if($tab[$i] < $X)
                    {
                        $Vinf[] = $tab[$i];
                    }else
                    {
                        $Vsup[] = $tab[$i];
                    }
                 }

    /*Création du tableau associatif $T qui va recevoir les valeurs inférieures et supérieures*/
                 $T = array(
                    'inferieur' => $Vinf,
                    'Superieur' => $Vsup
                );
    /*Affichage du tableau associatif $T*/
                 print_r($T);
     }
    }
    ?>
</body>
</html>