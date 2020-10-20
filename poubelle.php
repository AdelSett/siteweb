<?php

session_start();
include_once "header.php";
mon_header("IRecycle Page Utilisateur");

$id = filter_input(INPUT_POST, "id");
require "connexion.php";

$Result = mysqli_query($connexion, "select * from poubelles");


$Number = mysqli_num_rows($Result);
while ($liste = mysqli_fetch_assoc($Result)) {
    if ($liste['id'] == $id) {
        echo 'Poubelle connecté :  ';
        echo $liste['desiniation'];
    } else {
        // header('location: index.php');
    }
};

?>
<style>
    .responsive {
        width: 100%;
        max-width: 800px;
        height: auto;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<i class="spinner-grow text-info" role="status"><span class="sr-only">Loading...</span></i>
<h6>- Bienvenue <b><?php echo $_SESSION['username']; ?></b> vos points sont de : <b><?php echo $_SESSION['points']; ?></b>.</h6>

<a href="deconnexion.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-toggle-off"></i> </button></a> </span>
<h1> Veuillez disposer de vos déchets dans la poubelle : </h1>
<img src="gif.gif" width="600" height="500" alt="Poubelle GIF" class="responsive">
<?php
include_once "footer.php";
mon_footer();
?>