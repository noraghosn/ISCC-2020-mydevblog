<!DOCTYPE html>
<html>
<body>
<?php
include("header.php");
        if ($_GET['page'] == Accueil)
        {
            echo '<h1> Accueil </h1>';
            include ("Accueil.php");
        }
        elseif ($_GET['page']==Articles)
        {
            echo '<h1> Articles </h1>';
            include ("Articles.php");
        }
        elseif ($_GET['page']== Article)
        {
            echo '<h1> Article <h1>';
            include ("Article.php");
        }
        elseif ($_GET['page']== Contact)
        {
            echo '<h1> Contact <h1>';
            include ('Contact.php');
        }

    include("footer.php");
    ?>
</body>
</html>


    