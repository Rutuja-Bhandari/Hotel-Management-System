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
            $no_of_adults=$_POST["no_of_adults"];
            $no_of_childrens=$_POST["no_of_childrens"];
            $address=$_POST["address"];
            $arrival_date=$_POST["arrival_date"];
            $leaving_date=$_POST["leaving_date"];
            

            $query = " INSERT INTO `booking` ( `first_name`, `middle_name`, `last_name`, `aadhar`, `email`, `gender`, `phone_no`, `no_of_adult`, `no_of_child`, `address`) VALUES ('$first_name', '$middle_name', '$last_name', '$aadhar_no', '$email', '$gender', '$phone_no', '$no_of_adults', '$no_of_childrens', '$address')";
            mysqli_query($con,$query);
            $query1 = "INSERT INTO `rooms` (`room_type`) VALUES ('Double Delux')";
            mysqli_query($con,$query1);
            $query2 = "INSERT INTO `billing` ( `arrival_date`,`leaving_date`,`Status`) VALUES ('$arrival_date','$leaving_date','Booked')";
            mysqli_query($con,$query2);
            header("location:index.php");
        }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form</title>
    <link rel="stylesheet" href="index.css">
  </head>
<body class="body">
    <!-- <h1 id="title"><b>Form</b> </h1> -->
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
       
        <form id="survey-form" method="post" action="">
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* First Name: </label>
                </div>
                <div class="rightTab">
                    <input name="first_name" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your first name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Middle Name: </label>
                </div>
                <div class="rightTab">
                    <input name="middle_name" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your middle name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Last Name: </label>
                </div>
                <div class="rightTab">
                    <input name="last_name" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your last name" required>
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
                    <label id="name-label" for="name">* Aadhar no: </label>
                </div>
                <div class="rightTab">
                    <input name="aadhar_no" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your aadhar no" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label  id="name-label" for="name">* phone no: </label>
                </div>
                <div class="rightTab">
                    <input name="phone_no" autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your phone no" required>
                </div>
            </div>
            <div class="rowTab" >
                <div class="labels">
                    <label for="userRating">* Gender: </label>
                </div>
                <!-- <div class="rightTab" name="gender">
                    <ul style="list-style: none;">
                        <li class="radio"><label><input name="radio-buttons" value="1"  type="radio" class="userRatings" >Male</label></li>
                        <li class="radio"><label><input name="radio-buttons" value="2"  type="radio" class="userRatings" >Female</label></li>
                        <li class="radio"><label><input name="radio-buttons" value="3"  type="radio" class="userRatings" >Trangender</label></li>
                    </ul>
                </div> -->
                <div class="rightTab" name="gender">
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="transgender" name="gender" value="Transgender">
                    <label for="transgender">Transgender</label>
                </div>


            </div>
            <div class="rowTab">
                <div class="labels">
                    <label  id="name-label" for="name">* No of Adult: </label>
                </div>
                <div class="rightTab">
                    <input name="no_of_adults" autofocus type="number" name="name" id="name" class="input-field" placeholder="Enter no of adult" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* No of Children: </label>
                </div>
                <div class="rightTab">
                    <input name="no_of_childrens" autofocus type="number" name="name" id="name" class="input-field" placeholder="Enter no of adult" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Arrival date: </label>
                </div>
                <div class="rightTab">
                    <input name="arrival_date" autofocus type="date" name="name" id="name" class="input-field" placeholder="Enter no of adult" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Leaving date: </label>
                </div>
                <div class="rightTab">
                    <input name="leaving_date" autofocus type="date" name="name" id="name" class="input-field" placeholder="Enter no of adult" required>
                </div>
            </div>
            
            
            
            <button id="submit" type="submit">Confirm</button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

