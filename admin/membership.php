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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Membership</title>
  </head>
  <body>


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
            <li class="nav-item">
              <a class="nav-link navcolor" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="#">Room Type</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="membershipallbooking.php">All bookings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="roomdetails.php">Checkin Checkout details</a>
            </li>
      </li>
          </ul>
          
          <!-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown"> -->
          <a class="btn btn-primary" href="mcheckin.php" role="button">Check In</a>
          <a class="btn btn-primary" href="mcheckout.php" role="button">Check Out</a>
          <a class="btn btn-primary" href="form_membership.php" role="button">Book Now</a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Check availability
</button>

          <!-- </div> -->
        </div>
      </nav>
    </div>
    </header>


    


    <!-- ##################### About ##################-->

    <div class="container">
      <h1 class="aboutcolour"> About</h1>
      <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolore ullam quo dolorum veniam molestiae, ea optio amet sint porro harum nobis minima maiores odit, suscipit perferendis dolores incidunt officia quidem eaque commodi, ad qui. Laborum dolorum consequatur et odio, maiores totam aliquam, recusandae consectetur officiis unde saepe fuga minima architecto omnis quod. Praesentium voluptate dolorum, quasi iste perspiciatis deleniti exercitationem, numquam quia odio, ea iure accusamus reprehenderit maiores ullam voluptatibus voluptatem magnam dignissimos! Ducimus sint earum corrupti vel! Est assumenda perferendis minima corporis atque impedit illo asperiores esse velit, maiores cumque ab eos pariatur beatae quis. Natus ipsam, reiciendis quas dolorem tempora similique consectetur architecto neque delectus. Minus molestias molestiae amet cupiditate odit. Eius quam iste id adipisci veritatis minima consequuntur molestiae. Architecto quasi, explicabo dolorum exercitationem perspiciatis, molestias deleniti mollitia repellendus, dolore dolor ex consectetur consequuntur. Dicta, aperiam impedit quod delectus iste repudiandae magnam accusantium ipsam expedita iure sapiente amet facere id ducimus sunt doloremque assumenda odit? Expedita saepe commodi, quibusdam hic nesciunt dolor laudantium dignissimos dolorum eos soluta amet perferendis assumenda ipsa sit tempora sequi quasi reiciendis deserunt earum, quisquam blanditiis dolores illo! At magni praesentium, libero numquam voluptas alias obcaecati sequi consectetur doloribus est amet, nemo nobis atque iusto non nostrum! Eaque molestias illum esse temporibus placeat est veniam magnam cumque voluptas minima ab iste officiis, nam atque at modi nemo omnis numquam molestiae repudiandae earum! Obcaecati aut natus dolor rerum! Amet laboriosam unde ullam quae voluptatem. Sed earum eius quisquam. Eos, deserunt. Officiis dicta eligendi esse perferendis fugit ad repellat mollitia eum quaerat. Odio dolorum consectetur tenetur placeat ut ad ipsam, beatae similique laudantium facilis nostrum, in saepe quam corporis ipsa debitis. Dolores ipsum et fugiat voluptates ex, architecto deserunt incidunt placeat distinctio. Similique maiores voluptate ea cupiditate magni praesentium! Dicta consequuntur nostrum quis earum.</p>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Royal Suite</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="result">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- ################################Gallery start########################################33 -->
  <p class="heading"> <b>Our Royal Suite</b> </p>
  <div class="gallery-image">
    <div class="img-box">
      <img src="images/royal2.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Sitting area</p>
          
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/royal3.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Swimming pool</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/royal4.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Luxury royal rooms</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/royal5.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Drawing room</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/royal6.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Asthetic furniture</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/royal7.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Best views</p>
        </div>
      </div> 
    </div>
  </div>
<!-- ##########################galleryend#################### -->




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

          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, obcaecati.</p>
          
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
            <li><a href="#">Hydrabad</a></li>
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
    document.getElementById("result").innerHTML = "<?php
$query="select 5- (select count(room_no) from membership)";
$result2 = mysqli_query($con,$query);
$final_result3=mysqli_fetch_assoc($result2);
foreach ($final_result3 as $value3) {
    echo $value3;

} 
echo " rooms are available";

echo"<br> Room Numbers are ";
$query1="select room_details.room_no from room_details where room_type='Royal Suite' and room_details.room_no not in (select room_no from membership )";
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