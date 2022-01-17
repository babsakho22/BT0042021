<?php
include('Connexion.php');

try{
    if (isset($_POST['button'])){
        $user=$_POST['user'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $genre=$_POST['genre'];
        $niveau=$_POST['niveau'];
        $tel=$_POST['tel'];
        $adresse=$_POST['adresse'];
        $mdp=$_POST['mdp'];
        $conf=$_POST['conf'];
        $message="";
    }

    $sql= "INSERT INTO `etudiants`(`ID`,`Nom_utilisateur`,`Nom`,`Prenom`,`Email`,`Age`,`Genre`,`Niveau`,`Tel`,`Adresse`,`Mot_passe`)VALUES ('',?,?,?,?,?,?,?,?,?,?)";
    $db->prepare($sql)->execute([$user,$nom,$prenom,$email,$age,$genre,$niveau,$tel,$adresse,$mdp]);  
header('location:login.php');
    
}catch(\throwable $e){
    echo "erreur:" .$e->getMessage()."<br>";
}

?>


<?php require 'header.php' ?>