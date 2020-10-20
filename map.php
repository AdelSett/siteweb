<?php
session_start();
include_once "header.php";
include 'connexion.php';
mon_header("IRecycle Page Utilisateur");

$Result = mysqli_query($connexion, "select * from poubelles");
$ListePb = [];
$Number = mysqli_num_rows($Result);
while ($liste = mysqli_fetch_assoc($Result)) {

    array_push($ListePb, ['id' => $liste['id'], 'desc' => $liste['desiniation'], 'lat' => $liste['latitude'], 'long' => $liste['longitude']]);
    //echo "<br> id = {$liste['id']}, desc = {$liste['desiniation']}, lat = {$liste['latitude']}, long = {$liste['longitude']}";
};
$data = json_encode($ListePb);
echo "<script> window.onload = function() {PBListe($data, $Number);}; </script>";
?>

<link rel="stylesheet" href="stylemap.css">
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJl-oa7NohsMtqeteZP2w6SRM1qs5vJu4&callback=initMap">
</script>
<script src="map.js"></script>
<h1>Geocalisation des poubelles connectées</h1>
<div id="map"></div>