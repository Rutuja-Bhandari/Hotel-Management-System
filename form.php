<?php
session_start();
include ("connections1.php");
// include ("functions.php");

// $user_data = check_login();

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted
        $first_name=$_POST["first_name"];
        $middle_name=$_POST["middle_name"];
        $last_name=$_POST["last_name"];
        $gender=$_POST["gender"];
        $address=$_POST["address"];
        $email=$_POST["email"];
        $aadhar_no=$_POST["aadhar_no"];
        $phone_no=$_POST["phone_no"];
        $no_adults=$_POST["no_adults"];
        $no_of_children=$_POST["no_of_children"];
        $arrival_date=$_POST["arrival_date"];
        $leaving_date=$_POST["leaving_date"];


        // if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        // {
            //Save to database
            // $user_id=random_num(20);
            // $query = " insert into user (user_id,user_name,password) values('$user_id','$user_name','$password')";
            $query = "insert into `data` (`first_name`, `middle_name`, `last_name`, `gender`, `address`, `email`, `aadhar_no`, `phone_no`, `no_adults`, `no_children`, `arrival_date`, `leaving_date`) VALUES ('$first_name', '$middle_name', '$last_name', '$gender', '$address', '$email', '$aadhar_no', '$phone_no', '$no_adults', '$no_of_children', '$arrival_date', '$leaving_date')";
            mysqli_query($con,$query);
            echo "Inserted successfully!!";
            die;
        // }
        // else
        // {
        //     echo "Please enter the valid information";
        // }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="index.css">
    <title>Document</title>

</head>
<body class="screen">
    

    <section class="book">

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
    





        <div class="formdiv">
        


            <form action="" method="post">
                <div class="inputBox" >
                    <!-- <div class="label"><h4>First Name : </h4></div>
                    <div class="text"><input type="text" placeholder="first name"></div> -->
                    <h4>First Name :</h4>
                    <input name="first_name" type="text" placeholder="first name" min="0" max="">
                </div>
    
                <div class="inputBox" >
                    <h4>Middle Name :</h4>
                    <input name="middle_name" type="text" placeholder="middle name" min="0" max="">
                </div>
    
                <div class="inputBox"  >
                    <h4>Last Name :</h4>
                    <input name="last_name" type="text" placeholder="last name">
                </div>

                <div class="inputBox" name="gender">
                    <h4>Gender : </h4>

                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="transgender" name="gender" value="Transgender">
                    <label for="transgender">Transgender</label>
                </div>

                <div class="inputBox" >
                    <h4>Address :</h4>
                    <input name="address" type="text" placeholder="address">
                </div>

                <div class="inputBox" >
                    <h4>Email :</h4>
                    <input name="email" type="email" placeholder="email">
                </div>

                <div class="inputBox" >
                    <h4>Aadhar no.  :</h4>
                    <input name="aadhar_no" type="text" placeholder="aadhar no">
                </div>

                <div class="inputBox" >
                    <h4>Phone no :</h4>
                    <input name="phone_no" type="number" placeholder="Phone no">
                </div>
    
                <div class="inputBox" >
                    <h4>Number of adults : </h4>
                    <input name="no_adults" type="number" placeholder="number of adults" min="0">
                </div>
    
                <div class="inputBox" >
                    <h4>Number of children : </h4>
                    <input name="no_of_children" type="number" placeholder="number of children" min="0">
                </div>

                <div class="inputBox" >
                    <h4>Arrival Date :</h4>
                    <input name="arrival_date" type="date" placeholder="arrival date">
                </div>

                <div class="inputBox" >
                    <h4>Leaving Date :</h4>
                    <input name="leaving_date" type="date" placeholder="leaving date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>
    
        </div>

    </section>
    
</body>
</html>