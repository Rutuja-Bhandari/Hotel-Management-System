<?php
    session_start();
    include ("connections.php");
    
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            // echo "Connection is obtained successfully";
            // $booking_id;
            $membership_id=$_POST["membership_id"];
            $leaving_date=$_POST["leaving_date"];

            $query = " UPDATE membership_record set leaving_date='$leaving_date' where member_id= '$membership_id' and status='Check In' ";
            mysqli_query($con,$query);
            $query = " UPDATE membership_record set status='Check Out' where member_id= '$membership_id' and status='Check In' ";
            mysqli_query($con,$query);
            header("location:membership.php");
        } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book now</title>
    <link rel="stylesheet" href="css/member.css">
</head>
<body>
    <h1 class="heading">
    <span>C</span>
        <span>H</span>
        <span>E</span>
        <span>C</span>
        <span>K</span>
        <span class="space"></span>
        <span>O</span>
        <span>U</span>
        <span>T</span>

    </h1>


    <div id="main-form" >
        <!-- <p id="description"></p> -->
        <form id="survey-form" method="post" >
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Membership Id: </label>
                </div>
                <div class="rightTab">
                    <input name="membership_id" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your membership id" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* leaving date: </label>
                </div>
                <div class="rightTab">
                    <input name="leaving_date" autofocus type="date" name="name" id="name" class="input-field" placeholder="Enter leaving date" required>
                </div>
            </div>






            
            <button id="submit" type="submit">Confirm</button>
        </form>
    </div>
    
    

</body>
</html>

