<html>
    <head>
        <title> mail</title>
</title>
<?php

// Declare variables
//$name = $_POST["name"];
//$email = $_POST["email"];
//$phone = $_POST["phone"];
//$subject = $_POST["subject"];
//$message = $_POST["message"];
$name ='YOUR BANK';
$email =$_POST["mailid"];
//$phone = '6369910562';
$subject = 'Do not share your otp to anyone';
//$message = rand(1000, 9999);
class ExampleClass {
    public static $t=0;

    public static function generateRandomNumber() {
        self::$t = rand(1000, 9999);
        return ExampleClass::$t;
    }
}
$r=ExampleClass::generateRandomNumber() ;
$myObj = new stdClass();
$myObj->name = $r;

$myJSON = json_encode($myObj);
file_put_contents('C:\myfolder\iss project\sample.json',$myJSON);
//$intial=$message;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

//load composer's autoloader
//require 'vendor/autoload.php'

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mogith.p2021@vitstudent.ac.in';                     //SMTP username
    $mail->Password   = 'vgbd xoyz ifgn epwa ';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;   
   // $mail->From = MAIL_SYSTEM;
    //$mail->FromName = MAIL_SYSTEM_NAME;          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mogith.p2021@vitstudent.ac.in', $name);
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                 //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "Your One Time Password is ".$r;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ?>
     <script>
        window.location.href="otpverify1.php";</script>
<?php
    //echo 'Message has been sent';
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
/*
$encryptionKey = "YourSecretKey";
function encryptOTP($otp, $key) {
    $iv = random_bytes(16); // Initialization Vector
    $cipherText = openssl_encrypt($otp, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $cipherText);
}

$encryptedOTP = encryptOTP($message, $encryptionKey);
*/
?>
</html>