<?php
include("header.php");

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

include("footer.php");
?>