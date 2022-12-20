<?php include './pages/header.php';
    $jsonLoad = fopen('./data/products.json', 'r');
    $products = json_decode(fread($jsonLoad, filesize('./data/products.json')), true);
    fclose($jsonLoad);
?>
<section class="prodlist">
    <article class="modal">
        <span class="close">$times;</span>
        <aside class="m-content"></aside>
    </article>
    <ul>
        <?php
            foreach($products as $product){
                echo "<li><p>".$product['pName']."</p><p>Brand: ".$product['brand']."</p><p>Size: ".$product['size']."</p></li>";
            }
        ?>
    </ul>
</section>
<?php include './pages/footer.php'; ?>