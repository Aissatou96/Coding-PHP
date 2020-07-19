 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Exercice6</title>
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
         
         <!-- ============================================= -->
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
    <form method="POST">
        <fieldset>
            <legend>CALCUL DU NOMBRE DE DIVISEURS</legend>
    <label for="n">Saisir un entier positif:</label>
        <input type="text" id="n" name="entier"><br><br>

         <input type="submit" name="valider" value="Afficher">
         </fieldset>
    </form>

<!--Traitement-->
<?php
if (isset($_POST['valider'])){
    $n = $_POST['entier'];

    if (empty($_POST['valider'])){
        if($n>=0){
            for($i=2;$i<$n;$i++){
                if($n%$i==0){
                    $resultat = $i;
                    echo $resultat. '<br>';
                }
                
            }
        }else{
            echo "Veuillez entrer un nombre positif";
        }
    }
}
?>
</body>
</html>