<?php
session_start();
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

    $Titre= $_POST['Titre'];
    $Image = $_POST['photo'];
    $Date= $_POST['Date_de_publication'];
    $Auteur=$_SESSION ['Loginn'];
    $Contenu= $_POST['Contenu'];
    $Extrait=$_POST ['Extrait'];

    try{
      $requete = "INSERT INTO Articles(Titre, Imagee, Date_de_publication, Auteur, Contenu, Extrait) 
               VALUES('$Titre', '$Image', '$Date', '$Auteur', '$Contenu', '$Extrait')";

        $pdo->exec($requete);
        echo "Article ajouté!";
            }
            catch (PDOException $e) {
                echo "Erreur insert". $e->getMessage();
            }
        }
insert_data($pdo);

?>


