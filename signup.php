<?php
session_start();
include ("connections.php");
include ("functions.php");

// $user_data = check_login();

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted
        $user_name=$_POST["user_name"];
        $password=$_POST["password"];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //Save to database
            $user_id=random_num(20);
            $query = " insert into user (user_id,user_name,password) values('$user_id','$user_name','$password')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }
        else
        {
            echo "Please enter the valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border:solid thin #aaa;
        }
        #button{
            padding: 10px;
            width:100px;
            color:white;
            background-color: lightblue;
            border:none;
        }
        #box{
            background-color:grey;
            margin:auto;
            width:300px;
            padding:20px;
        }
        .box1{
            paddding:10px;
            border:2px solid black;

        }
    </style>
    <div id="box">
        <form method="post">
            <div style="font-size:20px; margin:10px;color:white"><br>Signup</div>
            <input  id="text" type="text" name="user_name" style="margin:8px;border:2px solid black;">
            <input  id="text" type="password" name="password" style="margin:8px;border:2px solid black;">
            <br>
            <input id="buttton" type="submit" value="Signup">
            <br>
            <a href="login.php">Login</a><br><br>
        </form>
    </div>
</body>
</html>