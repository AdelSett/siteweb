<?php
session_start();
$points = filter_input(INPUT_GET, "points");
$id = filter_input(INPUT_GET, "id");
$re = filter_input(INPUT_GET, "re");
$points = $points + 0;
$points = $points - $re;

var_dump($points);
var_dump($id);
require_once "config.php";
$db = new PDO(
    "mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASEDEDONNEES,
    Config::UTILISATEUR,
    Config::MOTDEPASSE
);

$r = $db->prepare("update user set points=:points"
    . " where id=:id");


$r->bindValue(":id", $id);
$r->bindValue(":points", $points);
$r->bindValue(":re", $re);
$_SESSION['points'] = $points;
$r->execute();
//var_dump($_SESSION['points']);
$r->debugDumpParams();
header('location: recomp1.php');
