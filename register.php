<?php
$conn = mysqli_connect("localhost","root","","mha");
if(!$conn) 	{
    die("Error has occured".mysqli_connect_error());
}
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$lname=$_REQUEST['lname'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$password=$_REQUEST['password'];
$conf_password=$_REQUEST['cpassword'];
$gender=$_REQUEST['gender'];

$sql = "INSERT INTO user_register (First_Name,Middle_Name,Last_Name,DoB,Gender,Email,Mobile_no,Password,Con_Password) VALUES ('$fname','$mname','$lname','$dob','$gender','$email','$mobile','$password','$conf_password')";

if(mysqli_query($conn,$sql))
{
 echo '<script type="text/javascript">alert("Congratuation. You are now registered.")</script>';
 //now directing the user to the home.php
 $sql1 = "SELECT * FROM user_register WHERE Email='$email' and Password='$password'";
 $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));

 if (mysqli_num_rows($result1)>0)
  {
   session_start();
   $row1=mysqli_fetch_array($result1);
   	$_SESSION['id'] = $row['user_id'];
   $_SESSION['username'] = $row1['First_Name'];
   $_SESSION['loggedin'] = true;
   header("Location: home.php?msg=Account created and login succefully");  //if succeful then to homepage
  }
 }
else{
	die("Error in inserting data into database".mysqli_error($conn));
}
