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
    <title>Hotel Management System</title>
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
              <a class="nav-link navcolor" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navcolor" href="#">Room Type</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </header>


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
            <img src="swimming2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>First slide label</h3>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="hotel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="hotel5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
      <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolore ullam quo dolorum veniam molestiae, ea optio amet sint porro harum nobis minima maiores odit, suscipit perferendis dolores incidunt officia quidem eaque commodi, ad qui. Laborum dolorum consequatur et odio, maiores totam aliquam, recusandae consectetur officiis unde saepe fuga minima architecto omnis quod. Praesentium voluptate dolorum, quasi iste perspiciatis deleniti exercitationem, numquam quia odio, ea iure accusamus reprehenderit maiores ullam voluptatibus voluptatem magnam dignissimos! Ducimus sint earum corrupti vel! Est assumenda perferendis minima corporis atque impedit illo asperiores esse velit, maiores cumque ab eos pariatur beatae quis. Natus ipsam, reiciendis quas dolorem tempora similique consectetur architecto neque delectus. Minus molestias molestiae amet cupiditate odit. Eius quam iste id adipisci veritatis minima consequuntur molestiae. Architecto quasi, explicabo dolorum exercitationem perspiciatis, molestias deleniti mollitia repellendus, dolore dolor ex consectetur consequuntur. Dicta, aperiam impedit quod delectus iste repudiandae magnam accusantium ipsam expedita iure sapiente amet facere id ducimus sunt doloremque assumenda odit? Expedita saepe commodi, quibusdam hic nesciunt dolor laudantium dignissimos dolorum eos soluta amet perferendis assumenda ipsa sit tempora sequi quasi reiciendis deserunt earum, quisquam blanditiis dolores illo! At magni praesentium, libero numquam voluptas alias obcaecati sequi consectetur doloribus est amet, nemo nobis atque iusto non nostrum! Eaque molestias illum esse temporibus placeat est veniam magnam cumque voluptas minima ab iste officiis, nam atque at modi nemo omnis numquam molestiae repudiandae earum! Obcaecati aut natus dolor rerum! Amet laboriosam unde ullam quae voluptatem. Sed earum eius quisquam. Eos, deserunt. Officiis dicta eligendi esse perferendis fugit ad repellat mollitia eum quaerat. Odio dolorum consectetur tenetur placeat ut ad ipsam, beatae similique laudantium facilis nostrum, in saepe quam corporis ipsa debitis. Dolores ipsum et fugiat voluptates ex, architecto deserunt incidunt placeat distinctio. Similique maiores voluptate ea cupiditate magni praesentium! Dicta consequuntur nostrum quis earum.</p>
    </div>


    <!-- ###################### Hotel Type ######################-->
  <div class="container1">

    <h1 class="roomsandrates">Rooms and Rates</h1>


    <div class="row featurette hoteltype">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Standard Rooms <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <div class="booknow">
          <button  type="button" class="btn btn-secondary" ><a style="color: white;" href="form_standard.php">Book Now</a></button>
          <button method="post" id="standard" type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><a style="color: white;" >Check Availability</a></button>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="stdroom.jpg" alt="">
      </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Standard Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body" id="availability_standard">
        
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>





    <div class="row featurette hoteltype">
      <div class="col-md-7">
        <h2 class="featurette-heading">Delux Rooms <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <div class="booknow">
          <button  type="button" class="btn btn-secondary" ><a style="color: white;" href="form_delux.php">Book Now</a></button>
          <button method="post" id="delux" type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><a style="color: white;" >Check Availability</a></button>
        </div>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="stdroom.jpg" alt="">
      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delux Room</h5>
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
        <h2 class="featurette-heading">Double Delux Rooms. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <div class="booknow">
          <button  type="button" class="btn btn-secondary" ><a style="color: white;" href="form_doubledelux.php">Book Now</a></button>
          <button method="post" id="double_delux" type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><a style="color: white;" >Check Availability</a></button>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="stdroom.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Double Delux Room</h5>
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

    <footer>
      <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus autem a dolorum, fugit ad rem recusandae consequuntur architecto, quaerat unde consectetur? Debitis, nemo hic. Dolore, quasi deleniti. Nemo quas velit voluptatem deserunt, obcaecati illo labore illum asperiores quos nisi culpa. Sed asperiores a libero vero quibusdam, possimus at voluptatem laudantium.
    </p>
    </footer>


<script>
    document.getElementById("availability_standard").innerHTML = "<?php
$room_type="Standard";
$query="select 10- (select count(room_type) from rooms,billing where rooms.booking_id=billing.booking_id and room_type='$room_type' and leaving_date is NULL)";
$result = mysqli_query($con,$query);
$final_result1=mysqli_fetch_assoc($result);
foreach ($final_result1 as $value) {
    echo $value;

} 
echo " rooms are available";
?>";

document.getElementById("availability_delux").innerHTML = "<?php
$room_type="Delux";
$query="select 10- (select count(room_type) from rooms,billing where rooms.booking_id=billing.booking_id and room_type='$room_type' and leaving_date is NULL)";
$result = mysqli_query($con,$query);
$final_result1=mysqli_fetch_assoc($result);
foreach ($final_result1 as $value) {
    echo $value;

} 
echo " rooms are available";
?>";

document.getElementById("availability_double_delux").innerHTML = "<?php
$room_type="Double Delux";
$query="select 10- (select count(room_type) from rooms,billing where rooms.booking_id=billing.booking_id and room_type='$room_type' and leaving_date is NULL)";
$result = mysqli_query($con,$query);
$final_result1=mysqli_fetch_assoc($result);
foreach ($final_result1 as $value) {
    echo $value;

} 
echo " rooms are available";
?>";

</script>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>