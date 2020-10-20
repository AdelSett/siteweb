<?php
session_start();
include_once "header.php";
require "connexion.php";
mon_header("IRecycle Page Utilisateur");

$desiniation = filter_input(INPUT_POST, 'newdesignation');
$latitude = filter_input(INPUT_POST, 'newlatitude');
$longitude = filter_input(INPUT_POST, 'newlongitude');

$request = "INSERT INTO poubelles (desiniation, latitude, longitude) VALUES ('$desiniation', '$latitude', '$longitude')";

if (mysqli_query($connexion, $request)) {
    echo "La poubelle a été ajouter avec succès.";
} else {
    echo "ERROR:  $request. " . mysqli_error($connexion);
}

header('location: admin.php');
