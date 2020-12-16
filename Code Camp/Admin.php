<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />  
    <title>Administration Marché</title>
  </head>
  <body>
  <div id="back">
    <div id="containeradmin">
      <form action="insertion.php" method="post">
        <h1>Admin création d'un nouveau marché</h1>
        <br><label><b>Nom du Marché</b></label>        
        <input type="text" placeholder="Entrer le nom du Marché" name="Marchename" required>
        <br><br><label><b>var du Marché</b></label>
        <input type="text" placeholder="Entrer un mot clef unique à ce Marché" name="Marchevar" required>
        <br><br><label><b>lien du Marché</b></label>
        <input type="text" placeholder="Entrer le lien vers le Marché" name="Marchelink" required>
        <br><br><label><b>Adresse du Marché</b></label>
        <input type="text" placeholder="Entrer l'Adresse du Marché" name="MarcheAdd" required>
        <br><br><label><b>Position du Marché</b></label><br>
        <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Cliquer ici pour récupérer les coordonnées de votre Adresse</a>
        <input type="text" placeholder="Entrer la longitude du Marché" name="Marchelong" required>
        <input type="text" placeholder="Entrer la latitude du Marché" name="Marchelat" required>
      <br><br><input type="submit" id='admin' value='ajouter le nouveau produit au site' >
</form>
      </div>
  </div>
  </body>
  

