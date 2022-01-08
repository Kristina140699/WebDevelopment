<?php
session_start();
?>

<html><head>
    <style>
        .error {color: #FF0000;}
      body{background-image: url("simple.jpg");
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
       $nameErr = $emailErr = $cityErr = $phErr = "";
$nameFirst=$nameLast=$name = $email = $city = $Phone  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nameFirst"])) {
$nameErr = "Name is required";
} else {
$nameFirst = test_input($_POST["nameFirst"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$nameFirst)) {
$nameErr = "Only letters and white space allowed";
}
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nameLast"])) {
    $nameErr = "Name is required";
    } else {
    $nameLast = test_input($_POST["nameLast"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nameLast)) {
    $nameErr = "Only letters and white space allowed";
    }
    }
    }

if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}

if (empty($_POST["city"])) {
    $cityErr = "City is required";
    } else {
    $city = test_input($_POST["city"]);
    }

    if (empty($_POST["Phone_no"])) {
        $phErr = "Phone_no is required";
        } else {
        $Phone = test_input($_POST["Phone_no"]);
        }

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<h2>Student Details</h2>
<p><span class="error">* required fields</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
First Name: <input type="text" name="nameFirst">
<span class="error">* <?php echo $nameErr;?></span>
&nbsp; &nbsp;

Last Name: <input type="text" name="nameLast">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>

Email: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>

City: <input type="text" name="city">
<span class="error">* <?php echo $cityErr;?></span>
<br/><br/>
Phone_no: <input type="text" name="Phone_no">
<span class="error">* <?php echo $phErr;?></span>

<br><br>
<input type="submit" name="submit" value="Submit">
</form>
    <?php
$_SESSION["nameFirst"]=$nameFirst;
$_SESSION["nameLast"]=$nameLast;
$_SESSION["email"]=$email;
$_SESSION["City"]=$city;
$_SESSION["Phone"]=$Phone;





echo"<Session information are set succesfully!<br/>";
?>
<button><a href="ProjectPHP_landingPage.php"> 
    Login </a></button>

</body>
     </div>
     </div>
    </html>