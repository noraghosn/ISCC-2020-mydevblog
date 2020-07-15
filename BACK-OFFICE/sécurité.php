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

function afficher($pdo){

$users=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

$Login= $_POST['Login'];
$Password=$_POST ['Password'];

$b=0;
foreach ($users as $user) {

if ($Login == $user ['Loginn'])
{
if ($Password== $user['Mot de passe'])
{   include("header.php");
    echo "Vous êtes connectés.";
    $b=1;
}

}
}
if ($b==O){
echo "<p> Mauvais couple identifiant / mot de passe. </p>";
echo '<a href="Connexion.php"> Connexion</a>';
}
}

afficher($pdo);
?>
