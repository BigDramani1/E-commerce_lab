<?php

require('../settings/core.php');

if(isset($_SESSION['user_id'])){ 
    unset($_SESSION['user_id']); 
}

header("Location: ..\index.php");
die;

?>