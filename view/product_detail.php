<?php
require('../settings/core.php');
require('../controllers/product_controller.php');

$product = select_one_product_controller($_GET['product_id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class='container'  style="position:absolute; left:10%;  top:30%;">
    <div class="row">
        <div class="col-lg-6">
            <img src="../images/products/<?php echo htmlentities($product['product_image']); ?>" class="card-img-top" alt="..." style="height:300px; width:300px">
        </div>
        <div class="col-lg-6">
        <br>Title:<?php echo "{$product['product_title']}"; ?>
        <br>Price:<?php echo" GHS{$product['product_price']}";?>
        <br>Description: <?php echo"{$product['product_desc']}"?>
        <form method = "post" action='../actions/add_to_cart.php'>
		<input type="hidden" name="product_id" value= <?php echo $product['product_id'] ?>>
        <br><button name = "add_cart" type = "submit" class='btn 
                  btn-success';>Add to cart</button>
        </div>
    </div>
</div>
</body>

</html>