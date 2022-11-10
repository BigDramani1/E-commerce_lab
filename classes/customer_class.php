<?php

require('../settings/connection.php');

// inherit the methods from the connection.php file
class Customer extends Connection{ 
    function input_customer_info($full_name, $email, $password, $country, $city, $contact){
		// returns true or false
		return $this->query("insert into customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) values('$full_name', '$email', '$password', '$country', '$city', '$contact', 2)");
	}

    function take_one_customer_email($email){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_email='$email'");
	}
}

?>