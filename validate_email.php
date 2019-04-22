<?php
// fetch data
$mail = $_GET['email'];

$conn = mysqli_connect('localhost' , 'root', '');

if(!$conn)
die(mysqli_error());

if( ! mysqli_select_db($conn,'mha'))
die(mysqli_error());

$sql = "select Email from user_register where Email = '$mail'";

$result = mysqli_query($conn,$sql );

if(mysqli_num_rows($result)>0)
{
echo("Email already exist. please choose another.");
}
else
{
echo "Email not in the database. You can continue. ";
mysqli_close($conn);
}
?>
