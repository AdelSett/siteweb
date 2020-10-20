<?php
function mon_header($title)
{

?>

        <!doctype html>
        <html lang="fr">

        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible">
                <title>IRecycle</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

                <style>
                        body {
                                background-image: url('bg.jpg');
                        }
                </style>
        </head>

        <body>

                <nav class="navbar navbar-light" style="background-color: greenyellow;">
                        <!-- Navbar content -->
                        <a href="index.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-dumpster-fire"></i> </button></a> </span>
                        <a href="map.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-map-signs"></i> </button></a> </span>
                        <a href="recomp.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-gifts"></i> </button></a> </span>

                        <?php
                        if ($_SESSION['level'] == "admin") {
                        ?> <a href="admin.php"><button type="button" class="btn btn-outline-dark"> <i class="fas fa-hammer"></i> </button></a> </span>
                        <?php
                        }
                        ?>


                </nav>

        <?php } ?>