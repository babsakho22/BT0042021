<?php
session_start();
	@$login=$_POST["ident"];
	@$pass=$_POST["mdp"];
	@$valider=$_POST["btn"];
	$message="";
	if(isset($valider)){
		include("Connexion.php");
		$res=$db->prepare("select * from etudiants where Nom_utilisateur=? and Mot_passe=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($login,$pass));
		$tab=$res->fetchAll();
		if(count($tab)==0){
            $message="<p style='color:red; font-size:20px;margin-top:5px'><strong>Mauvais login ou mot de passe!</strong></p>";
        }
        
		else{
			header("location:acceuil2.php");
		}
        
	}
  ?>


<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>I D C</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style/login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    
    <div class="container">
        <img id="logo" src="images/logo.png" alt="">
      <h1>Institut De Codage</h1>
      <div class ="fond-blanc">
          <h2>Connexion</h2>

        <form action="" method="post">

        <div class="idt">
          <input type="text" name="ident" class="form-control" id="ident" placeholder="  Identification" >
          <i class="fas fa-user"></i>
        </div>

        <div class="mps">
            <input type="password"name="mdp" class="form-control" id="mdp" placeholder="   Mot de passe">
            <i class="fas fa-lock"></i> 
          </div>
        
        <div class="check">
            <input class="form-check-input" type="checkbox" name="remember"> <div id= remember> Se souviens de moi ?</div>
          </label>
        </div>

        <button type="submit"name="btn" class="btn">Connexion</button> <br>
       <p><a href="verifie.php">Mot de passe oublier ?</a></p>
        <p>Vous êtes nouveau ici ?<strong><a href="inscription.php"> S’inscrire ?</a>  </strong> </p>
    </div>
      </form>
      <?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
    </div>
    
    </body>
    </html>


    