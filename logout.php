<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['loggedin']);

session_destroy();

header("Location: index.html?msg=Logout_Sucessfull");
?>
