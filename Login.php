<?php
$conn=mysqli_connect('localhost','root','','mha') or die(mysqli_connect_error());

$email=$_REQUEST['email'];
$password=$_REQUEST['pass'];
$sql = "SELECT * FROM user_register WHERE Email='$email' and Password='$password'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if (mysqli_num_rows($result)>0)
{
	session_start();
	$row=mysqli_fetch_array($result);
	$_SESSION['id'] = $row['user_id'];
	$_SESSION['username'] = $row['First_Name'];
  $_SESSION['loggedin'] = true;

  header("Location: home.php?msg=Login_Sucessfull");  //if succeful then to homepage
}
else{
	header("Location: Login.html?msg=Login_Failed");   //again to login page
}
mysqli_close($conn);
?>
