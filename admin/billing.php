<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
session_start();
include "connections.php";
$booking_id  = $_GET['input_value'];
// $booking_id  =31;

$tsql = "select Status from billing where billing_id=$booking_id ";
$tre = mysqli_query($con, $tsql);
$trow = mysqli_fetch_array($tre);
if($trow['Status']==="Check Out")
{


echo"<p  style='color:black; font-size: 4vh;'><b>JW Marriott Team</b></p>";
echo "
<table>
<thead>
<tr style='color:orange;'>
<th>Booking Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Room Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Room Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Arrival Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Leaving Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                  </tr>
              </thead>
              <tbody>";

$tsql = "select booking_id,first_name,last_name,email,room_no,room_type,arrival_date,leaving_date,Status from booking,rooms,billing where booking_id=$booking_id and room_id=$booking_id and billing_id=$booking_id ";
$tre = mysqli_query($con, $tsql);
while ($trow = mysqli_fetch_array($tre)) {
    // $co =$trow['stat'];
    // if($co=="Not Conform")
    // {
    echo "<br>
    <tr>
                          <th>" . $trow['booking_id'] . "</th>
                          <th>" . $trow['first_name'] . " " . $trow['last_name'] . "</th>
                          <th>" . $trow['room_no'] . "</th>
                          <th>" . $trow['room_type'] . "</th>
                          <th>" . $trow['arrival_date'] . "</th>
                          <th>" . $trow['leaving_date'] . "</th>
                          <th>" . $trow['Status'] . "</th>
                          </tr>";
    $booking_id=$trow['booking_id'];
    $first_name=$trow['first_name'];
    $last_name=$trow['last_name'];
    $room_no=$trow['room_no'];
    $arrival_date= $trow['arrival_date'];
    $leaving_date=$trow['leaving_date'];
    $Status= $trow['Status'] ;
    $email=$trow['email'] ;
    // }

}
echo "</tbody>";
echo "</table>";




echo "<br><p style='color:rgb(17,10,94);'><b>Facilities:</b></p>";
echo "
<table>
<thead>
<tr style='color:orange;'>
<th>Extra bed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Car Parking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Spa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Gym &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                  </tr>
              </thead>
              <tbody>";

              $tsql1 = "select extra_bed,car_parking,spa,gym from facilities where facilities.booking_id =$booking_id ";
              $tre1 = mysqli_query($con, $tsql1);
              while ($trow1 = mysqli_fetch_array($tre1)) {
                  // $co =$trow['stat'];
                  // if($co=="Not Conform")
                  // {
                  echo "<br>
                  <tr>
                                        <th>" . $trow1['extra_bed'] . "</th>
                                        <th>" . $trow1['car_parking'] .  "</th>
                                        <th>" . $trow1['spa'] . "</th>
                                        <th>" . $trow1['gym'] . "</th>
                                        </tr>";

                            $extra_bed=$trow1['extra_bed'];
                            $car_parking=$trow1['car_parking'];
                            $spa=$trow1['spa'];
                            $gym=$trow1['gym']; 
                  // }
                  if($trow1['extra_bed']==="Yes")
                  {
                      $price1=1500;
                  }
                  else
                  {
                      $price1=0;
                  }
                  if($trow1['car_parking']==="Yes")
                  {
                      $price2=300;
                  }
                  else
                  {
                      $price2=0;
                  }
                  if($trow1['spa']==="Yes")
                  {
                      $price3=2800;
                  }
                  else
                  {
                      $price3=0;
                  }
                  if($trow1['gym']==="Yes")
                  {
                      $price4=750;
                  }
                  else
                  {
                      $price4=0;
                  }

                  echo "<tr>
                  <th>" . $price1 . "</th>
                  <th>" . $price2 . "</th>
                  <th>" . $price3 . "</th>
                  <th>" . $price4 . "</th>
                  </tr>";
              }
              echo "</tbody>";
              echo "</table>";
              
$tsql2 = "select room_type from rooms where room_id=$booking_id ";
$tre2 = mysqli_query($con, $tsql2);
$room_type=mysqli_fetch_array($tre2);
if( $room_type['room_type']==="Standard")
{
    $price5=5000;
}
else if( $room_type['room_type']==="Delux")
{
    $price5=7000;
}
else if( $room_type['room_type']==="Double Delux")
{
    $price5=10000;
}


$tsql2 = "select arrival_date,leaving_date from billing where billing_id=$booking_id ";
$tre2 = mysqli_query($con, $tsql2);
$dates=mysqli_fetch_array($tre2);
$date1 = new DateTime($dates['arrival_date']);
$date2 = new DateTime($dates['leaving_date']);
$interval = $date1->diff($date2);
$amount=($price1+$price2+$price3+$price4+$price5)*$interval->days;


echo"<br>Cost for one day in ".$room_type['room_type']." room : ".$price5."<br>";
echo"Cost for  ".$interval->days." in ".$room_type['room_type']." room : ".$price5*$interval->days."<br>";


echo "<br><p style='color:orange;'><b>Total Amount: </b>". $amount."</p>";

$tsql4 = "UPDATE billing set amount=$amount where billing_id=$booking_id ";
mysqli_query($con, $tsql4);



$mail = new PHPMailer();
    $mail->IsSMTP();

    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "rutuja.22110669@viit.ac.in";
    $mail->Password = "smar418#";
    $mail->IsHTML(true);
    $mail->AddAddress("$email", "$first_name $last_name");
    $mail->SetFrom("rutuja.22110669@gmail.com", "Rutuja");
    $mail->Subject = "Bill at JW Marriott";
    $content = "<b>Dear $first_name ,<br>
    Your bill  is shown below

    <table>
<thead>
<tr>
<th>Booking Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Room Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Arrival Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Leaving Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                  </tr>
              </thead>
              <tbody>
              
    <tr>
                          <th>" . $booking_id . "</th>
                          <th>" . $first_name . " " . $last_name . "</th>
                          <th>" . $room_no . "</th>
                          <th>" . $arrival_date . "</th>
                          <th>" . $leaving_date . "</th>
                          <th>" . $Status . "</th>
                          </tr>
</tbody>
</table>

Facilities:<br>
<table>
<thead>
<tr >
<th>Extra bed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Car Parking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Spa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>Gym &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                  </tr>
              </thead>
              <tbody>
                  <tr>
                                        <th>" . $extra_bed . "</th>
                                        <th>" . $car_parking.  "</th>
                                        <th>" . $spa. "</th>
                                        <th>" . $gym. "</th>
                                        </tr>
                                        </tbody>
                                        </table>

                                      Cost for one day in ".$room_type['room_type']." room : ".$price5."<br>
                                     Cost for  ".$interval->days." days in ".$room_type['room_type']." room : ".$price5*$interval->days."<br>
                                        
                                        
                                       Total Amount: ". $amount."<br>

    Thank you for choosing JW Marriott, and we look forward to welcoming you soon.<br>
    Best regards,<br>
    JW Marriott Team.</b>";

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
    } else {
        echo "Email sent successfully";
    }

}

else
{
    echo "User has not Check out";
}
?>