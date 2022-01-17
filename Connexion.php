<?php 
     $user="root";
     $password="";

       try{
          $db = new PDO('mysql:host=localhost;dbname=idc',$user,$password);
       /* echo "connexion reussi";*/
       }
       catch(PDOException $e){
          echo "erreur est :" .$e->getMessage()."<br><br>";
       }
?>