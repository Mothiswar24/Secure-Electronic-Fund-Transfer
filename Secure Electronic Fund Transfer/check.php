<html>
<head>
    <title> hello</title>
</head>
<?php

include "logincheck.php";
if(isset($_POST['username0']) && isset($_POST['Password0'])){
   // echo "hi";
    if(login($_POST['username0'],$_POST['Password0'])){
        ?>
    <script>
        window.location.href="homepage.html";</script>
        <?php
        //echo "helo mogith ";
    }
}
else{
    echo "not welcome";
   /* */
}
/*?>
    <script>
        widnow.loaction.href="login.html";</script>
    <?php*/
?>
</html>

