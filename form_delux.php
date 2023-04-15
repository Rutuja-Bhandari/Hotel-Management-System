<?php
    session_start();
    include ("connections.php");
    
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $first_name=$_POST["first_name"];
            $middle_name=$_POST["middle_name"];
            $last_name=$_POST["last_name"];
            $aadhar_no=$_POST["aadhar_no"];
            $email=$_POST["email"];
            $gender=$_POST["gender"];
            $phone_no=$_POST["phone_no"];
            $address=$_POST["address"];
            $room_no=$_POST["room_no"];
            $arrival_date=$_POST["arrival_date"];
            $leaving_date=$_POST["leaving_date"];
            $no_of_adults=$_POST["no_of_adults"];
            $no_of_childrens=$_POST["no_of_childrens"];

            $query = " INSERT INTO `booking` ( `first_name`, `middle_name`, `last_name`, `aadhar`, `email`, `gender`, `phone_no`, `no_of_adult`, `no_of_child`, `address`) VALUES ('$first_name', '$middle_name', '$last_name', '$aadhar_no', '$email', '$gender', '$phone_no', '$no_of_adults', '$no_of_childrens', '$address')";
            mysqli_query($con,$query);
            $query1 = "INSERT INTO `rooms` (`room_type`,`room_no`) VALUES ('Delux','$room_no')";
            mysqli_query($con,$query1);
            $query2 = "INSERT INTO `billing` ( `arrival_date`,`leaving_date`,`Status`) VALUES ('$arrival_date','$leaving_date','Booked')";
            mysqli_query($con,$query2);
            echo "alert('Congratulation! Your booking is confirmed!!')";
            header("location:index.php");
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book now</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1 class="heading">
        <span>B</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>


    <div id="main-form" >
        <!-- <p id="description"></p> -->
        <form id="survey-form" method="post" >
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* First name: </label>
                </div>
                <div class="rightTab">
                    <input name="first_name" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your First name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Middle name: </label>
                </div>
                <div class="rightTab">
                    <input name="middle_name" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your Middle name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Last name: </label>
                </div>
                <div class="rightTab">
                    <input name="last_name" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your Last name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Address: </label>
                </div>
                <div class="rightTab">
                    <input name="address" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your address" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="email-label" for="name">* Email: </label>
                </div>
                <div class="rightTab">
                    <input name="email" type="email" name="email" id="email" class="input-field" required placeholder="Enter your Email">
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="number-label" for="age">* Aadhar no: </label>
                </div>
                <div class="rightTab">
                    <input name="aadhar_no" pattern="\d{12}" autocomplete="off" title="Ten numbers" type="text" id="number"  class="input-field" placeholder="Enter your Aadhar no">
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Phone no: </label>
                </div>
                <div class="rightTab">
                    <input name="phone_no" pattern="\d{10}" autocomplete="off" title="Ten numbers"  autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your phone no " required>
                </div>
            </div>
            
            <div class="rowTab"  >
                <div class="labels">
                    <label for="userRating">* Gender: </label>
                </div>
                <div class="rightTab">
                    <ul style="list-style: none;" name="gender">
                        <li class="radio"><label><input name="gender" name="radio-buttons" value="Male"  type="radio" class="userRatings" >Male</label></li>
                        <li class="radio"><label><input name="gender" name="radio-buttons" value="Female"  type="radio" class="userRatings" >Female</label></li>
                        <li class="radio"><label><input name="gender" name="radio-buttons" value="Other"  type="radio" class="userRatings" >Other</label></li>
                    </ul>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* No of Adult:</label>
                </div>
                <div class="rightTab">
                    <input name="no_of_adults" autofocus type="number" min="0" name="name" id="name" class="input-field" placeholder="Enter number od adult" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* No of Children:</label>
                </div>
                <div class="rightTab">
                    <input name="no_of_childrens" autofocus type="number" min="0" name="name" id="name" class="input-field" placeholder="Enter number od children" required>
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
                    <label id="name-label" for="name">* Arrival date:</label>
                </div>
                <div class="rightTab">
                    <input name="arrival_date" autofocus type="date" min="0" name="name" id="name" class="input-field" placeholder="Enter Arrival date" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Leaving date:</label>
                </div>
                <div class="rightTab">
                    <input name="leaving_date" autofocus type="date" min="0" name="name" id="name" class="input-field" placeholder="Enter leaving date" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label for="preferences">Facilities: </label>
                </div>
                <div class="rightTab">
                    <ul id="preferences" style="list-style: none;">
                        <li class="checkbox"><label><input name="prefer" value="1" type="checkbox" class="userRatings">Extra bed (Rs 15000 per bed)</label></li>
                        <li class="checkbox"><input name="prefer" value="2" type="checkbox" class="userRatings">Car parking (Rs 300 per day)</li>
                        <li class="checkbox"><label><input name="prefer" value="3" type="checkbox" class="userRatings">Spa (Rs 2800 per person)  </label></li>
                        <li class="checkbox"><label><input name="prefer" value="4" type="checkbox" class="userRatings">Gym access (Rs 750 per day) </label></li>
                        
                    </ul>
                </div>
            </div>






            
            <button id="submit" type="submit">Confirm</button>
        </form>
    </div>
    
    

</body>
</html>

