<?php 
session_start();
include ("connections.php");

// $user_data = check_login();

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted
        $user_name=$_POST["user_name"];
        $password=$_POST["password"];

        if(!empty($user_name) && !empty($password))
        {
            //read database
            
            $query = "select * from login where user_name = '$user_name' limit 1";
            $result = mysqli_query($con,$query);
			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
        		{
            		$user_data=mysqli_fetch_assoc($result);
            		if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						echo"Login Successfully";
						header("Location: admin/index.php");
						die;
					}
        		}
			}

            echo "<script>alert('Wrong user name and password.')</script>";
        }
        else
        {
          echo "<script>alert('Wrong user name and password.')</script>";
        }
    }

?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>


	
	<div id="box">
		
		<form method="post">



    <div class="login_form_container">
        <div class="login_form">
          <h2>Login</h2>
          <div class="input_group">
            <i class="fa fa-user"></i>
            <input type="text" name="user_name" placeholder="Username" class="input_text" autocomplete="off"/>
          </div>
          
          <div class="input_group">
            <i class="fa fa-unlock-alt"></i>
            <input type="password" name="password" placeholder="Password" class="input_text"  autocomplete="off" />
          </div>
          <div class="sub">
          <input class="btn btn-primary " type="submit" value="Submit">
          </div>
        </div>
      </div>



		</form>
	</div>
</body>
</html>
</html>