<?php
session_start();
include_once "header.php";
mon_header("IRecycle Page Utilisateur");

/*if (!isset($_SESSION["att"]))
{
    header("location: cnx.php");
}*/

?>

    <h1> <center>Votre code de reduction est : <?php  echo(rand() . "<br>");  ?> </h1></center>



    <style>
        .flex-container {
            display: flex;
            justify-content: center;
            background-color: greenyellow;
            height: 100px;
            align-items: center;
        }

        .flex-container > div {
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
    <a href="index.php" class="btn btn-outline-dark">Retour à l'accueil  </a>

</div>



<?php

include_once "footer.php";
mon_footer();
?>