<?php
session_start();
include ("connections.php");
// get form data
$booking_id  = $_GET['input_value'];


$query="UPDATE billing set Status='Cancel' where billing_id=$booking_id";
mysqli_query($con,$query);
?>
