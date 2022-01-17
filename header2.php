<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/header2.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <header>
    <div class="entete">
            <button onclick="window.location.href ='login.php';" id= "deconnecter" >Déconnexion </button>

            <a  href="">Blog</a>
            <i class="fa fa-phone"><span>33 890 10 20<span></i>
        </div>    
        <nav>
            <div id="logo">
            <img  src="images/LOGO.png" alt="logo">
            </div>
            <div class="idc">
               <h1>I D C</h1>
            </div>
            <ul>
                <li><a href="acceuil2.php">Acceuil<i class="fa fa-angle-down"></i></a></li>
                <li ><a href="">Gestion User<i class="fa fa-angle-down"></i></a>
                   <ul class="sousMenu">
                        <li><a href="listeEtudiant.php">Liste Etudiants</a></li>
                        <li><a href="form.php">Ajouter Etudiants</a></li>
                    </ul>
                </li>
                <li ><a href="">Formation<i class="fa fa-angle-down"></i></a>
                 <ul class="sousMenu">
                     <li><a href="">BTS</a></li>
                     <li><a href="">Licence</a></li>
                     <li><a href="">Master</a></li>
                     
                 </ul>
                </li>
                <li><a href="">A Propos<i class="fa fa-angle-down"></i></a></li>
            </ul>
            
            
        </nav>
    </header>
</body>
</html>