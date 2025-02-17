<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
<?php
include "database.php";

if(isset($_POST['password']) and isset($_POST['ac']) && isset($_POST['username1'])){
if(signup($_POST['username1'],$_POST['password'],$_POST['ac'])){
?>

            <script>
                window.location.href = "login1.html"
            </script>
<?php
   }
}else{
?>
 <script>
                window.location.href = "login1.html"
            </script>
<?php
   }
?>

            </body>
             </html>