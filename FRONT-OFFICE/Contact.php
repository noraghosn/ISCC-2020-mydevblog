<?php
include("header.php");
?>
<html>

<h2> <b>Contact </b></h2>
        <form method= "post" action="Contact.php">
           <p> 
              <label for="Nom_Prénom"> Nom/Prénom:</label> 
              <input type="text" name= "Nom_Prénom" id="Nom_Prénom" placeholder="Lucie Dano" style="width: 250px;" style="height: 30px;"/>
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
    $Nom= $_POST['Nom_Prénom'];
    $Mail= $_POST['Email'];
    $Mess= $_POST['Messagee'];

    echo $Mess;

        try{
          $requete = "INSERT INTO Contact(Nom_Prénom, Email, Messagee) 
          VALUES('$Nom', '$Mail', '$Mess')";

          $pdo->exec($requete);
          echo "Contact effectué!";
            }
         catch (PDOException $e) {
           echo "Erreur insert". $e->getMessage();
            }
  }
envoyer($pdo);
include("footer.php");
?>