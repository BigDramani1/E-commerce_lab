<?php

require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();

$customer_id= $_SESSION['user_id'];
$email= $_SESSION['customer_email'];
$amount = total_amount_controller($customer_id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Out</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>ARE YOU SURE YOU WANT TO PAY FOR IT? IF YES CLICK PAY</h1>
    <form id="paymentForm">
    <input type="hidden"name='email' id="email-address" value="<?php echo $email?>" />
     <input type="hidden"name='amount' id="amount" value="<?php echo $amount['Amount']?>" />
    <tr>
     <td><a href="view_cart.php" class='btn btn-danger'>Go to Cart</a></td>
     <input type="hidden" name="process" id="<?php echo $product['product_id'] ?>">
     <td> <button  class="btn btn-success" style="margin-left:500px"type="submit" onclick="payWithPaystack()"> Pay </button></td>
     </tr>
    
    </form>
     <script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  // PAYMENT FUNCTION
  function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: 'pk_test_9a66f0be5bdc776def0d8776416b637dc1060720', // Replace with your public key
		email: document.getElementById("email-address").value,
		amount: document.getElementById("amount").value * 100,
		currency:'GHS',
		onClose: function(){
		alert('Window closed.');
		},
		callback: function(response){
      window.location= `../actions/processing.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
            // alert("payment have been made"+ response.reference);
            // $.ajax({
            //   url:`../actions/processing?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`,
            //   method:'GET',
            //   success: function (response){
            //     alert(response);
              }
             

            });
		//}
	// });
	handler.openIframe();
}
</script> 
</body>
</html>