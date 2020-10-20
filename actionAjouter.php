<?php

$points = filter_input(INPUT_POST, "points");

$id = filter_input(INPUT_POST, "id");
require_once "config.php";

$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
    , Config::UTILISATEUR, Config::MOTDEPASSE);

$r = $db->prepare("update workshop set points=:points+1"
    . " where id=:id");

$r->bindParam(":id", $id);
$r->bindParam(":points", $points);


$r->execute();
var_dump($id, $points);
$r->debugDumpParams();
header('location: index.php');