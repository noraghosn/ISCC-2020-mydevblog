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

function vérification($pdo){

  $users=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();
  
  $Login= $_SESSION['Loginn'];
  $Password= $_SESSION['Mot_de_passe'];


  $b=0;
  foreach ($users as $user) {
  
  if ($Login == $user ['Loginn'])
  {
  if ($Password== $user['Mot_de_passe'])
  {   
      $b=1;
  }
  
  }
  }
  if ($b==O){
  echo '<a href="Connexion.php"> Connexion</a>';
  }
  return $b;
  }
  
  $b=vérification($pdo);

if ($b==1){


include("header.php");
?>
<form method= "post" enctype="multipart/form-data" action="Formulaire_articles.php">
           <p> 
              <label for="Titre"> Titre:</label> 
              <input type="text" name= "Titre" id="Titre" placeholder="Concert incroyable..." style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Image" > Image:</label> 
              <input type="text" name="photo" id="photo" style="width: 250px;" style="height: 30px;"/> 
            </p>
            <p> 
              <label for="Date de publication"> Date de publication:</label> 
              <input type="date" name= "Date_de_publication" id="Date de publication" placeholder="XXXX-XX-XX" style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Contenu"> Contenu:</label> 
              <input type="text" name= "Contenu" id="Contenu" style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Extrait"> Extrait:</label> 
              <input type="varchar(300)" name= "Extrait" id="Extrait" placeholder="x07..." style="width: 250px;" style="height: 30px;"/>
            </p>
            <input type="submit" value="Envoyer">
</form>
<?php
}
?>