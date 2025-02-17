
<?php

// Declare variables
//$name = $_POST["name"];
//$email = $_POST["email"];
//$phone = $_POST["phone"];
//$subject = $_POST["subject"];
//$message = $_POST["message"];
$name ='YOUR BANK';
//$email =$_POST["mailid"];
$email="mogith.p2004b1@gmail.com";
//$email ="mogith.p2004b1@gmail.com";
//$phone = '6369910562';
$subject = 'Do not share your otp to anyone';

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
echo $r;
//global $message;
//$message = rand(1000, 9999);

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
    $mail->Body    = $r;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   

    /*
function encryptOTP($otp, $key) {
    $iv = random_bytes(16); // Initialization Vector
    $cipherText = openssl_encrypt($otp, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $cipherText);
}

function decryptOTP($encryptedOTP, $key) {
    echo "firstotp =".$encryptedOTP."\n\n";
    $data = base64_decode($encryptedOTP);
    echo "seconddata=".$data."\n";
    $iv = substr($data, 0, 16);
    echo "mogith=".$iv."\n";
    $cipherText = substr($data, 16);
    echo $cipherText;
    return openssl_decrypt($cipherText, 'aes-256-cbc', $key, 0, $iv);
}

$encryptionKey = "YourSecretKey";

$otp= $initial;
echo $otp;
//$otp=generateOTP();
//$enteredOTP= askQuestion("enter the otp:");
echo"genetred otp $otp";
$enteredOTP=$_POST['otp3'];
echo"hello $enteredOTP";
//$enteredOTP=$otp;
$encryptedOTP = encryptOTP($enteredOTP, $encryptionKey);
echo "Encrypted OTP: $encryptedOTP\n";
// Example OTP decryption and verification
$decryptedOTP = decryptOTP($encryptedOTP, $encryptionKey);
echo "decrypted otp: $decryptedOTP";

if ($decryptedOTP == $otp) {
    echo "OTP is valid!\n";
} else {
    echo "Invalid OTP!\n";
}

*/

}  //echo 'Message has been sent';
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
