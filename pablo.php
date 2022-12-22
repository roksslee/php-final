<?php
include './app/init.php';

//all articles
$query= $dbcon->query("SELECT * FROM shoes"); // 

$articles =[];
while($row= $query->fetch_object()){ //while loop because there is more than one article anf fetch the info of the row as object
    $articles[]=$row; //creating the array with the info taken from the query 
}
print_r($articles) //
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
</head>
<body>
    <?php foreach($articles as $article): ?>
        <h3><a href="article.php?id=<?php echo $article->id; ?>"><?php echo $article->title;?></a></h3>
        <h5>Rating: x/5</h5> <!-- here should be displayed the avg rating of the article 
    <?php endforeach ?>        


</body>
</html>