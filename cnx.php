<!DOCTYPE html>
<html>
<head>
	<title>Login Irecycle</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Connexion à votre compte :<br/> IRecycle</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Erreur ,Nom ou mot de passe incorrecte</div>";
		}
	}
	?>
 
	<div class="1_login">
		<p class="2_login">Remplir les champs : </p>
 
		<form action="cek_login.php" method="post">
			<label>Nom de Compte</label>
			<input type="text" name="username" class="form_login" placeholder="Votre nom de compte ..." required="required">
 
			<label>Mot de Passe</label>
			<input type="password" name="password" class="form_login" placeholder="Votre mot de passe ..." required="required">
 
			<input type="submit" class="tombol_login" value="CONNEXION">
 
			<br/>
			<br/>

		</form>
		
	</div>
 
 
</body>
</html>