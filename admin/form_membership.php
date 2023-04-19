<?php
    session_start();
    include ("connections.php");
    
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            // echo "Connection is obtained successfully";
            // $booking_id;
            $first_name=$_POST["first_name"];
            $middle_name=$_POST["middle_name"];
            $last_name=$_POST["last_name"];
            $aadhar_no=$_POST["aadhar_no"];
            $email=$_POST["email"];
            $gender=$_POST["gender"];
            $phone_no=$_POST["phone_no"];
            $address=$_POST["address"];
            $room_no=$_POST["room_no"];
            $verified=$_POST["verified"];

            $query = " INSERT INTO `membership` ( `first_name`, `middle_name`, `last_name`, `aadhar`, `email`, `gender`, `phone_no`, `address`,`room_no`,`verified`) VALUES ('$first_name', '$middle_name', '$last_name', '$aadhar_no', '$email', '$gender', '$phone_no', '$address','$room_no','$verified')";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Book now</title>
    <link rel="stylesheet" href="css/form_membership.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header>
        <!--######################## Navigation Bar######################################### -->

        <div class="navIndex ">
            <nav class="navbar navbar-expand-lg   ">
                <a class="navbar-brand navcolor" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link navcolor" href="index.php">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link navcolor" href="membership.php">membership page <span
                                    class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </div>
        </div>
        </nav>
        </div>
        
    </header>
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
                    <label id="name-label" for="name">* Room no:</label>
                </div>
                <div class="rightTab">
                    <input name="room_no" autofocus type="text" min="0" name="name" id="name" class="input-field" placeholder="Enter Room number " required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label for="userRating">* Verified: </label>
                </div>
                <div class="rightTab" >
                    <ul style="list-style: none;" name="verified" >
                        <li class="radio"><input name="verified"  name="radio-buttons" value="Yes"  type="radio" class="userRatings" >Yes</li>
                        <li class="radio"><input name="verified"  name="radio-buttons" value="No"  type="radio" class="userRatings" >No</li>
                    </ul>
                </div>
            </div>
            






            
            <button id="submit" type="submit">Confirm</button>
        </form>
    </div>
    
    

</body>
</html>

