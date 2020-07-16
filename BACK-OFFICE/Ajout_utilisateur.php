<html>
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
<div class="Soustitre">
<h2> Ajouter un utilisateur </h2>
</div>
<form method= "post" action="Ajouter_utilisateur.php">
           <p> 
              <label for="Nom_utilisateur"> Nom d'utilisateur:</label> 
              <input type="text" name= "Nom_utilisateur" id="Nom_utilisateur" placeholder="n_gsn" style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Loginn"> Loginn:</label> 
              <input type="text" name="Loginn" id="Loginn" style="width: 250px;" style="height: 30px;"/> 
            </p>
            <p> 
              <label for="Mot de passe"> Mot de passe:</label> 
              <input type="text" name= "Mot_de_passe" id="Mot de passe" placeholder="2sdr..." style="width: 250px;" style="height: 30px;"/>
            </p>
            <input type="submit" value="Envoyer">
</form>
<?php
      }
?>
</html>