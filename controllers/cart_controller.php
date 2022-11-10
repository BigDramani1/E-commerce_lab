<?php 

require('../classes/cart_class.php');


function add_to_cart_controller($product_id, $ip_address, $customer_id, $quantity) {
    //create an instance of the cart class
    $cart_instance = new Cart();
    // call the add_to_cart method from the cart class
    return $cart_instance->add_to_cart($product_id, $ip_address, $customer_id, $quantity);
}


function remove_from_cart_controller($product_id, $customer_id){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call the remove_from_cart method from the cart class
    return $cart_instance->remove_from_cart($product_id, $customer_id);

}


function select_all_from_cart_controller($customer_id){
     //create an instance of the cart class
     $cart_instance = new Cart();
     //call the select_all_from_cart method from the cart class
     return $cart_instance->select_all_from_cart($customer_id);

}

function select_one_item_controller($customer_id, $product_id){
      //create an instance of the cart class
      $cart_instance = new Cart();
      //call the select_one_item method from the cart class
      return $cart_instance->select_one_item($customer_id, $product_id);
}

//update the quantity of one product 
function  update_quantity_controller($product_id, $customer_id, $quantity){
     //create an instance of the cart class
     $cart_instance = new Cart();
     //call the update_quantity method from the cart class
     return $cart_instance->update_quantity($product_id, $customer_id, $quantity);
}


function  total_amount_controller($customer_id){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call the total_amount method from the cart class
    return $cart_instance->total_amount ($customer_id);
}

?>