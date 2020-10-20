<?php
session_start();
include_once "header.php";
mon_header("IRecycle Page Utilisateur");

/*if (!isset($_SESSION["att"]))
{
    header("location: cnx.php");
}*/

?>
<i class="spinner-grow text-info" role="status"><span class="sr-only">Loading...</span></i>
<h6><b><?php echo $_SESSION['id']; ?></b>: Bienvenue <b><?php echo $_SESSION['username']; ?></b> vos points sont de : <b><?php echo $_SESSION['points']; ?></b>.</h6>
<a href="deconnexion.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-toggle-off"></i> </button></a> </span>

<h1> Recompenses : </h1>


<style>
    .flex-container {
        display: flex;
        justify-content: center;
        background-color: greenyellow;
        height: 100px;
        align-items: center;
    }

    .flex-container>div {
        background-color: #f1f1f1;
        width: 100px;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
    }
</style>
</head>

<body>


    <div class="flex-container">
        <a href="actionReduire.php?id=<?php echo $_SESSION['id']; ?>&points=<?php echo $_SESSION['points']; ?>&re=10" class="btn btn-outline-dark">Reduction -10% ENGIE </a>
        <a href="actionReduire.php?id=<?php echo $_SESSION['id']; ?>&points=<?php echo $_SESSION['points']; ?>&re=20" class="btn btn-outline-dark">Reduction -20% ENGIE</a>
        <a href="actionReduire.php?id=<?php echo $_SESSION['id']; ?>&points=<?php echo $_SESSION['points']; ?>&re=30" class="btn btn-outline-dark">Reduction -30% ENGIE</a>
    </div>



    <?php

    include_once "footer.php";
    mon_footer();
    ?>