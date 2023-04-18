<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
session_start();
include("connections.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $aadhar_no = $_POST["aadhar_no"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];
    $room_no = $_POST["room_no"];
    $arrival_date = $_POST["arrival_date"];
    $leaving_date = $_POST["leaving_date"];
    $no_of_adults = $_POST["no_of_adults"];
    $no_of_childrens = $_POST["no_of_childrens"];
    $extra_bed= isset($_POST["extra_bed"]) ? "Yes" : "No";
    $car_parking= isset($_POST["car_parking"]) ? "Yes" : "No";
    $spa= isset($_POST["spa"]) ? "Yes" : "No";
    $gym= isset($_POST["gym"]) ? "Yes" : "No";

    $query = " INSERT INTO `booking` ( `first_name`, `middle_name`, `last_name`, `aadhar`, `email`, `gender`, `phone_no`, `no_of_adult`, `no_of_child`, `address`) VALUES ('$first_name', '$middle_name', '$last_name', '$aadhar_no', '$email', '$gender', '$phone_no', '$no_of_adults', '$no_of_childrens', '$address')";
    mysqli_query($con, $query);
    $query1 = "INSERT INTO `rooms` (`room_type`,`room_no`) VALUES ('Double Delux','$room_no')";
    mysqli_query($con, $query1);
    $query2 = "INSERT INTO `billing` ( `arrival_date`,`leaving_date`,`Status`) VALUES ('$arrival_date','$leaving_date','Booked')";
    mysqli_query($con, $query2);
    $query3 = "SELECT booking_id FROM booking WHERE booking_id IN (SELECT booking_id FROM booking WHERE booking_id > 0 )ORDER BY booking_id DESC";
    $result = mysqli_query($con, $query3);
    $row = mysqli_fetch_assoc($result);
    $booking_id = $row["booking_id"];
    $query4="INSERT INTO `facilities` ( `booking_id`,`extra_bed`, `car_parking`, `spa`, `gym`) VALUES ('$booking_id','$extra_bed', '$car_parking', '$spa', '$gym');";
    mysqli_query($con,$query4);
    echo "alert('Congratulation! Your booking is confirmed!!')";
    header("location:index.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();

    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "rutuja.22110669@viit.ac.in";
    $mail->Password = "smar418#";
    $mail->IsHTML(true);
    $mail->AddAddress("$email", "$first_name $last_name");
    $mail->SetFrom("rutuja.22110669@gmail.com", "Rutuja");
    $mail->Subject = "Your Reservation Confirmation at JW Marriott";
    $content = "<b>Dear $first_name Sir/Madam,<br>
    We are delighted to confirm your reservation at JW Marriott for $arrival_date to $leaving_date. We appreciate your choice to stay with us and look forward to providing you with a comfortable and memorable experience.<br>
    Below are the details of your booking:<br>
    Booking id : $booking_id<br>
    Name: $first_name<br>
    Check-in Date: $arrival_date<br>
    Check-out Date: $leaving_date<br>
    Room no: $room_no<br>
    Number of Adults: $no_of_adults<br>
    Number of Adults: $no_of_childrens<br>
    Please note that your reservation is guaranteed, and you do not need to reconfirm it. If you need to make any changes to your reservation, please contact us at 7420054834 or reply to this email, and we will be happy to assist you.<br>
    Thank you for choosing JW Marriott, and we look forward to welcoming you soon.<br>
    Best regards,<br>
    JW Marriott Team.</b>";

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
    } else {
        echo "Email sent successfully";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book now</title>
    <link rel="stylesheet" href="css/form_membership.css">
</head>

<body>
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


    <div id="main-form">
        <!-- <p id="description"></p> -->
        <form id="survey-form" method="post">
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* First name: </label>
                </div>
                <div class="rightTab">
                    <input name="first_name" autofocus type="text" name="name" id="name" class="input-field"
                        placeholder="Enter your First name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Middle name: </label>
                </div>
                <div class="rightTab">
                    <input name="middle_name" autofocus type="text" name="name" id="name" class="input-field"
                        placeholder="Enter your Middle name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Last name: </label>
                </div>
                <div class="rightTab">
                    <input name="last_name" autofocus type="text" name="name" id="name" class="input-field"
                        placeholder="Enter your Last name" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Address: </label>
                </div>
                <div class="rightTab">
                    <input name="address" autofocus type="text" name="name" id="name" class="input-field"
                        placeholder="Enter your address" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="email-label" for="name">* Email: </label>
                </div>
                <div class="rightTab">
                    <input name="email" type="email" name="email" id="email" class="input-field" required
                        placeholder="Enter your Email">
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="number-label" for="age">* Aadhar no: </label>
                </div>
                <div class="rightTab">
                    <input name="aadhar_no" pattern="\d{12}" autocomplete="off" title="Ten numbers" type="text"
                        id="number" class="input-field" placeholder="Enter your Aadhar no">
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Phone no: </label>
                </div>
                <div class="rightTab">
                    <input name="phone_no" pattern="\d{10}" autocomplete="off" title="Ten numbers" autofocus type="text"
                        name="name" id="name" class="input-field" placeholder="Enter your phone no " required>
                </div>
            </div>

            <div class="rowTab">
                <div class="labels">
                    <label for="userRating">* Gender: </label>
                </div>
                <div class="rightTab">
                    <ul style="list-style: none;" name="gender">
                        <li class="radio"><label><input name="gender" name="radio-buttons" value="Male" type="radio"
                                    class="userRatings">Male</label></li>
                        <li class="radio"><label><input name="gender" name="radio-buttons" value="Female" type="radio"
                                    class="userRatings">Female</label></li>
                        <li class="radio"><label><input name="gender" name="radio-buttons" value="Other" type="radio"
                                    class="userRatings">Other</label></li>
                    </ul>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* No of Adult:</label>
                </div>
                <div class="rightTab">
                    <input name="no_of_adults" autofocus type="number" min="0" name="name" id="name" class="input-field"
                        placeholder="Enter number od adult" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* No of Children:</label>
                </div>
                <div class="rightTab">
                    <input name="no_of_childrens" autofocus type="number" min="0" name="name" id="name"
                        class="input-field" placeholder="Enter number od children" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Room no:</label>
                </div>
                <div class="rightTab">
                    <input name="room_no" autofocus type="number" min="0" name="name" id="name" class="input-field"
                        placeholder="Enter Room number " required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Arrival date:</label>
                </div>
                <div class="rightTab">
                    <input name="arrival_date" autofocus type="date" min="0" name="name" id="name" class="input-field"
                        placeholder="Enter Arrival date" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label id="name-label" for="name">* Leaving date:</label>
                </div>
                <div class="rightTab">
                    <input name="leaving_date" autofocus type="date" min="0" name="name" id="name" class="input-field"
                        placeholder="Enter leaving date" required>
                </div>
            </div>
            <div class="rowTab">
                <div class="labels">
                    <label for="preferences">Facilities: </label>
                </div>
                <div class="rightTab">
                    <ul id="preferences" style="list-style: none;">
                        <li class="checkbox"><label><input name="extra_bed" value="1" type="checkbox" class="userRatings">Extra bed (Rs 15000 per bed)</label></li>
                        <li class="checkbox"><input name="car_parking" value="1" type="checkbox" class="userRatings">Car parking (Rs 300 per day)</li>
                        <li class="checkbox"><label><input name="spa" value="1" type="checkbox" class="userRatings">Spa (Rs 2800 per person)  </label></li>
                        <li class="checkbox"><label><input name="gym" value="1" type="checkbox" class="userRatings">Gym access (Rs 750 per day) </label></li>
                        
                    </ul>
                </div>
            </div>









            <button id="submit" type="submit">Confirm</button>
        </form>
    </div>



</body>

</html>