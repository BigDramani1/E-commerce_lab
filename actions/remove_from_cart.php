<?php

require("../controllers/cart_controller.php");
require('../settings/core.php');

if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $customer_id = $_SESSION['user_id'];   

    // call the remove cart controller function
    $result = remove_from_cart_controller($product_id, $customer_id);

    if($result){
        header('Location: ../view/view_cart.php');

    }
     else {
        echo ("<script>alert('Could not remove the product from cart.'); window.location.href = '../view/cart.php';</script>");;
     }

}
?>