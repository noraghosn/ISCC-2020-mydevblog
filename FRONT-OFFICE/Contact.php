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
        <form method= "post" action="Envoi_contact.php">
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
include("footer.php");
?>