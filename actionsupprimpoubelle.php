<?php
$id = filter_input(INPUT_GET, "id");
require "connexion.php";

$sql = "DELETE FROM poubelles WHERE id='$id'";

if (mysqli_query($connexion, $sql)) {
} else {
    echo "ERROR:  $sql. " . mysqli_error($connexion);
}

header('location: admin.php');
