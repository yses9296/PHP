<?php 
    $product_id = filter_input(INPUT_GET, 'productId', FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

    // if($product_id == false || $limit = false){
    //     die();
    // }
    if($product_id == false){
        $product_id = 10;
    }
    if($limit == false){
        $limit = 10;
    }
?>
<h1>get input</h1>
<p>
    Showing category : <?= $product_id; ?> - Limit <?= $limit; ?>
</p>
