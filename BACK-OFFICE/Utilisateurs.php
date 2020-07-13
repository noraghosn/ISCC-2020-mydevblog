<?php
    function connect_to_database (){
        $servername= "localhost";
        $username= "root";
        $password="root";
        $databasename= "Articles Stock";

        try{
            $pdo=new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

            echo "Connected successfully <br>";
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

        function utilisateurs($pdo){
            $utilisateurs=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

            foreach ($utilisateurs as $utilisateur){
                echo '<h3><li>'.$utilisateur["Nom d'utilisateur"].'<li></h3>';
            }
        }

        utilisateurs($pdo);
        ?>
</ul>