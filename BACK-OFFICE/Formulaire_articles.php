<?php
include("header.php");

function connect_to_database (){
    $servername= "localhost";
    $username= "root";
    $password="root";
    $databasename= "AxeL Officiel";

      try{
          $pdo=new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
          echo "Connected";
          return $pdo;
        }

      catch (PDOException $e) {
          echo "Connection failed:". $e->getMessage();
        }
      }
  
$pdo=connect_to_database();

function insert_data($pdo){

    $Titre= $_POST['Titre'];
    $Image = file_get_contents('logo_epitech.png');
    $Date= $_POST['Date_de_publication'];
    $Auteur=$_POST ['Auteur'];
    $Contenu= $_POST['Contenu'];
    $Extrait=$_POST ['Extrait'];

    try{
      $requete = "INSERT INTO Articles(Titre, Imagee, Date_de_publication, Auteur, Contenu, Extrait) 
               VALUES('$Titre', '$Image', '$Date', '$Auteur', '$Contenu', '$Extrait')";

        $pdo->exec($requete);
        echo "success";
            }
            catch (PDOException $e) {
                echo "Erreur insert". $e->getMessage();
            }
        }
insert_data($pdo);

?>




