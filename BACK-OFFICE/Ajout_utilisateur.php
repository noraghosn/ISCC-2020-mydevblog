<?php
include("header.php");
?>
<form method= "post" action="Ajout_utilisateur.php">
           <p> 
              <label for="Nom d'utilisateur"> Nom d'utilisateur:</label> 
              <input type="text" name= "Nom d'utilisateur" id="Nom d'utilisateur" placeholder="n_gsn" style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Loginn"> Loginn:</label> 
              <input type="text" name="Loginn" id="Loginn" style="width: 250px;" style="height: 30px;"/> 
            </p>
            <p> 
              <label for="Mot de passe"> Mot de passe:</label> 
              <input type="text" name= "Mot de passe" id="Mot de passe" placeholder="2sdr..." style="width: 250px;" style="height: 30px;"/>
            </p>
            <input type="submit" value="Envoyer">
</form>