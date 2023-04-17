<?php
session_start();
include ("connections.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Hotel Management System</title>
  </head>
  <body>
    <script src="details.js"></script>

    <header>
    <!--######################## Navigation Bar######################################### -->
  
    <div class="navIndex ">
    <nav class="navbar navbar-expand-lg   ">
      <a class="navbar-brand navcolor" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link navcolor" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link navcolor" href="membership.php">membership page <span class="sr-only">(current)</span></a>
            </li>
            </ul>
          
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <a class="btn btn-primary" href="roomdetails.php" role="button" >Entries details</a>
          </div>
          </div>
        </div>
      </nav>
    </div>
    </header>


    <h1 class="heading">
        <span >B</span>
        <span >O</span>
        <span >O</span>
        <span >K</span>
        <span >I</span>
        <span >N</span>
        <span >G</span>
        <span >S</span>
    </h1>
                                        
    <div class="panel-body booking">
                      <div class="table-responsive">
                      <table class="table">
                      <thead>
                      <tr>
                      <th>Membership Id </th>
                      <th>Name</th>
                      <th>Aadhar No</th>
                      <th>Email Id</th>
                      <th>Gender</th>
                      <th>Phone no</th>
                      <th>Address</th>
                      <th>Room Number</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									$tsql = "select membership_id,first_name,last_name,aadhar,email,gender,phone_no,address,room_no from membership";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{	
										// $co =$trow['stat']; 
										// if($co=="Not Conform")
										// {
											echo"<tr>
												<th>".$trow['membership_id']."</th>
												<th>".$trow['first_name']." ".$trow['last_name']."</th>
												<th>".$trow['aadhar']."</th>
                                                <th>".$trow['email']."</th>
                                                <th>".$trow['gender']."</th>
												<th>".$trow['phone_no']."</th>
                                                <th>".$trow['address']."</th>
												<th>".$trow['room_no']."</th>
												
												</tr>";
										// }	
									
									}
									?>
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>