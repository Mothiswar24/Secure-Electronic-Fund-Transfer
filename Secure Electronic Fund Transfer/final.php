<html>
    <head>
        <title>final page</title>
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <style>
            .container:before {
    content: "";
    position: absolute;
    height: 2000px;
    width: 2000px;
    top: -10%;
    right: 48%;
    transform: translateY(-50%);
    background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
    /*transition: 1.8s ease-in-out;*/
    border-radius: 50%;
    z-index: 6;
  }
    .popup{
    width:400px;
    background:#4d84e2;
    border-radius:6px;
    position: absolute;
    top:0;  
    left:50%;
    top: 20%;
    transform:translate(1%,1%) scale(1);
    text-align:center;
    padding:0 30px 30px;
    color: #fff;
    
    transition: transform 0.4s,top 0.4s;
    overflow: auto;
   }
   .close{
    visibility: hidden;
    top: 20%;
    transform:translate(1%,1%) scale(1);
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
            </style>
    </head>
    <body>
        <div class="container">
        <div class="popup" id="popup">
            <img src="pictures/green.png">
            <h2> Thank You!</h2>
            <p> Transaction Proceed Successfully.Thanks!</p>
          <!--  <button type="button" onclick="closepopup()">OK</button> -->
           <input type="submit" class="btn1" value="OK" onclick="closePopup()">

</div>
</div>
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
        window.location.href="homepage.html";

         }

            </script>
    </body>
</html>