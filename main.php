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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Hotel Management System</title>
  </head>
  <body>


    <header>
    <!--######################## Navigation Bar######################################### -->
  
    <div class="navIndex ">
    <nav class="navbar navbar-expand-lg   ">
      <a class="navbar-brand navcolor" href="#">JW Marriott Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link navcolor" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="#">Room Type</a>
            </li>
          </ul>
          
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <a class="btn btn-primary" href="user_login.php" role="button">Login</a>
          </div>
        </div>
      </nav>
    </div>
    </header>

images/
    <!--######################## Crousal  ######################################### --> 
   
    <div class="coursal" >
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/swimming2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Swimming pool</h3>
              <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/mainpagebedroom2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Luxuru bedrooms</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/hotel5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Best views</h3>
              <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- ##################### About ##################-->

    <div class="container">
      <h1 class="aboutcolour"> About</h1>
      <p >Welcome to The JW Marriott, a luxurious boutique hotel located in the Pune. Our hotel offers a unique blend of modern amenities and timeless charm, with elegant decor and world-class service that will make your stay unforgettable.

Each of our guest rooms has been designed with your comfort in mind, featuring plush bedding, high-speed internet, and a flat-screen TV with premium channels. Many rooms also offer stunning views of the city skyline or the nearby harbor.

When it comes to dining, The JW Marriott has you covered. Our on-site restaurant, The Veranda, serves up delicious cuisine using only the freshest, locally-sourced ingredients. For a more casual dining experience, visit our cozy cafe, where you can enjoy a coffee or tea and a light snack.

Looking to stay active during your trip? Our fitness center is fully equipped with state-of-the-art equipment, or you can take a dip in our indoor pool or relax in the sauna. If you're in town for business, we also offer a range of meeting and event spaces that can accommodate groups of all sizes.

Located just steps from some of the city's top attractions, including the renowned Museum of Modern Art and the bustling shopping district, The Amaranth is the perfect home base for your next urban adventure. Book your stay today and experience the ultimate in luxury and sophistication.</p>
    </div>


    <!-- ###################### Hotel Type ######################-->
  <div class="container1">

    <h1 class="roomsandrates">Rooms and Rates</h1>


    <div class="row featurette hoteltype">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading roomtypecolor"><b>Standard Rooms </b></h2>
        <p class="lead" style="color:black"><b>1 extra large beds.<br>
                        This room has a tea/coffee maker, sofa and air conditioning.<br>
                        <b>Ameneties</b><br>
                        Room : 38 m²<br>
                        City view<br>
                        Air conditioning<br>
                        Ensuite bathroom<br>
                        Flat-screen TV<br>
                        Free WiFi<br></b></p>
        <div class="booknow">
          
          <button method="post" id="standard" type="submit" class="btn btn-secondary btn_booknow" data-toggle="modal" data-target="#exampleModalCenter"><a style="color: white;" >Check Availability</a></button>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/stdroom.jpg" alt="">
      </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Standard Room</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body" id="availability_standard">
        
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary " data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>





    <div class="row featurette hoteltype">
      <div class="col-md-7">
        <h2 class="featurette-heading roomtypecolor"><b>Delux Rooms</b> </h2>
        <p class="lead" style="color:black"><b>1 extra large beds.<br>
                        This room has a tea/coffee maker, sofa and air conditioning.<br>
                        <b>Ameneties</b><br>
                        Room : 38 m²<br>
                        City view<br>
                        Air conditioning<br>
                        Ensuite bathroom<br>
                        Flat-screen TV<br>
                        Free WiFi<br></b></p>
        <div class="booknow">
          <button method="post" id="delux" type="submit" class="btn btn-secondary btn_booknow" data-toggle="modal" data-target="#exampleModalCenter1"><a style="color: white;" >Check Availability</a></button>
        </div>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/deluxe.jpg" alt="">
      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Delux Room</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body" id="availability_delux">
        
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>




    <div class="row featurette hoteltype">
      <div class="col-md-7 order-md-2 typetext">
        <h2 class="featurette-heading roomtypecolor"><b>Double Delux Rooms.</b></h2>
        <p class="lead" style="color:black"><b>2 extra large beds.<br>
                        This double room has a tea/coffee maker, sofa and air conditioning.<br>
                        <b>Ameneties</b><br>
                        Room : 38 m²<br>
                        City view<br>
                        Air conditioning<br>
                        Ensuite bathroom<br>
                        Flat-screen TV<br>
                        Free WiFi<br></b></p>
        <div class="booknow">
          
          <button method="post" id="double_delux" type="submit" class="btn btn-secondary btn_booknow" data-toggle="modal" data-target="#exampleModalCenter2"><a style="color: white;" >Check Availability</a></button>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/double.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Double Delux Room</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body" id="availability_double_delux">
        
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>


    
<!-- ################################Gallery start########################################33 -->
  <p class="heading"> <b>Our Gallery</b> </p>
  <div class="gallery-image">
    <div class="img-box">
      <img src="images/gal1.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Bedrooms</p>
          
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/gal2.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Luxury looks</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/gal3.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Asthetic furniture</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="gal4.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Best views</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/gal5.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Dinning room</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/gal6.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Sitting area</p>
        </div>
      </div> 
    </div>
  </div>
<!-- ##########################galleryend#################### -->

<!-- ##############################facilities star############################ -->




<section class="services" id="services">
  <p class="heading"> <b>Services</b> </p>

  

  <div class="box-container">

      <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>Affordable Hotels</h3>
          <p>A hotel that provides minimum amenities and services for a lower price than a regular hotel in the area. This type of hotel provides clean rooms that are safe and meet the basic needs of a guest. Extra amenities may be available, but for an extra cost.</p>
      </div>


      <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>Food and Drinks</h3>
          <p>Exploring different cuisines has always been associated with moments of leisure and travel, but the concept of food tourism has recently evolved to encompass activities beyond the plate. We offer various different types of cuisines with us.</p>
      </div>



      <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>Around the world</h3>
          <p>A round-the-world trip is truly one of the most unforgettable travel experiences. Visiting multiple countries and continents, you gain a deep understanding of hundreds of cultures, and forge wonderful connections with people around the world.</p>
      </div>

      <div class="box">
          <i class="fas fa-fire"></i>
          <h3>Camp Fire</h3>
          <p>Want to enjoy campfire? You are at right place. You can enjoy the campfire at night with your family and friends. </p>
      </div>

    
  </div>


</section>







<!-- ####################facilities end############33 -->


<!-- ##########################footer start################### -->
  <footer class="footer">
    <div class="container7">
      <div class="row">
        <!-- <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div> -->
        <div class="footer-col">
          <h4>About us</h4>

          <!-- <p>Rutuja Bhandari<br>Minal Chaudhari<br>Devesh Zinzuwadia<br>Sanket Dhakane</p> -->
          <a href="https://www.linkedin.com/in/rutuja-bhandari-560571249">Rutuja Bhandari</a><br>
          <a href="https://www.linkedin.com/in/minal-chaudhari-1b4b2b22a">Minal Chaudhari</a><br>
          <a href="https://www.linkedin.com/in/devesh-zinzuwadia-613b55243">Devesh Zinzuwadia</a><br>
          <a href="https://www.linkedin.com/in/sanket-dhakane-5a3607226">Sanket Dhakane</a><br>
          
          
          
        </div>
        <div class="footer-col">
          <h4>Our Highlights</h4>
          <ul>
            <li><a href="#">Sea faced rooms</a></li>
            <li><a href="#">Swimming pool</a></li>
            <li><a href="#">Gym access</a></li>
            <li><a href="#">Spa</a></li>
            <li><a href="#">Amazing cuisin</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Our branches</h4>
          <ul>
            <li><a href="#">Pune</a></li>
            <li><a href="#">Mumbai</a></li>
            <li><a href="#">Kolkata</a></li>
            <li><a href="#">Hyderabad</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
 </footer>



    <!-- <footer>
      <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus autem a dolorum, fugit ad rem recusandae consequuntur architecto, quaerat unde consectetur? Debitis, nemo hic. Dolore, quasi deleniti. Nemo quas velit voluptatem deserunt, obcaecati illo labore illum asperiores quos nisi culpa. Sed asperiores a libero vero quibusdam, possimus at voluptatem laudantium.
    </p>
    </footer> -->


<script>
    document.getElementById("availability_standard").innerHTML = "<?php
$room_type="Standard";
$query="select 5- (select count(room_type) from rooms,billing where room_id=billing_id and room_type='$room_type' and Status in ('Booked','Check In'))";
$result = mysqli_query($con,$query);
$final_result1=mysqli_fetch_assoc($result);
foreach ($final_result1 as $value) {
    echo $value;

} 
echo " rooms are available";

echo"<br> Room Numbers are ";
$query1="select room_details.room_no from room_details where room_type='$room_type' and room_details.room_no not in (select room_no from rooms,billing where room_id=billing_id and room_type='$room_type' and Status in ('Booked','Check In'))";
    $result1 = mysqli_query($con,$query1);
    while ($row = mysqli_fetch_assoc($result1)) {
        echo $row["room_no"] . " , ";
    }
?>";

document.getElementById("availability_delux").innerHTML = "<?php
$room_type="Delux";
$query1="select 5- (select count(room_type) from rooms,billing where room_id=billing_id and room_type='Delux' and Status in ('Booked','Check In'))";
$result1 = mysqli_query($con,$query1);
$final_result2=mysqli_fetch_assoc($result1);
foreach ($final_result2 as $value1) {
    echo $value1;

} 
echo " rooms are available";

echo"<br> Room Numbers are ";
$query1="select room_details.room_no from room_details where room_type='$room_type' and room_details.room_no not in (select room_no from rooms,billing where room_id=billing_id and room_type='$room_type' and Status in ('Booked','Check In'))";
    $result1 = mysqli_query($con,$query1);
    while ($row = mysqli_fetch_assoc($result1)) {
        echo $row["room_no"] . " , ";
    }
?>";

document.getElementById("availability_double_delux").innerHTML = "<?php
$room_type="Double Delux";
$query="select 5- (select count(room_type) from rooms,billing where room_id=billing_id and room_type='$room_type' and Status in ('Booked','Check In'))";
$result2 = mysqli_query($con,$query);
$final_result3=mysqli_fetch_assoc($result2);
foreach ($final_result3 as $value3) {
    echo $value3;

} 
echo " rooms are available";

echo"<br> Room Numbers are ";
$query1="select room_details.room_no from room_details where room_type='$room_type' and room_details.room_no not in (select room_no from rooms,billing where room_id=billing_id and room_type='$room_type' and Status in ('Booked','Check In'))";
    $result1 = mysqli_query($con,$query1);
    while ($row = mysqli_fetch_assoc($result1)) {
        echo $row["room_no"] . " , ";
    }
?>";

</script>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>