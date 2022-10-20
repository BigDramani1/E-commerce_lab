<?php
include('../settings/db_cred.php');
$mysqli = new mysqli(SERVER, HOSTNAME, PASSWORD, DATABASE);

if(isset($_POST['submitting'])){
    $fullname =$_POST['fullname'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO  phonebook (pid, pname, pphoned) Values ($fullname, $phone)";
    $result=mysqli_query($mysqli, $sql);
    echo $result;


}

// Javascript helps you send the form and redirect back to the same page. 


?>