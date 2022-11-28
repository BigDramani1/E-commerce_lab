<?php

require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();
$customer_id= $_SESSION['user_id'];
$products = select_all_from_cart_controller($customer_id);
$amount = total_amount_controller($customer_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
             
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Item</th>
                              <th scope="col">Title</th>
                              <th scope="col">Price</th>                     
                              <th scope="col">Quantity</th>
                             
                          </tr>
                      </thead>
                      <tbody>
                      <?php foreach($products as $product){echo"
                          <tr>
                              <td>
                                  <div class='col-md-4'>
                                      <div class='d-flex'>
                                          <img  src=../images/products/{$product['product_image']} width='100' height='100'>
                                      </div>
                                  </div>
                              </td>

                              <td>
                                <h5>{$product['product_title']}</h5>
                              </td>
                              <td>
                                  <h5>GHS {$product['product_price']}</h5>
                              </td>

                              <form method = 'post' action='../actions/update_quantity.php'>
                              <input type='hidden' name='product_id' value= {$product['product_id']} ?>	
                              
                              <td>
                                  <div class='product_count'>
                                      <input type='number'  id='qty' name='quantity' maxlength='12' value={$product['qty']}>
                                  </div>
                              </td>
                              <td>
                              <input class='btn btn-success' name = 'updateQty' type = 'submit'  value = 'Update Qty'>

                              </td>
                              </form>
                              <td>
                              <a class='btn btn-danger' href='../actions/remove_from_cart.php?product_id={$product['p_id']}'>Remove</a>

                              </td>
                              
                              <td>
                              </td>
                              
                          </tr>
                          
                          ";
                }

                echo"
                <tr class='bottom_button'>
                </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            <h5>GHS{$amount['Amount']}</h5>
                        </td>
                        <td></td>
                        
                    </tr>
                    <td>
                        <a class='btn btn-warning' href='cart.php'>Continue Shopping</a>
                </td>
                <td><a class='btn btn-primary' href='payment.php'>Proceed to Pay</a></td>
                    
                   
                          ";?>
                
                      </tbody>
                  </table>
               
              </div>
                <!-- script to update cart -->
    <script>
      function updatecart(product){
      $.ajax({
              url:'../actions/update_quantity.php',
              type:'POST',
              data:{
                  'pid':product.getAttribute('data-pid'),
                  'cid':product.getAttribute('data-cid'),
                  'qty':product.value
              },
         
          });
      }
    </script>
          </div>
      </div>
  </section>

</body>
</html>