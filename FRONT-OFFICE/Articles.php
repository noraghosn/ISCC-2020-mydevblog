<?php
include("header.php");
    function connect_to_database (){
        $servername= "localhost";
        $username= "root";
        $password="root";
        $databasename= "Articles Stock";

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
    ?>
    <ul>
        <?php   

        function articles($pdo){
            $articles=$pdo->query("SELECT * FROM Articles")->fetchAll();
            $articles = array_reverse($articles);
            foreach ($articles as $article){
                echo '<h3><li>'.$article['Titre'].'</li></h3>';
                echo '<p>'.$article['Extrait'].'</p>';
            }
        }

        articles($pdo);
        include("footer.php");
        ?>