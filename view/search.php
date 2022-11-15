<?php
require('../settings/core.php');
require('../controllers/product_controller.php');

$querry = $_GET['querry'];


check_login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <section style="padding-top: 20px;">
      <div class="container">
        <div class="row">
        <?php  $results = search_products_controller($querry);
        foreach($results as $product){
          echo "
          <div class='container'  style=\"position:absolute; left:10%;  top:30%;\">
          <div class=\"row\">
              <div class=\"col-lg-6\">
                  <img src=\"../images/products/{$product['product_image']}\" class=\"card-img-top\" alt=\"...\" style=\"height:300px; width:300px\">
              </div>
              <div class=\"col-lg-6\">
              <br>Brand:".$product['product_brand']."
              <br>Brand:".$product['product_cat']."
              <br>Title:".$product['product_title']."
              <br>Price:GHS".$product['product_price']."
              <br>Description:".$product['product_desc']."
              <form method = 'post' action='../actions/add_to_cart.php'>
              <label>Specify the quantity you want</label>
              <input class=\"form-control\" type=\"num\" name=\"quantity\" value=\"1\">
          <input type=\"hidden\" name=\"product_id\" value= ".$product['product_id'].">
              <br><button name = \"add_cart\" type = \"submit\" class='btn 
                        btn-success';>Add to cart</button>
                        </form>
              </div>
          </div>
      </div>
          ";
            }
            ?>
        </div>
      </div>
    </section>

</body>
</html>