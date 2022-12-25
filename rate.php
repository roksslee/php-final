<?php
include './app/init.php';

if(isset($_GET['article'], $_GET['rating'])){
   
    $article = intval($_GET['article']);
    $rating = intval($_GET['rating']);

    if(in_array($rating,[1,2,3,4,5])){
        $exists = $dbcon->query("SELECT id FROM shoes WHERE id= $article")->num_rows;

        if($exists){
            $dbcon->query("INSERT INTO shoes_ratings (shoe, rating) VALUES ($article,$rating)");
        }
    }

    header('Location: article.php?id='.$article);
}
?>