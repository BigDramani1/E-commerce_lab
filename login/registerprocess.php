<?php

require('../controllers/customer_controller.php');

// check for a POST variable with the name 'register'
if(isset($_POST['submit'])){
    // retrieve the name, description and quantity from the form submission
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];



    // checking if someone's has the same email
    $customer = take_one_customer_email_controller($email);
    $existingCustomer = $customer['customer_email'];

    if ($existingCustomer){
        echo "<script>alert('Sorry, the email already exists, use a new one');window.location.href = '../login/register.php';</script>";
    }

    else{
        // calling the take_customer_info_controller function and adding a new customer
        $result = take_customer_info_controller($full_name, $email, $password, $country, $city, $contact);
        if($result === true) {
            echo "<script>alert('Sign up was successful')</script>";
            header("Location: ../login/login.php");
        }
        else{
            echo ("<script>alert('Error occurred! try again later'); window.location.href = '../login/register.php';</script>");
        }
    }
}
?>