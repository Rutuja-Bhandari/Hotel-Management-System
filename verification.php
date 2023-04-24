<?php session_start() ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Verification</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Verification Account</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Verification Account</div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">OTP
                                        Code</label>
                                    <div class="col-md-6">
                                        <input type="text" id="otp" class="form-control" name="otp_code" required
                                            autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" value="Verify" name="verify">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
</body>

</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
include('connection1.php');
if (isset($_POST["verify"])) {
    $otp = $_SESSION['otp'];
    $email = $_SESSION['mail'];
    $otp_code = $_POST['otp_code'];

    if ($otp != $otp_code) {
        ?>
        <script>
            alert("Invalid OTP code");
        </script>
        <?php
    } else {
        mysqli_query($con, "UPDATE login SET status = 1 WHERE email = '$email'");
        // $mail = new PHPMailer();
        // $mail->IsSMTP();
        // $mail->SMTPDebug = 0;
        // $mail->SMTPAuth = TRUE;
        // $mail->SMTPSecure = "tls";
        // $mail->Port = 587;
        // $mail->Host = "smtp.gmail.com";
        // $mail->Username = "devesh.22110833@viit.ac.in";
        // $mail->Password = "devesh12@&";
        // $mail->IsHTML(true);
        // $mail->AddAddress("$email", "Hello");
        // $mail->SetFrom("devesh.22110833@viit.ac.in", "Devesh");
        // $mail->Subject = "JW Marriott Hotel";
        // $content = "Your booking is confirmed ";

        // $mail->MsgHTML($content);
        // if (!$mail->Send()) {
        //     echo "Error while sending Email.";
        //     var_dump($mail);
        // } else {
        //     echo "Email sent successfully";
        // }
        ?>
        <script>
            alert("Verfiy account done, you may sign in now");
            window.location.replace("user_login.php");
        </script>
        <?php
    }

}

?>