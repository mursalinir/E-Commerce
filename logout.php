<?php 

session_start();

session_destroy();
echo "<script>alert('You have been Logged out.')</script>";
echo "<script>window.open('index.php','_self')</script>";

?>