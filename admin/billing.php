<?php
session_start();
include "connections.php";
$booking_id  = $_GET['input_value'];
// $booking_id  =31;
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

$tsql = "select booking_id,first_name,last_name,room_no,room_type,arrival_date,leaving_date,Status from booking,rooms,billing where booking_id=$booking_id and room_id=$booking_id and billing_id=$booking_id ";
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



?>