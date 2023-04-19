<?php 
session_start();
include ("connections.php");

// $user_data = check_login();

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted
        $user_name=$_POST["user_name"];
        $password=$_POST["password"];
        $password1=$_POST["password1"];
        if(!empty($user_name) && !empty($password)&& !empty($password1))
        {
            //read database
            if($password===$password1)
            {
              $query="INSERT INTO `user_login` (`user_name`, `password`) VALUES ('$user_name', '$password')";
             mysqli_query($con,$query);
             header("location:user_login.php");
			
            }
            else
            {
              echo "<script>alert('Invalid user name and password!');</script>";
            }
        }
      }
    
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>


	
	<div id="box">
		
		<form method="post">



    <div class="login_form_container">
        <div class="login_form">
          <h2>User Sign Up</h2>
          <div class="input_group">
            <i class="fa fa-user"></i>
            <input type="text" name="user_name" placeholder="Username" class="input_text" autocomplete="off"/>
          </div>
          
          <div class="input_group">
            <i class="fa fa-unlock-alt"></i>
            <input type="password" name="password" placeholder="Password" class="input_text"  autocomplete="off" />
          </div>
          <div class="input_group">
            <i class="fa fa-unlock-alt"></i>
            <input type="password" name="password1" placeholder="Confirm Password" class="input_text"  autocomplete="off" />
          </div>
          <div class="sub">
          <input class="btn btn-primary " type="submit" value="Submit">
          </div>
          <a href="user_login.php" style="color:#2980b9">Click to Login</a><br><br>
          <a href="login.php" style="color:#2980b9">Admin login</a><br><br>
        </div>
      </div>



		</form>
	</div>
</body>
</html>