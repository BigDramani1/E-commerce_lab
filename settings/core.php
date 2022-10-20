<?php
//start session
session_start(); 

//for header redirection
ob_start();

//function to check for login

function check_login(){
	//check if login session exit
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect to login page
    	header('Location: ../login/login.php');
	}
}


//function to get user ID


//function to check for role (admin, customer, etc)



?>