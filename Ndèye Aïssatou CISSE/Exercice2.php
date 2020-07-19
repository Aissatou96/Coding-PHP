<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exo2.css">
    <title>Exercice2.php</title>
</head>
<body>
    <!--Formulaire-->
    <form method="POST">
        <label for="cal">CALENDRIER</label>
        <select name="choix" id="cal" >
            <option></option>
            <option value="Français">FRANCAIS</option>
            <option value="Anglais">ANGLAIS</option>
        </select>
        <br><br>
        <input type="submit" name="valider" value="AFFICHER">
        <br><br>
    </form>
    <!--Traitement-->
    <?php
    /*Création du tableau associatif calendrier*/
    $Calendrier = array(
        'Français' => [ 
         1 => 'Janvier',
         2 => 'Février',
         3 => 'Mars',
         4 => 'Avril',
         5 => 'Mai',
         6 => 'Juin',
         7 => 'Juillet',
         8 => 'Août',
         9 => 'Septembre',
         10 => 'Octobre',
         11 => 'Novembre',
         12 => 'Décembre'
        ],
        'Anglais' => [
         1 => 'January',
         2 => 'February',
         3 => 'March',
         4 => 'April',
         5 => 'May',
         6 => 'Jun',
         7 => 'July',
         8 => 'August',
         9 => 'September',
         10 => 'October',
         11 => 'November',
         12 => 'December'
        ]
     );
    /*Création de la fonction afficher pour l'affichage du calendrier selon la langue choisie*/
     function afficher($tab){
         $i=1;
        echo "<table>";
        foreach($tab as $clef => $val){
            if($i==1){
                echo "<tr>";
            }
         echo "<td>$clef</td>";
         echo "<td>$val</td>";
        
         if($i==3){
            echo "</tr>";
            $i = 1;
         }else{
             $i++;
         }
        }
        echo "</table>";
    }

    /* Processus de Traitement*/
    if(isset($_POST['valider']))
    {
        if(empty($_POST['choix']))
        {
            echo "Veuillez choisir une langue";
        }else{
            $lang = $_POST['choix'];
            if($lang == 'Français'){
                $tabFr = $Calendrier['Français'];
                afficher($tabFr);
            }else{
                $tabEn = $Calendrier['Anglais'];
                afficher($tabEn);
            }
        }  
    }
?>
</body>
</html>