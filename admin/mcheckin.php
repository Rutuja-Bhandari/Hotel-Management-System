<?php
session_start();
include("connections.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // echo "Connection is obtained successfully";
    // $booking_id;
    $membership_id = $_POST["membership_id"];
    $room_no = $_POST["room_no"];
    $arrival_date = $_POST["arrival_date"];

    $query = " INSERT INTO `membership_record` ( `member_id`, `room_no`,`arrival_date`,`status`) VALUES ('$membership_id','$room_no','$arrival_date','Check In')";
    mysqli_query($con, $query);
    echo "alert('Congratulation! Your booking is confirmed!!')";
    header("location:membership.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>heck In</title>
    <link rel="stylesheet" href="css/member.css">
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
        <span>C</span>
        <span>H</span>
        <span>E</span>
        <span>C</span>
        <span>K</span>
        <span class="space"></span>
        <span>I</span>
        <span>N</span>
    </h1>


    <div id="main-form">
        <!-- <p id="description"></p> -->
        <form id="survey-form" method="post">
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Membership Id: </label>
                </div>
                <div class="rightTab">
                    <input name="membership_id" autofocus type="text" name="name" id="name" class="input-field"
                        placeholder="Enter your membership id" required>
                </div>
            </div>



            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Room no:</label>
                </div>
                <div class="rightTab">
                    <input name="room_no" autofocus type="text" min="0" name="name" id="name" class="input-field"
                        placeholder="Enter Room number " required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Arrival date: </label>
                </div>
                <div class="rightTab">
                    <input name="arrival_date" autofocus type="date" name="name" id="name" class="input-field"
                        placeholder="Enter arrival date" required>
                </div>
            </div>







            <button id="submit" type="submit">Confirm</button>
        </form>
    </div>



</body>

</html>