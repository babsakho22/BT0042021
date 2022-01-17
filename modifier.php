<?php
 require 'Connexion.php';?>
<?php 
 $id= $_GET['id'];

 $sql="SELECT * FROM etudiants WHERE id=:id";
 $preparation = $db->prepare($sql);
 $preparation->execute([':id' => $id]);
 $person = $preparation->fetch(PDO::FETCH_OBJ);
 ?>
 <?php


if (isset($_POST['user']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['genre']) && isset($_POST['niveau'])  && isset($_POST['tel']) && isset($_POST['adresse']) && isset($_POST['mdp']) && isset($_POST['conf'])) {
    $user = $_POST['user'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $genre = $_POST['genre'];
    $niveau = $_POST['niveau'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $mdp = $_POST['mdp'];
    $conf = $_POST['conf'];
        
    $sql = 'SELECT * FROM etudiants WHERE id=:id';

        $preparation = $db->prepare($sql);

        if ($preparation->execute([':Nom_utilisateur' => $user, ':Nom' => $nom, ':Prenom' => $prenom, ':Email' => $email, ':Age' => $age, ':Genre' => $genre, ':Niveau' => $niveau,':Telephone' => $tel, ':Adresse' => $adresse, ':Mot_passe' => $mdp,':conf' => $conf,':id' => $id])) {
            header("location:listeEtudiant.php");
        }

}
    


?>



<?php require 'header2.php' ?>




<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <?php  if (!empty($message)): ?>

                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

             <form action="" method="post">
             <link rel="stylesheet" href="style/modifier.css">
             <div class="users">
                  <input type="text" name= "user" id="us" placeholder="Nom utilisateur" >
            </div>

             <div class="nom">
                  <input type="text" name= "nom" id="nm" placeholder="Nom" >
            </div>

            <div class="prenom">
                  <input type="text" name= "prenom"  id="pre" placeholder="Prenom" >
            </div>

            <div class="email">
                  <input type="text" name= "email"  id="mail" placeholder="E-Mail" >
            </div>

            <div class="age">
                  <input type="number" name= "age" id="ag" placeholder="Age" >
            </div>

            <div class="genre">
                  <input type="text" name= "genre"  id="gen" placeholder="Genre" >
            </div>

            <div class="niveau">
                  <input type="text" name= "niveau"  id="niv" placeholder="Niveau" >
            </div>

            <div class="telphone">
                  <input type="number" name= "tel" id="tel" placeholder="N° Tél" >
            </div>

            <div class="adresse">
                  <input type="text" name= "adresse"  id="add" placeholder="Adresse" >
            </div>
           
            <div class="mot de passe">
                  <input type="password"name= "mdp"  id="mdp" placeholder="Mot de passe" >
            </div>

            <div class=" confirmation">
                  <input type="password"name= "conf"  id="conf" placeholder="Confirmer le mot de passe" >
            </div>
            

             <div id ="boutton">
             <button name="button" type="submit" class="btn btn-success">modifier</button>
             </div>

          </form>
        </div>
        

