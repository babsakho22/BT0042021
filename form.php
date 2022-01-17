<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/inscription.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I D C</title>
</head>
<body>
            <img id="logo" src="images/logo.png" alt="">
        <div class= "container">
             <h1>Ajouter un Etudiant</h1>
            
        
             <form action="AjoutEtudiant.php" method="post">
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
            

          <hr>
             <div id ="boutton">
             <button name="button" type="submit" class="btn btn-success">Ajouter</button>
             </div>

          </form>
        </div>
</body>
</html>