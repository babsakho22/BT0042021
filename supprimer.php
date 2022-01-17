<?php

    require ('Connexion.php');

    $id = $_GET['id'];

    $sql = 'DELETE FROM etudiants WHERE id=:id';

    $preparation = $db->prepare($sql);

    if ($preparation->execute([':id' => $id])) {
        header('location: listeEtudiant.php');
    }

?>