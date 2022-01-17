<?php 
     $user="root";
     $password="";

       try{
          $sdb=new PDO('mysql:host=localhost;dbname=IDC',$user,$password);
        echo "connexion reussi";
       }
       catch(PDOException $e){
          echo $e->getMessage();
       }
?>