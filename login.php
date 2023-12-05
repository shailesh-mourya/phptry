<?php

$hemail=$_POST["email"];
$hpass=$_POST["pass"];

$host="localhost";
$user="root";
$pass="";
$db="test";

$conn=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT * FROM `users` WHERE `email`='$hemail' AND `pass`='$hpass';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "login successfully";
}
else{
    echo "invalid email and password";
}
mysqli_close($conn);



?>