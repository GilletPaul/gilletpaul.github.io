<?php

//connection a la base de donnée
$objetPdo = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');

//préparation de la requète d'insertion
$pdoStat = $objetPdo->prepare('INSERT INTO marche VALUES (:title, :variable, :link, :adresse, :long, :lat)');

//on lie chaque marqueur a une valeur
$pdoStat->bindValue(':title', $_POST['Marchename'], PDO::PARAM_STR);
$pdoStat->bindValue(':variable', $_POST['Marchevar'], PDO::PARAM_STR);
$pdoStat->bindValue(':link', $_POST['Marchelink'], PDO::PARAM_STR);
$pdoStat->bindValue(':adresse', $_POST['MarcheAdd'], PDO::PARAM_STR);
$pdoStat->bindValue(':long', $_POST['Marchelong'], PDO::PARAM_STR);
$pdoStat->bindValue(':lat', $_POST['Marchelat'], PDO::PARAM_STR);

//executer la requete
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = "Le marché a bien été ajouter";
}
else{
    $message = "echec de l'insertion";
}
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />  
    <title>Administration Marché</title>
  </head>
  <body>
      <h1>Insertion des Marché</h1>
      <p><?php echo $message; ?></p>
      <br><br>
      <a href='index.php'> Retourner à la map<br/<br/>
      <a href='Admin.php'> Retourner à la page Admin  <br/<br/>
</body>
</html>