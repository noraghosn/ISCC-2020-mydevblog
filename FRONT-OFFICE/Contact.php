<?php
include("header.php");
?>
<html>
<div class="Soustitre">
<h2> <b>Contact </b></h2>
<br>
<br>
<br>
</div>
<div class="Formulaire">
        <form method= "post" action="Contact.php">
           <p> 
              <label for="Nom_Prénom"> Nom/Prénom:</label> 
              <input type="text" name= "Nom_Prénom" id="Nom_Prénom" placeholder="Lucie Dano" style="width: 250px;" style="height: 30px;"/>
            </p>
            <br>
           <p> 
                <label for="Email"> Email:</label> 
               <input type="text" name= "Email" id="Email" placeholder="jijo.got@gmail.com" style="width: 250px;" style="height: 30px;"/>
            </p>
            <br>
           <p>
            <label for="Message"> Votre message:</label>   
            <input type="text" name= "Messagee" id="Message" placeholder="J'aimerais des renseignements..." style="width: 250px;"/>
        </p>
        <br>
            <input type="submit" value="Envoyer">
        </form>
</div>
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

        try{
          $requete = "INSERT INTO Contact(Nom_Prénom, Email, Messagee) 
          VALUES('$Nom', '$Mail', '$Mess')";

          $pdo->exec($requete);
            }
         catch (PDOException $e) {
           echo "Erreur insert". $e->getMessage();
            }        
  }
envoyer($pdo);
include("footer.php");
?>