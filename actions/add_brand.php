<?php
require("../controllers/product_controller.php");
require('../settings/core.php');
check_login();

// check for a POST variable with the name 'addBrand'
if(isset($_POST['add_brand'])){

    // retrieve the brand name from the form
    $brand_name = $_POST['brand_name'];

    $brandInfo = select_one_brandname_controller($brand_name);    
    $existingBrand = $brandInfo['brand_name']; 
    
    if ($existingBrand) {
			echo ("<script>alert('The brand name already exists. Please use a different name.'); window.location.href = '../admin/addbrand.php';</script>");
		
	}
   else{

    $result = add_brand_controller($brand_name);
   
     header("Location: ../admin/brands.php"); 

   }
    


}




?>