<?php
   function connect_to_database (){
      $servername= "localhost";
      $username= "root";
      $password="root";
      $databasename= "AxeL Officiel";

      try{
          $pdo=new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
          return $pdo;
        }

      catch (PDOException $e) {
          echo "Connection failed:". $e->getMessage();
        }
    }
      
  $pdo=connect_to_database();

  include("header.php");

  function envoyer($pdo){
    $Nom= $_POST['Nom_Prénom'];
    $Mail= $_POST['Email'];
    $Mess= $_POST['Messagee'];

        try{
          $requete = "INSERT INTO Contact(Nom_Prénom, Email, Messagee) 
          VALUES('$Nom', '$Mail', '$Mess')";

          $pdo->exec($requete);
          echo "<h2>Message envoyé!</h2>";
            }
         catch (PDOException $e) {
           echo "Erreur insert". $e->getMessage();
            }        
  }
envoyer($pdo);
include("footer.php");