<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <!--Formulaire-->
    <form method="POST">
    <label for="number">VEUILLEZ SAISIR DES NUMEROS</label><br><br>

     <!--Utilisation des formulaires dans textarea pour garder les informations en mémoires-->
     <textarea name="num" id="number"><?php if(isset($_POST['num'])){echo $_POST['num'];}?></textarea><br><br>

        <input type="submit" name="valider" value="VALIDER"><br><br> 
</body>
</html>