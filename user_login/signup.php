<?php

$conn = mysqli_connect("localhost","root","root","practise1");

if(mysqli_connect_errno()) {
  	echo"Failed to connect : " . mysqli_connect_error();
}

$uid = $_POST["username1"];
$pwd = $_POST["password1"];
$secq = $_POST["secq"];

$qry="insert into user_log(uname, secq, upwd) values ('$uid', '$secq', '$pwd')";

$result=mysqli_query($conn,$qry);

if($result) {
	echo"<script>alert('registered successfully...')</script>";
	echo "<script>window.open('login.html','_self')</script>";
}

else {
	echo"<script>alert('failed to register')</script>";
}

?>
