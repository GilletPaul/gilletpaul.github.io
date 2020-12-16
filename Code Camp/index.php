<!DOCTYPE html>
<head>
<title>Map Marché</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7.3/leaflet.css" />
<script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7.3/leaflet.js"></script>
<style>
#map {width: 90%; height:900px; margin: auto; }
</style>
</head>
<body>
  <div id="map"></div>
<script>



  //Réglage de la map
var map = L.map('map', {
                 center: [48.85671807617654, 2.3517522948411584],
                 zoom: 13 });

                 


  // fond carte
var baselayers = {
     Thème1: L.tileLayer('http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png'),
     Thème2: L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}')}
;baselayers.Thème2.addTo(map);




  // popup
   var customOptions = {'maxWidth': '500', 'className' : 'custom'}




  // Icone sur la map
    var icon = L.icon({
    iconUrl: 'marché.png',
    iconSize: [60, 60] }); 
  



  //Affichage des différents marchés
    <?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM marche');
while ($donnees = $reponse->fetch())
{
?> 
  var popup = "<b><?php echo $donnees['Title']; ?><br><?php echo $donnees['Adresse']; ?><br><a href='<?php echo $donnees['Link']; ?>'> ▶ Cliquez ICI ◀<br/<br/>";
  var <?php echo $donnees['variable']; ?> =  L.marker([<?php echo $donnees['Longitude']; ?>, <?php echo $donnees['Lat']; ?>],{icon: icon}).bindPopup(popup,customOptions);
  <?php
}
$reponse->closeCursor();
?>




 // Gestion des marqueurs avec la bbd
  var marqueurs = {
    <?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM marche');
while ($donnees = $reponse->fetch())
{
?> 
"<?php echo $donnees['Title']; ?>": <?php echo $donnees['variable']; ?>, 
<?php
}
$reponse->closeCursor();
?>
};




  //Affichage des marqueurs 
L.control.layers(baselayers, marqueurs, {position: 'topright', collapsed: false, autoZIndex: true}).addTo(map);
L.control.scale().addTo(map);

  


  </script> 
</body>
</html>