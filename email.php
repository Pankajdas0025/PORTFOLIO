

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Error" id="Error"> </div>
</body>
</html>
<!-- backend work with php ------------------------------------------------------------------------------->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean and validate input
$to = htmlspecialchars(trim($_POST['client_email']));
$name = htmlspecialchars(trim($_POST['client_name']));
$sms  = htmlspecialchars(trim($_POST['client_sms']));


    $errors = [];

    // Validation rules
    if (empty($name) || strlen($name) < 4) {
        $errors[] = "Name must be at least 2 characters.";
    }

    if (empty($to) || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    }

    if (empty($sms) || strlen($sms) < 5) {
        $errors[] = "Message should be at least 5 characters.";
    }

    if (!empty($errors)) {
        // Display all errors
        echo "<script>document.getElementById('Error').innerHTML = '⚠️ " . implode(" ", $errors) . "';
        window.location.href='index.php';
        </script>";
        exit();
    }

    $subject = 'Thank you for getting in touch through my portfolio!';

    // Email HTML template
    $message = "<body style='margin: 0; padding:5px; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.2; color: #333;'>
    <div style='max-width: 1000px; margin: auto; padding:10px; border-radius:0; box-shadow: 0 2px 10px rgba(0,0,0,0.1);'>
        <img src='images/preview-banner.png' height='auto' width='100%' style='margin-top: 25px; font-size:2rem;'>
        <div style='color: #ffffff; padding:10px; background: linear-gradient(to right, #6366f1,#f43f5e); text-align: center;'><h2>Hello 👋 $name</h2>
            <p style='font-size: 1rem;'>Your Message For Me</p>
            <p style='color: #e3e3e6; padding: 15px;'>$sms</p>
        </div>
        <div style='background-color: #ecf0f1; padding: 15px; border-radius: 5px; margin-top: 20px;'>
            I truly appreciate your interest. I'll review your message and respond at the earliest possible convenience.
            <p>If your inquiry is time-sensitive, you may also contact me directly <br><a href='tel:+91915572****'>+91 91557266**</a></p>
            <p>In the meantime, you're welcome to explore more of my work:</p>
            <a href='https://www.linkedin.com/in/pankaj-das-134603297/' title='Linkedin account'>Linkedin</a>
            <a href='https://github.com/Pankajdas0025' title='Github account'>Github</a>
        </div>
        <div style='margin-top: 30px; font-size: 0.9em; color: #555; border-top: 1px solid #ddd; padding: 20px;'>
            <h2>Looking forward to connecting with you.</h2>
            <p>Pankaj Kumar Das</p>
            <p>Full Stack Web Developer</p>
            <p><a href='https://www.bing.com/maps?q=kishanganj&FORM=HDRSC6&cp=26.082286%7E87.938469&lvl=11.4'>🏠 Kishanganj, Bihar (855115)</a></p>
            <a href='mailto:pd5569121@gmail.com'>📧 pd5569121@gmail.com</a>
        </div>
    </div>
    </body>";

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pd5569121@gmail.com';
        $mail->Password   = ''; // App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('pd5569121@gmail.com', 'Pankaj Kumar Das');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();

        echo "<script>document.getElementById('Error').innerHTML = '✅ Form submitted successfully!';
        window.location.href='index.php';
        </script>";
        exit();

    } catch (Exception $e) {
        echo "<script>document.getElementById('Error').innerHTML = '⚠️ Email could not be sent. Please try again later.';

        window.location.href='index.php';
        </script>";
    }
}
?>
