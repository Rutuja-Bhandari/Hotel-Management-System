<?php
session_start();
include ("connections.php");
// get form data
$booking_id  = $_GET['input_value'];


$tsql = "select booking_id from booking where booking_id=$booking_id";
$tre = mysqli_query($con, $tsql);
if ($tre->num_rows == null) {
    // Display an alert if the record does not exist
    echo "Booking Id doesnot exists!!";
  }

else{
$query="DELETE from booking where booking_id = '$booking_id'";
mysqli_query($con,$query);
$query1="DELETE from rooms where room_id = '$booking_id'";
mysqli_query($con,$query1);
$query2="DELETE from billing where billing_id = '$booking_id'";
mysqli_query($con,$query2);
$query3="DELETE from facilities where booking_id = '$booking_id'";
mysqli_query($con,$query3);
echo "Sucessfully deleted!!";
}
?>
