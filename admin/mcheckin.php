<?php
    session_start();
    include ("connections.php");
    
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            // echo "Connection is obtained successfully";
            // $booking_id;
            $membership_id=$_POST["membership_id"];
            $room_no=$_POST["room_no"];
            $arrival_date=$_POST["arrival_date"];

            $query = " INSERT INTO `membership_record` ( `member_id`, `room_no`,`arrival_date`,`status`) VALUES ('$membership_id','$room_no','$arrival_date','Check In')";
            mysqli_query($con,$query);
            echo "alert('Congratulation! Your booking is confirmed!!')";
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
        <span>I</span>
        <span>N</span>
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
                    <label id="name-label" for="name">* Room no:</label>
                </div>
                <div class="rightTab">
                    <input name="room_no" autofocus type="number" min="0" name="name" id="name" class="input-field" placeholder="Enter Room number " required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Arrival date: </label>
                </div>
                <div class="rightTab">
                    <input name="arrival_date" autofocus type="date" name="name" id="name" class="input-field" placeholder="Enter arrival date" required>
                </div>
            </div>






            
            <button id="submit" type="submit">Confirm</button>
        </form>
    </div>
    
    

</body>
</html>

