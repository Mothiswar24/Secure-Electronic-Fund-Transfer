<html>
    <head>
        <title>otpenter</title>
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="otpenter.css"/>
        <style>
           
        </style>
</head>
<body>
    <form action="ot5.php" name="otpenters" method="post" onsubmit="return check()">
        <div class="container">
            <div class="start">
            <h2 class="title">Fund transfer </h2>
            <p id="error"></p>
            <div class="input-field">
            <i class="fa-solid fa-envelope"></i> 
            <input class="mail" name="mailid" type="text" placeholder="email">    
            </div>
            <div class="input-field">
                <i class="fa-solid fa-piggy-bank"></i>
                <input class="ac" name="accountno" type="text" placeholder="Recipient Account Number"><br>
            </div>
            <input class="btn" name="otp" type="submit"class="otpbtn" value="send OTP" onclick="check()">
            </div>
        </div>
</form>
<script>
    function check(){
        if(document.otpenters.mailid.value==""){
            document.getElementById("error").innerHTML="*Enter The Email";
            return false;
        }
        else if(document.otpenters.accountno.value==""){
            document.getElementById("error").innerHTML="*Enter The Recipient Account Number";
            return false;
        }
    }
</script>

</body>

    </html>