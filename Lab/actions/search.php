<?php

if(isset($_GET['search'])){
    //store the search querry in a variable
  $search = $_GET['querry'];
  if(!empty($search)){
      //redirect to search results
      header("Location: ../view/search.php?querry=$search");
  }
}
?>