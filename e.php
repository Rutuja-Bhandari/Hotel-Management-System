<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = "devesh.22110833@viit.ac.in";
$mail->Password = "abc";

$mail->IsHTML(true);
$mail->AddAddress("$email", "$first_name $last_name");
$mail->SetFrom("devesh.22110833@viit.ac.in", "Devesh");
$mail->Subject = "Your Reservation Confirmation at JW Marriott";
$content = "<b>Dear $first_name Sir/Madam,
    We are delighted to confirm your reservation at JW Marriott for [Check-in Date] to [Check-out Date]. We appreciate your choice to stay with us and look forward to providing you with a comfortable and memorable experience.

    Below are the details of your booking:
    Name: 
    Check-in Date: $arrival_date
    Check-out Date: $leaving_date
    Room no: $room_no
    Number of Adults: $no_of_adults
    Number of Adults: $no_of_childrens
    Please note that your reservation is guaranteed, and you do not need to reconfirm it. If you need to make any changes to your reservation, please contact us at 7420054834 or reply to this email, and we will be happy to assist you.
    
    Thank you for choosing [Hotel Name], and we look forward to welcoming you soon.
    
    Best regards,
    JW Marriott Team.</b>";

$mail->MsgHTML($content);
if (!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>