<?php

session_start();
include_once "header.php";
mon_header("IRecycle Page Utilisateur");

?>
    <i class="spinner-grow text-info" role="status"><span class="sr-only">Loading...</span></i> <h6>- Bienvenue <b><?php echo $_SESSION['username']; ?></b> vos points sont de : <b><?php echo $_SESSION['points']; ?></b>.</h6>

    <a href="deconnexion.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-toggle-off"></i> </button></a> </span>
    <h1> Poubelle : </h1>






<?php
include_once "footer.php";
mon_footer();
?>