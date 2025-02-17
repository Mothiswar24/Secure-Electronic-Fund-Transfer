<?php
include "database.php";
function login($username,$password){
        $conn = database::pdo_getconnection();
        $stmt=$conn->prepare("select * from userlogin where userid='$username'");
        $stmt->execute();
        $result = $stmt->fetchAll();
       // print_r ($result[0]['password']);
        //print_r($result[0]['userid']);
       
        $password1=hash('sha512',$password);
       
       // print_r($password1);
        if (count($result) == 1) {
            if (password_verify($password1,$result[0]['password'])) {
              // echo"welcome<br>";
                return true;
            }
        }
         else {
           // echo"not welcome<br>";
            return false;
        }
        }
        //login("mogith","!@#$%^&*(");
        ?>