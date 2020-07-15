<?php
include("header.php");
?>
<html>

<h2> <b>Contact </b></h2>
        <form method= "post" action="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Contact.php">
           <p> 
              <label for="Nom Prénom"> Nom/Prénom:</label> 
              <input type="text" name= "Nom Prénom" id="Nom Prénom" placeholder="Lucie Dano" style="width: 250px;" style="height: 30px;"/>
            </p>
           <p> 
                <label for="Email"> Email:</label> 
               <input type="text" name= "Email" id="Email" placeholder="jijo.got@gmail.com" style="width: 250px;" style="height: 30px;"/>
            </p>
           <p>
            <label for="Message"> Votre message:</label>   
            <input type="text" name= "Message" id="Message" placeholder="J'aimerais des renseignements..." style="width: 250px;"/>
        </p>
            <input type="submit" value="Envoyer">
        </form>

</html>

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

  function envoyer($pdo){

      $message=$pdo->query("SELECT * FROM Contact")->fetchAll();
      
      /*$Login= $_POST['Login'];
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

include("footer.php");*/
?>