<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Application1.css">
    <title>Application 1</title>
</head>
<body>
    <center>
    <form method="POST">
        <h1>SONATEL ACADEMIE</h1>
        <label for="lab1">Taille de la matrice carrée</label><br><br>
        <label for="labI1"><img src="icone1.png" class="I1" ></label>
        <input type="text" id="lab1" name="taille"><br><br>

        <label for="s1">Select C1</label><br><br>
        <label for="labI2" ><img src="icone2&3.png"></label>
        <select name="couleur1" id="s1">
            <option value="blue">Bleue</option>
            <option value="red">Rouge</option>
            <option value="yellow">Jaune</option>
            <option value="orange">Orange</option>
        </select>
        <br><br>

        <label for="s2">Select C2</label><br><br>
        <label for="labI3"><img src="icone2&3.png"></label>
        <select name="couleur2" id="s2">
            <option value="black">Noir</option>
            <option value="red">Rouge</option>
            <option value="yellow">Jaune</option>
            <option value="orange">Orange</option>
        </select>
        <br><br>

        <label for="s3">Position</label><br><br>
        <label for="labI4"><img src="interrogation.png"></label>
        <select name="choix3" id="s3">
            <option value="Haut">Haut</option>
            <option value="Bas">Bas</option>
        </select>
        <br><br><br><br>

        <input type="submit" name="annuler" value="ANNULER">
        <input type="submit" name="dessiner" value="DESSINER">
    </form>
    </center> 
    <?php
        if(isset($_POST['dessiner']))
        {
            $matrice = $_POST['taille'];
            if(empty($matrice)){
                echo "Veuillez entrer la taille de la matrice";
            }elseif (!is_numeric($matrice)) {
                echo "Veuillez entrer un nombre";
            }else
            {
                        $Position = $_POST['choix3'];
                        if($Position =='Haut'){
                            $ch=$_POST['couleur1'];
                            $cb=$_POST['couleur2'];
                        }else{
                            $ch=$_POST['couleur2'];
                            $cb=$_POST['couleur1'];
                        }
                        echo "<br><br><br>";
                        echo "<table border=\"1\" align=\"center\" width='300px' height='300px' >";
                        for($i=0;$i<$matrice;$i++)
                        {
                            echo "<tr>";
                            for($j=0,$k=($matrice-1);$j<$matrice,$k>=0;$j++,$k--)
                            {
                                if($i>=$j or $k==$i)
                                {
                                    echo "<td style=\"background-color:$ch\"> </td>";
                                }else
                                {
                                    echo "<td style = \"background-color:$cb\"></td>";
                                }
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
           
            }
        } 
    ?>
</body>
</html>