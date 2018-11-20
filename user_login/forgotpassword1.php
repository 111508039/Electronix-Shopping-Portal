<?php



if(!isset($_POST["answer"]))
{
	header("location:login.html");
}

else
{

 $conn = mysqli_connect("localhost","root","root","practise1");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}

$answ = $_POST["answer"];
$uname = $_POST["uname"];
echo $answ;
echo $uname;
$qry = "select * from user_log where uname ='$uname'  and secq ='$answ'";
$run = mysqli_query($conn,$qry);
$n=mysqli_num_rows($run);
echo $n;
#$e = mysqli_fetch_row($run);

#$ans = $e[2];
#echo $ans;
if($n > 0)
{
	header("location:fp2.php");
}

else 
{
	echo"<script>alert('Invalid Answer.Please Try Again')</script>";
	echo"<script>window.open('forgotpassword.php','_self')</script>";
}

}
?>
