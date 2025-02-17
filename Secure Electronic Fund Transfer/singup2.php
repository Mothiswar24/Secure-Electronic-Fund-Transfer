<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        include "signup.php";
        if(isset($_POST['ac']) && isset($_POST['username1'])&&isset($_POST['password'])){
        if(signup($_POST['ac'],$_POST['username1'],$_POST['password'])){
                ?>
                <script>
                    window.location.href="login1.php"
                </script>
            <?php
            }
        }
        else{
            
         ?>
           
            <script> window.location.href="login.html"</script>
            <?php
        }
        ?>
        </body>
        </html>