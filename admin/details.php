<?php
session_start();
include ("connections.php");
// get form data
$booking_id  = $_GET['input_value'];


$query="select booking.booking_id,first_name,middle_name,last_name,aadhar,email,gender,phone_no,no_of_adult,no_of_child,address,room_id,room_type,billing_id,arrival_date from booking,rooms,billing where booking.booking_id='$booking_id' and rooms.booking_id='$booking_id' and billing.booking_id='$booking_id'";
            $result=mysqli_query($con,$query);
            $final_result=mysqli_fetch_assoc($result);
			echo "Booking Id : ".$final_result["booking_id"]."<br>";
            echo "First Name  : ".$final_result["first_name"]."<br>";
            echo "Middle Name : ".$final_result["middle_name"]."<br>";
            echo "Last Name : ".$final_result["last_name"]."<br>";
            echo "Aadhar Number : ".$final_result["aadhar"]."<br>";
            echo "Email Id : ".$final_result["email"]."<br>";
            echo "Gender : ".$final_result["gender"]."<br>";
            echo "Phone Number : ".$final_result["phone_no"]."<br>";
            echo "Number Of Adults : ".$final_result["no_of_adult"]."<br>";
            echo "Number Of Children : ".$final_result["no_of_child"]."<br>";
            echo "Address : ".$final_result["address"]."<br>";
            echo "Room Id : ".$final_result["room_id"]."<br>";
            echo "Room Type : ".$final_result["room_type"]."<br>";
            echo "Billing Id : ".$final_result["billing_id"]."<br>";
            echo "Arrival Date : ".$final_result["arrival_date"]."<br>";
?>