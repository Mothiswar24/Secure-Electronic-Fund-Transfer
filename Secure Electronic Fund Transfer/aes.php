<html>
    <head>
        <title> Payment SucessFull</title>
</title>
</head>
<body>
<?php

function encryptOTP($otp, $key) {
    $iv = random_bytes(16); // Initialization Vector
    $cipherText = openssl_encrypt($otp, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $cipherText);
}

function decryptOTP($encryptedOTP, $key) {
    $data = base64_decode($encryptedOTP);
    $iv = substr($data, 0, 16);
    $cipherText = substr($data, 16);
    return openssl_decrypt($cipherText, 'aes-256-cbc', $key, 0, $iv);
}



$encryptionKey = "YourSecretKey";


$sam=file_get_contents("C:\myfolder\iss project\sample.json");
$array=json_decode($sam,true); 
$otp=$array['name'];

//$enteredOTP= askQuestion("enter the otp:");
$enteredOTP=$_POST['otp3'];
//$enteredOTP=8730;
//echo"hello $enteredOTP";
// Example OTP decryption and verification
$encryptedOTP = encryptOTP($enteredOTP, $encryptionKey);
$decryptedOTP = decryptOTP($encryptedOTP, $encryptionKey);
//echo "decrypted otp: $decryptedOTP";
 //function check(){
if ($decryptedOTP == $otp) {
    ?>
    <script>
         window.location.href="final.php";
     </script>

    <?php
} else {
    ?>
    <script>
    window.location.href="otpverify1.php";
</script>
<?php
}
 //}
?>
</body>
</html>