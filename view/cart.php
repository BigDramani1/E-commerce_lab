<?php
require('../settings/core.php');
require('../controllers/product_controller.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h2 style='margin-bottom:50px; text-align:center;'>Adding to Cart</h2>
    <h4>These are the products that were added to my database.</h4>
    <div class="container">
    <div class="row">
    <?php
    $products = select_all_products_controller();
    foreach ($products as $product) {
        echo "
        <div class='col-md-6 col-lg-4 col-xl-3'>
        <input type='hidden' name='product_id' value={$product['product_id']}>
            <div class= 'card text-center  card-product'>
                 <div class='card-product_img'>
                    <img class='card-img' src='../images/products/{$product["product_image"]}' alt='Testing' style='height:200px'>
                </div>
                <div class ='card-body'>
                    <p>{$product['cat_name']}</p>
                    <h4 class='card-product__title'><a href='../view/product_detail.php?product_id={$product["product_id"]}'>{$product['product_title']}</a></h4>
                  <p class='card-product__price'>GHS{$product['product_price']}</p>
                  <button name = \"addToCart\" type = \"submit\" class='btn 
                  btn-success' button onclick=\"window.location.href='../view/product_detail.php?product_id={$product["product_id"]}';\">Add to cart</button>
                 </div>
             </div>
        </div>
        
        ";
    }
    ?>
    </div>
    </div>
</body>

</html>