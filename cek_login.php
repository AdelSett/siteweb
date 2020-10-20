<?php

session_start();

include 'connexion.php';


$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($connexion, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	if ($data['level'] == "admin") {

		$_SESSION['level'] = "admin";
		$data['points'] = 9999999;
	} else if ($data['level'] == "user") {

		$_SESSION['level'] = "user";
	} else {

		header("location:cnx.php");
		exit;
	}

	$_SESSION['username'] = $username;
	$data['points'] = $data['points'] + 0;
	$_SESSION['points'] = $data['points'];
	$_SESSION['id'] = $data['id'];
	//var_dump($_SESSION['points']);
	//exit;

	header("location:index.php");
} else {
	header("location:cnx.php");
}
