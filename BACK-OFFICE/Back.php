<!DOCTYPE html>
<html>
<body>
<?php
include("header.php");
        if ($_GET['page']== Ajout_article)
        {
            echo '<h1> Ajout_article </h1>';
            include ("Ajout_article.php");
        }
        elseif ($_GET['page']== Utilisateurs)
        {
            echo '<h1> Utilisateurs <h1>';
            include ('Utilisateurs.php');
        }
    ?>
</body>
</html>
