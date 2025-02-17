
<?php
// include "mail.php";

//function generateOTP($length = 6) {
  //  return substr(str_shuffle(str_repeat('0123456789', 10)), 0, $length);
//}
//echo "hi";
function encryptOTP($otp, $key) {
    $iv = random_bytes(16); // Initialization Vector
    $cipherText = openssl_encrypt($otp, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $cipherText);
}

function decryptOTP($encryptedOTP, $key) {
    //echo "firstotp =".$encryptedOTP."\n\n";
    $data = base64_decode($encryptedOTP);
    echo "entered encrypted OTP".$data."\n";
    $iv = substr($data, 0, 16);
    echo "iv=".$iv."\n";
    $cipherText = substr($data, 16);
    echo "cipher text:".$cipherText;
    return openssl_decrypt($cipherText, 'aes-256-cbc', $key, 0, $iv);
}

//$enteredOTP = readline("Enter the OTP: ");
/*
function sendOTPEmail($to, $subject, $body) {
    // Replace these with your email server details
    $from = "your@example.com";
    $headers = "From: $from";

    // Use your preferred mail sending function
    mail($to, $subject, $body, $headers);
}*/

// Example key (use a strong, unique key in production)
$encryptionKey = "YourSecretKey";

// Example email address
//$email = "recipient@example.com";

// Example OTP generation
//$otp =rand(1000, 9999);
//echo "Generated OTP: $otp\n";

// Example OTP encryption
    //$encryptedOTP = encryptOTP($otp, $encryptionKey);
    //echo "Encrypted OTP: $encryptedOTP\n";

// Example email subject and body
//$subject = "Your OTP for Verification";
//$body = "Your OTP is: $encryptedOTP";

// Example sending OTP via email
//sendOTPEmail($email, $subject, $body);
//echo "OTP sent to $email\n";

// Simulate user entering OTP (you would get this from user input in a real scenario)
//$enteredOTP = readline();

$sam=file_get_contents("C:\myfolder\iss project\sample.json");
$array=json_decode($sam,true); 
$otp=$array['name'];
echo $otp;
//$otp=generateOTP();
//$enteredOTP= askQuestion("enter the otp:");
echo"genetred otp $otp";
//$enteredOTP=$_POST['otp3'];
$enteredOTP=8733;
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

?>
