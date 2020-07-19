<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <!--Formulaire-->
    <form method="POST">
    <label for="text">VEUILLEZ SAISIR DES PHRASES</label><br><br>

     <!--Utilisation des formulaires dans textarea pour garder les informations en mémoires-->
     <textarea name="phr1" id="text"><?php if(isset($_POST['phr1'])){echo $_POST['phr1'];}?></textarea><br><br>

        <input type="submit" name="valider" value="REAFFICHER"><br><br>

    <!--<textarea name="phr2" id="text"></textarea><br><br>-->
    </form>
    <!--Traitement-->
    <?php
        $affich="";
        if(isset($_POST['valider']))
        {
            $var = $_POST['phr1'];
            if(empty($var))
            {
                echo "VEUILLEZ SAISIR DES PHRASES";
            }else{
                $tab = str_split($var);
                $tabSE = "";
                $caractP = 1;
                for($i=0;$i<count($tab);$i++)
                {
                    if($tab[$i]==" ")
                    {
                        if($caractP!=2)
                        {
                            $tabSE = $tabSE.$tab[$i];
                            $caractP = 2;
                        }
                    } else
                    {
                        $tabSE = $tabSE.$tab[$i];
                        $caractP = 1;
                }
            }
           /* echo  'bonjour '.$tabSE;
            $affich = $tabSE;*/
            echo"<textarea name='phr2' id='text'>";
            echo "$tabSE";
            echo "</textarea>";

        }
    }
    ?>
    <!--
    include("Exo4_fonctions.php");
   /* $chaine="Aissatou est une codeuse?";
    var_dump(validerPhrase($chaine));*/
    $texte= "Sidi est un codeur. Maman va au hypermarché."
    $phrase=(texteEnPhrase($texte));
    echo $phrase;
    -->
</body>
</html>