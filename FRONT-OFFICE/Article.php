<html>
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

$id=$_GET['id'];
$articles=$pdo->query("SELECT * FROM Articles WHERE id=$id");
while ($données = $articles->fetch())
{
    echo '<h3><li>'.$données['Titre'].'</li></h3>';
    echo '<p>'.$données['Contenu'].'</p>';
    ?>
    <img src= <?php echo $données['Imagee'] ?> width="700" height="400">
    <?php
}

include("footer.php");
?>
</html>
