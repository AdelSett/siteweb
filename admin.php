<?php
session_start();
include_once "header.php";
require "connexion.php";
mon_header("IRecycle Page Utilisateur");

if ($_SESSION['level'] == "admin") {
} else {
    session_destroy();
    header("location:cnx.php");
}

?>
<script src="function.js"></script>

<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" onclick="AdminListe()">Liste </button>
    <button type="button" class="btn btn-secondary" onclick="AdminAjouter()">Ajouter</button>
</div>

<div id="liste">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Designation</th>
            <th>Latidude</th>
            <th>Longitude</th>
            <th>Options</th>
        </tr>

        <?php
        $Result = mysqli_query($connexion, "select * from poubelles");

        foreach ($Result as $ligne) {

        ?> <div>
                <tr>
                    <td> <?php echo $ligne['id'] ?> </td>
                    <td> <?php echo $ligne['desiniation'] ?> </td>
                    <td> <?php echo $ligne['latitude'] ?> </td>
                    <td> <?php echo $ligne['longitude'] ?> </td>
                    <td>
                        <a class="btn btn-primary" onclick="AdminEdit()"><i class="fa fa-edit"></i></a>
                        <a href="actionsupprimpoubelle.php?id=<?php echo $ligne['id'] ?>" class="btn btn-primary" onclick="return confirm('Etes-vous sûr ?')"> <i class="fas fa-times-circle"></i>
                        </a>
                    </td>
                </tr>
            </div>
        <?php
        }
        ?>
    </table>
</div>

<div id="ajouter">
    <!-- Default form subscription -->
    <form method="post" class="text-center border border-light p-5" action="ajouterpoubelle.php">

        <p class="h4 mb-4">Ajouter une poubelle</p>
        <a href="https://www.coordonnees-gps.fr/">Récupérer les coordonnées ici</a>

        <!-- Name -->
        <input type="text" id="newdesignation" name="newdesignation" class="form-control mb-4" placeholder="Désignation">

        <!-- Email -->
        <input type="text" id="newlatitude" name="newlatitude" class="form-control mb-4" placeholder="Latitude">

        <input type="text" id="newlongitude" name="newlongitude" class="form-control mb-4" placeholder="Longitude">

        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Ajouter</button>


    </form>
    <!-- Default form subscription -->
</div>