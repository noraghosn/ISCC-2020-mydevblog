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

            echo "Connected successfully <br>";
            return $pdo;
        }

        catch (PDOException $e) {
            echo "Connection failed:". $e->getMessage();
        }
    }
    $pdo=connect_to_database();

    function suppr_data($pdo,$sup){
    try{
        echo $sup;
        $requete= "DELETE FROM utilisateurs
        WHERE Loginn = '$sup' ";
        $pdo->exec($requete);
        echo "success";
    }
    catch (PDOException $e) {
        echo "Erreur insert". $e->getMessage();
    }
}
?>

<ul>
        <?php   

        function utilisateurs($pdo){
            $utilisateurs=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

            foreach ($utilisateurs as $utilisateur){
                $sup = $utilisateur['Loginn'];
                echo '<h3><li>'.$utilisateur["Nom d'utilisateur"].'</li></h3>';
                ?>
                <form method= "post" action="Utilisateurs.php">
                <input type="button" value="NEXT"  onclick="document.write('<?php suppr_data($pdo,$sup) ?>');" /> 
                </form>
                <?php
            }
        }

        utilisateurs($pdo);

        ?>
</ul>
