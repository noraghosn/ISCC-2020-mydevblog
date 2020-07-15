<?php
include("header.php");
?>
<form method= "post" enctype="multipart/form-data" action="Formulaire_articles.php">
           <p> 
              <label for="Titre"> Titre:</label> 
              <input type="text" name= "Titre" id="Titre" placeholder="Concert incroyable..." style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Image" > Image:</label> 
              <input type="file" name="photo" id="photo" style="width: 250px;" style="height: 30px;"/> 
            </p>
            <p> 
              <label for="Date de publication"> Date de publication:</label> 
              <input type="date" name= "Date_de_publication" id="Date de publication" placeholder="XXXX-XX-XX" style="width: 250px;" style="height: 30px;"/>
            </p>
            <p> 
              <label for="Auteur"> Auteur:</label> 
              <input type="text" name= "Auteur" id="Auteur" style="width: 250px;" style="height: 30px;"/>
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
