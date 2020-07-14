<?php
include("header.php");

function connect_to_database (){
  $servername= "localhost";
  $username= "root";
  $password="root";
  $databasename= "Articles Stock";

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

  function insert_data($pdo){

$Titre= $_POST['Titre'];
$Image=$_FILES['photo']['name'];
$Date= $_POST['Date de publication'];
$Auteur=$_POST ['Auteur'];
$Contenu= $_POST['Contenu'];
$Extrait=$_POST ['Extrait'];

$pdo->exec("INSERT INTO Articles VALUES($Titre, $Image , $Date , $Auteur, $Contenu, $Extrait)");

echo $Titre;


/*
try{
  $requete = "INSERT INTO Articles(Titre, Imagee, Date_de_publication, Auteur, Contenu, Extrait) 
  VALUES($Titre, $Image, $Date , $Auteur, $Contenu, $Extrait)";

$pdo->exec($requete);
echo "success";
}
catch (PDOException $e) {
  echo "Erreur insert". $e->getMessage();
}
}

$req = 'INSERT INTO Articles(Titre, Image, Date de publication, Auteur, Contenu, Extrait) 
VALUES(:Titre, :Image, :Date de publication, :Auteur, :Contenu, :Extrait)';
$pdo->execute(array(
	'Titre' => $Titre,
	'Image' => $Image,
	'Date de publication' => $Date,
	'Auteur' => $Auteur,
	'Contenu' => $Contenu,
	'Extrait' => $Extrait
	));

  echo $Titre;*/

  }
insert_data($pdo);

?>
