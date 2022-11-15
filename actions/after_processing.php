<?php 
require('../settings/core.php');
require('../controllers/cart_controller.php');

$product = select_one_product_controller($_GET['product_id']);

    $email = $_GET['email'];
    $amount = $_GET['amount'];
    $reference = $_GET['reference'];

    $customer_id = $_SESSION['user_id'];
    $invoice_no = mt_rand(1000, 100000);
    $order_date = date('Y/m/d');
    $order_status = 'successful';

    $add_order = add_order_controller($customer_id, $invoice_no, $order_date, $order_status);
  

    if($add_order){
      // get the most recent order id
      $recent_order = get_recent_order_controller();
     

      // call a function that stores an array of the customer's details
      $products = select_all_from_cart_controller($customer_id);
   
   
      foreach($products as $product){ 	
          $addorderdetails = add_order_details_controller($recent_order['last_order'], $product['p_id'], $product['qty']);
      }
  
  }

       $amount = total_amount_controller($customer_id);
      // call controller function to insert into the payment table
      $result = add_payment_controller($amount['Amount'], $customer_id, $recent_order['last_order'], "GHC", $order_date);

      if($result) {
          echo "payment verified successfully and insertion complete";
          $cartItems = select_all_from_cart_controller($customer_id);

          foreach ($cartItems as $cart) {
              remove_from_cart_controller($cart['p_id'], $customer_id);
              header("Location:../view/payment_success.php");
          }

      }else {
          echo "insertion failed";
      }

      ?>