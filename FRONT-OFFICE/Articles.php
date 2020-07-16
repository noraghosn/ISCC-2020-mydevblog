<html>
<?php
include("header.php");
?>
<div class="Soustitre">
<h2> <b>Articles </b></h2>
</div>
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
                $nombre_article=$article['id'];
                ?>

                <a class="article" href="Article.php?page=Article&id=<?php echo $nombre_article; ?>"> Lire la suite </a>
                <?php
            }
        }

        articles($pdo);
        include("footer.php");
        ?>
 </ul>
 </html>