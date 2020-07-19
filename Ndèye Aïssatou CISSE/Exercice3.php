<?php
    include("Exercice3_fonctions.php");
    $formvalide=false;
    $nombre="";
    $msg="";
    $result="";
    $errors="";
    $mots="";
        if(isset($_POST['envoie']))
        {
            if(!empty($_POST['nombre'])){
                if(!is_number($_POST['nombre']))
                {
                    $msg= "veuillez saisir un nombre entier positif";
                }
                else
                {   
                    $nombre=$_POST['nombre'];

                        for ($i=1; $i <= $nombre; $i++) 
                       { 
                         
                        //Recuperation du Mot
                            if(!empty($_POST['nombre'.$i]))
                            {
                                $mot=$_POST['nombre'.$i];
                                var_dump($mot) ;
                            } 
                       }
                    $formvalide=true;
                }
          }else{
                  $msg= "veuillez saisir un nombre ";
          }

        }
        if($msg!=""){
            echo $msg;
        }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body>
<!--Formulaire-->
    <form action="" method="POST">
        <label for="mot">Combien de Mots</label><br><br>
        <input type="text" id="mot" name="nombre" value="<?php if(isset($_POST['nombre'])){echo $_POST['nombre'];}?>">
        <br><br>
        <?php
            if($formvalide){
                for($i=1;$i<=$nombre;$i++){      
        ?>
            <input type="text" name="nombre<?php echo $i;?>"><br><br>
        <?php
                }
            }
        ?>
        <input type="submit" name="envoie" value="VALIDER">
        <input type="reset" name="annuler" value="ANNULER"><br><br>
    </form>
</body>
</html>