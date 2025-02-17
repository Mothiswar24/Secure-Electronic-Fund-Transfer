<html>
    <head>
        <title>otpverify</title>
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="otpverify.css"/>
       

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <style>
       /*     *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }
           .popup{
            width:400px;
            background:#4d84e2;
            border-radius:6px;
            position: absolute;
            top:0;  /*20%
            left:50%;
            transform:translate(-50%,-50%) scale(0.1);
            text-align:center;
            padding:0 30px 30px;
            color: #fff;
            visibility:hidden;
            transition: transform 0.4s,top 0.4s;
            overflow:auto;
           }
           .open{
            visibility:visible;
            top: 20%;
            transform:translate(1%,1%) scale(1);
           }
           .popup img{
            width :100px;
            margin-top:-10%;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
           }
           .popup h2{
            font-size:38px;
            font-weight:500;
            margin:30px 0 10px;
           }
           .btn1{
            width:100%;
            margin-top:50px;
            padding:10px 0;
            background:10px 0;
            background:#fff;
            color:#36454f;
            border:0;
            outline:none;
            font-size:18px;
            border-radius:4px;
            cursor:pointer;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
           }
          */
        </style>
</head>
<body>
<div class="container">
    <form action="aes.php" name="algos"  method="post" onsubmit="return check()">
       
        <div class="start" id="start">
            <h2 class="title">THYROID DISEASE PREDICTION </h2>
            <p id="error"></p>
            <div class="input-field">
            <i class="fa-solid fa-envelope"></i> 
            <input class="mail" name="mailid" type="text" placeholder="email">    
            </div>
            <div class="input-field">
                <i class="fa-solid fa-piggy-bank"></i>
                <input class="ac" name="accountno" type="text" placeholder="Recipient Account Number"><br>
            </div>
            <div class="input-field">
             <i class="fa-solid fa-circle-check"></i>
                <input name="otp3" type="text"  placeholder="Enter OTP">
            </div>
            <div class="input-field">
                <i class="fa-brands fa-paypal"></i>
                <input name="enterotp" type="text" placeholder="Enter Amount">
            </div>
            <!--<button type="button" class="btn" onclick="check()">Proceed</button>-->
            <input class="btn" name="otp" type="submit"class="otpbtn" value="Proceed" onclick="check()">
         <!--   </div>
        </div>-->
    </div>
<!--
<div class="popup" id="popup">
    <img src="pictures/green.png">
    <h2> Thank You!</h2>
    <p> Transaction Proceed Successfully.Thanks!</p>
   <--<button type="button" onclick="closepopup()">OK</button> 
    <input type="submit" class="btn1" value="OK" onclick="closePopup()">-->
</div>
</form>
</div>

<script>
    let popup=document.getElementById("popup");
    let popup1=document.getElementById("start");
    function openPopup(){
        popup.classList.add("open");
      popup1.classList.add('close');
    }
    function closePopup(){
        popup.classList.remove("open");
        window.location.href="login1.php";
        
    }

     function check(){
        if(document.algos.mailid.value==""){
            document.getElementById("error").innerHTML="*Enter The Email";
            return false;
        }
        else if(document.algos.accountno.value==""){
            document.getElementById("error").innerHTML="*Enter The Account Number";
            return false;
        }
        else if(document.algos.otp3.value==""){
            document.getElementById("error").innerHTML="*Enter The Received OTP";
            return false;
        }
        else if(document.algos.enterotp.value==""){
            document.getElementById("error").innerHTML="*Enter The Amount";
            return false;
        }
     }
    </script>
</body>
</html>