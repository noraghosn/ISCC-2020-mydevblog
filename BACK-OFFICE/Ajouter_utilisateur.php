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

function insert_data($pdo){

    $Nm=$_POST['Nom_utilisateur'];
    $Login=$_POST['Loginn'];
    $mdp=$_POST ['Mot_de_passe'];

    try{
      $requete = "INSERT INTO utilisateurs(Nom_utilisateur, Loginn, Mot_de_passe) 
               VALUES('$Nm', '$Login', '$mdp')";

        $pdo->exec($requete);
        echo "<h3>Utilisateur ajouté!</h3>";
            }
            catch (PDOException $e) {
                echo "Erreur insert". $e->getMessage();
            }
        }
insert_data($pdo);
  ?>