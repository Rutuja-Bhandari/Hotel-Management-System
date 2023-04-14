<?php
session_start();
include ("connections.php");
// get form data
$booking_id  = $_GET['input_value'];


$query="DELETE from booking where booking_id = '$booking_id'";
mysqli_query($con,$query);
$query1="DELETE from rooms where room_id = '$booking_id'";
mysqli_query($con,$query1);
$query2="DELETE from billing where billing_id = '$booking_id'";
mysqli_query($con,$query2);
?>
