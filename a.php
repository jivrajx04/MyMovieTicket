<?php
$con = mysqli_connect("localhost","user","","movie");

$emil = $_POST['email'];
$pw =$_POST['pw'];

$sql = "SELECT * FROM customer WHERE email=$email AND pass=$pw";

$result = mysqli_query($con , $sql);
 $user = mysqli_fetch_array($result);

 if($user!=0)
 {
    
 }


?>