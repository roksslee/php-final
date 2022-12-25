<?php
include './app/init.php';

$article=null;
if(isset($_GET['id'])){
    echo $id=(int)$_GET['id'];
    $article = $dbcon->query("SELECT * FROM shoes WHERE id =$id")->fetch_object();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe</title>
</head>
<body>
    <?php if($article):?>
       This is article "<?php echo $article->title; ?>" 
       <h5>Rating: x/5</h5>

       <p>Rate this article:</p>
       <?php foreach(range(1,5) as $rating):?>
            <a href="rate.php?article=<?php echo $article->id; ?>&rating=<?php echo $rating;?>"><?php echo $rating;?></a>
        <?php endforeach?>

    <?php endif?>
</body>
</html>