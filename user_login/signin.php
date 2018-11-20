<?php

if(!isset($_POST["username"]))
{
	header("location:login.html");
}
 
else {
 
 $conn = mysqli_connect("localhost","root","root","practise");

 if(mysqli_connect_errno()){
  	echo"Failed to connect : " . mysqli_connect_error();
 }

$uid=$_POST["username"];
$pwd=$_POST["password"];
echo $uid;
echo $pwd;
$qry="select * from user_log where uname='$uid' and upwd='$pwd'";

$result=mysqli_query($conn,$qry);
$n=mysqli_num_rows($result);
 
#echo $n;
#error_log("&".$uid."&".$n);

if($n>0)
{
    header("location:http://localhost/Electronix_PHP/electronix2/index.php");
    
}

else
{
	echo "<script>alert('username or password is incorrect!')</script>";
	echo "<script>window.open('login.html','_self')</script>";
}

}

?>
