
<?php
require('../classes/customer_class.php');

function take_customer_info_controller($full_name, $email, $password, $country, $city, $contact){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the add_customer method from the Customer class
    return $customer_instance->input_customer_info($full_name, $email, $password, $country, $city, $contact);

}

function take_one_customer_email_controller($email){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the select_one_customer method from the Customer class
    return $customer_instance->take_one_customer_email($email);
}

function select_one_item_controller($customer_id, $product_id){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call the select_one_item method from the cart class
    return $cart_instance->select_one_item($customer_id, $product_id);
}
?>