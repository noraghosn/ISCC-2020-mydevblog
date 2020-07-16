<htmL>
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
<h2> Utilisateurs </h2>
</div>
<ul>
        <?php   

        function utilisateurs($pdo){
            $utilisateurs=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

            foreach ($utilisateurs as $utilisateur){
                $sup = $utilisateur['id'];
                echo '<h3><li>'.$utilisateur["Nom_utilisateur"].'</li></h3>';
                ?>
                <form action="Supprimer_utilisateur.php?id=<?php echo $sup ?>" method= "post">
                <input type="submit" value="Supprimer" /> 
                </form>
                <?php
            }
        }

        utilisateurs($pdo);
    }
        ?>
</ul>
</html>
