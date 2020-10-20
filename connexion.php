<?php 
$connexion = mysqli_connect("localhost","root","","workshop");
 

if (mysqli_connect_errno()){
	echo "Connection échouée : " . mysqli_connect_error();
}
 
?>