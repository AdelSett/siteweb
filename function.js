function AdminAjouter() {
    $("#liste").css("display", "none");
    $("#ajouter").css("display", "block");
    $("#edite").css("display", "none");
}

function AdminListe() {
    $("#ajouter").css("display", "none");
    $("#liste").css("display", "block");
    $("#edite").css("display", "none");
}

function AdminEdit() {
    $("#ajouter").css("display", "none");
    $("#liste").css("display", "none");
    $("#edite").css("display", "block");
}