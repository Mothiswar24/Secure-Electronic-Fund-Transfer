<?php
include "database.php";
function signup($ac,$username1,$password)
{
    try {
        $conn=database::pdo_getconnection();
        $option=['cost'=>8];
        $password1=hash('sha512',$password);
        $password_hashed = password_hash($password1, PASSWORD_DEFAULT, $option);
        $sql="INSERT INTO `userlogin`(`userid`,`password`,`accountnumber`) VALUES
        ('$username1','$password_hashed','$ac')";
        //print($sql);
        return $conn->exec($sql);
    }
    catch (exception $e){
        echo $e->getMessage();
    }
}
//signup("123","mothishwar","741852");
?>