<?php

/*
class ExampleClass {
    public static $t;

    public static function generateRandomNumber() {
        self::$t = rand(1000, 9999);
    }
}

// Usage
//$r=ExampleClass::$t;

echo ExampleClass::$t;*/

$sam=file_get_contents("C:\myfolder\iss project\sample.json");
$array=json_decode($sam,true); 
$otp=$array['name'];
print($otp)
?>

