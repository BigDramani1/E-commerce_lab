<?php
require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();
$order = select_all_orderdetails_controller($_SESSION['user_id'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2 style="text-align:center;">Congratulations!!! Payment Successful</h2>
    <h4 style="text-align:center;">This is your Order details</h4> 
  <div class='container'  style="position:absolute; left:10%;  top:30%;">
    <div class="row">
        <div class="col-lg-6" style="margin-left:500px; font-size:40px">
        <br>Order Id:<?php echo "{$order['order_id']}"; ?>
        <br>Product ID:<?php echo "{$order['product_id']}"; ?>
        <br>Quantity: <?php echo "{$order['qty']}"; ?>
        <br><a href ="cart.php" class='btn btn-success'>Go to Cart</a>
        </div>
    </div>
</div>
</body>
</html>