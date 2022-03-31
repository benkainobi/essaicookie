<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
     if(isset($_POST['nom'])){
         setcookie("Nom",$_POST['nom'],time()+3600);
         echo 'bonjour '.$_COOKIE["Nom"];
     }
     else{
    ?>
    <form method="POST">
        <input type="text" name="nom" id="nom">
        <input type="text" name="couleur" id="couleur">
        <button type="submit">Enregistrer</button>
    </form>
    <?php
    }
    ?>
</body>
</html>