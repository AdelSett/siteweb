<?php
session_start();
include_once "header.php";
mon_header("IRecycle Page Utilisateur");

/*
if (!isset($_SESSION["att"]))
{
    header("location: cnx.php");
}*/
$mysqli = new mysqli('localhost', 'root', '', 'workshop');
$resu = $mysqli->query("SELECT id FROM poubelles ");

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
<h1> ID Code Poubelle : </h1>
<div align="center">
    <form action="poubelle.php" method="post">
        Code LIVE : <input type="text" name="id" id="id" />
        <input type="submit">
    </form>
</div>
<img src="trash.jpg" width="600" height="500" alt="Poubelle GIF" class="responsive">
<?php
include_once "footer.php";
mon_footer();
?>