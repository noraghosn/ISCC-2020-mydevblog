<?php
    include("header.php");
    echo "<h3> À propos...</h3>";
    echo "<p> AxeL est une jeune chanteuse française aux influences électro-soul.
    Après avoir suivi avec succès le cursus de la Music Academy International et arpenté les scènes en première partie d’artistes confirmés, elle se retrouve sur The Voice. <br> <br>
    
    Elle a également travaillé durant 4 ans pour une association au profit des enfants malades « Gén&rosité 54 ». De nombreuses prestations ont alors permis de récolter des fonds reversés aux enfants. <br> <br>
    
    En 2016 elle se met à la composition avec l’aide de Bernard Brand (compositeur), Valérie Davot (auteur)
    ainsi que Vincent Baguian (ancien chargé de communication de Serge Gainsbourg, auteur de Benabar, Zazie et divers Opéras Rock).
    
    </p>";

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
        $cpt=0;
        $articles = array_reverse($articles);
        foreach ($articles as $article){
            $cpt++;
            echo '<h3><li>'.$article['Titre'].'</li></h3>';
            echo '<p>'.$article['Extrait'].'</p>';
            if($cpt==5){
                 break;
            }
        }
    }

    articles($pdo);
    include("footer.php");
?>
