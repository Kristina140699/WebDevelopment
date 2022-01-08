<?php
session_start();
?>

<html>
<head>
    <style>
      body{background-image: url("green.jpg");
        width: 100%;
        
  
  background-attachment: fixed;
  }
  .bgColor{
    background-color:#fff;
    margin:30px;
    padding: 2px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}

       a{text-decoration: none;}
    </style>
</head>
    <body>
    <div style="background-color:rgb(255, 255, 255, 0.6);
       width:88%; margin:20px;padding: 15px;">
       <div class="bg" >
    <?php
echo"<h2><center>Welcome, ". $_SESSION["nameFirst"]."!</center></h2>";
echo"<br>First Name is: ". $_SESSION["nameFirst"];
echo"<br>Last Name is: ". $_SESSION["nameLast"];
echo"<br>Email id is: ". $_SESSION["email"];
echo"<br>City is: ". $_SESSION["City"];
echo"<br>Contact Number is: ". $_SESSION["Phone"];


?><br/><br/>
<button><a href="PHP_eval3_2.php">
    LogOut </a></button>
</body>
     </div></div>
    </html>