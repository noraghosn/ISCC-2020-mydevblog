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
    $sup= $_GET['id'];
    $pdo=connect_to_database();
    suppr_data($pdo,$sup);

function suppr_data($pdo,$sup){
    try{
        $requete= "DELETE FROM utilisateurs
        WHERE id = '$sup' ";
        $pdo->exec($requete);
        echo "<h3>Utilisateur supprimé!</h3>";
    }
    catch (PDOException $e) {
        echo "Erreur insert". $e->getMessage();
    }
}
?>