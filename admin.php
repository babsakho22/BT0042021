<?php
	/*session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:acceuil.php");
		exit();
	}
?>

<?php
include('Connexion.php');
$sql = 'SELECT * FROM etudiants';

$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll();*/
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
            $message="<li>Mauvais login ou mot de passe!</li>";
        }
        
		else{
			header("location:acceuil.php");
		}
        
	}
?>

<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>

