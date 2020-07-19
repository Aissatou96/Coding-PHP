<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Exercice8</title>
</head>
<body>
<center>
        <header>
            <img src="logo-SA.PNG" alt="logoISAE" width=800  height=250 />
        </header>
    </center>
    <center>
        <nav>  
        <ul>
        <li>
        <li class="menu-grp1"><a href="#">GROUPE 1</a>
        <ul class="submenu">
        <li><a href="Exercice1.php">Exercice 1</a></li>
        <li><a href="Exercice2.php">Exercice 2</a></li>
        <li><a href="Exercice3.php">Exercice 3</a></li>
        <li><a href="Exercice4.php">Exercice 4</a></li>
        <li><a href="Exercice5.php">Exercice 5</a></li>
        </ul>
        </li>
        
        <li class="menu-grp2"><a href="#">GROUPE 2</a>
        <ul class="submenu">
        <li><a href="Exercice6.php">Exercice 6</a></li>
        <li><a href="Exercice7.php">Exercice 7</a></li>
        <li><a href="Exercice8.php">Exercice 8</a></li>
        <li><a href="Exercice9.php">Exercice 9</a></li>
        <li><a href="Exercice10.php">Exercice 10</a></li>
        </ul>
        </li>
        
        <li class="menu-grp3"><a href="#">GROUPE 3</a>
        <ul class="submenu">
            <li><a href="Exercice11.php">Exercice 11</a></li>
            <li><a href="Exercice12.php">Exercice 12</a></li>
            <li><a href="Exercice13.php">Exercice 13</a></li>
            <li><a href="Exercice14.php">Exercice14</a></li>
            <li><a href="Exercice15.php">Exercice15</a></li>
        </ul>
        </li>
        
          <li class="menu-grp4"><a href="#">GROUPE 4</a>
        <ul class="submenu">
            <li><a href="Exercice16.php">Exercice 16</a></li>
            <li><a href="Exercice17.php">Exercice 17</a></li>
            <li><a href="Exercice18.php">Exercice 18</a></li>
            <li><a href="Exercice19.php">Exercice 19</a></li>
            <li><a href="Exercice20.php">Exercice 20</a></li>
        </ul>
        </li>
        
          <li class="menu-grp5"><a href="#">GROUPE 5</a>
        <ul class="submenu">
            <li><a href="Exercice21.php">Exercice 21</a></li>
            <li><a href="Exercice22.php">Exercice 22</a></li>
            <li><a href="Exercice23.php">Exercice 23</a></li>
            <li><a href="Exercice24.php">Exercice 24</a></li>
            <li><a href="Exercice25.php">Exercice 25</a></li>
            <li><a href="Exercice26.php">Exercice 26</a></li>

        </ul>
        </ul>
        </nav>
    </center>
    <!--Formulaire-->
    <form action="" method="POST">
        <fieldset>
            <legend>EQUATION DU SECOND DEGRE</legend>
    <label for="entier1">ENTRER L'ENTIER A:</label>
    <input type="text" id="entier1" name="entier1"><br><br>

     <label for="entier2">ENTRER L'ENTIER B:</label>
     <input type="text" id="entier2" name="entier2"><br><br>

     <label for="entier3">ENTRER L'ENTIER:</label>
     <input type="text" id="entier3" name="entier3"><br><br>

     <input type="submit" name="name" value="Résoudre">
     </fieldset>
    </form>

    <!--Traitement-->
        <?php
             /*Recupérer le clic de l'utilisateur */
    if(isset($_POST['valider'])){
        $A = $_POST['entier1'];
        $B = $_POST['entier2'];
        $C = $_POST['entier3'];
    /* Vérifions que tous les champs ont été saisis*/
        if(empty($_POST['entier1']) || empty($_POST['entier2']) || empty($_POST['entier3'])){
            echo "Veuillez remplir tous les champs";
        }else{
     /* Vérifions si les nombres entrés sont des entiers*/
            if(!is_numeric($_POST['entier1']) || !is_numeric($_POST['entier2']) || !is_numeric($_POST['entier3'])){
                echo "Veuillez saisir des nombres entiers";
            }else{
    /*Faisons la résolution*/
    echo'Solution de l\'équation ' .$A.' X2 + ' .$B. ' X + ' .$C. '<br>';
    $delta = (($B * $B) - (4 * $A * $C));
    if($delta < 0){
        echo "Cette équation n'a pas de solution ";
    }elseif($delta==0){
        echo "Cette équation a une racine double <br>";
        $X0 = -$B / (2*$A);
        echo $X0. '<br>';
    }else{
        echo "Cette équation a deux racines <br>";
        $X1 = -($B-sqrt($delta)) / (2*$A);
        $X2 = -($B+sqrt($delta)) / (2*$A);

        echo $X1. "<br>";
        echo $X2;
    }
               
        
        
            }

        }
    }
        ?>
</body>
</html>