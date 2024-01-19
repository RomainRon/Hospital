<?php

require_once "connexion.php";

?>

<?php
if (
    !empty($_POST['firstname'])
    && !empty($_POST['lastname'])
    && !empty($_POST['birthdate'])
    && !empty($_POST['phone'])
    && !empty($_POST['mail'])
) {
    // Enregistrer en BDD

    //Etape 2 Créer la requete SQL

    $sql = "INSERT INTO `patients`(`firstname`, `lastname`, `birthdate`, `phone`, `mail`) VALUES ('"
        . $_POST['firstname'] . "', '"
        . $_POST['lastname'] . "', '"
        . $_POST['birthdate'] . "', '"
        . $_POST['phone'] . "', '"
        . $_POST['mail'] . "')";
    $connexion->query($sql);

    echo "donnees enregistres";
} else {

    echo "ne pas valide";
}

?>