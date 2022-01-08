<!DOCTYPE html>
<html>
    
<style>
      body{background-image: url("neonWall.jpg");
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
table,th,td {
border : 1px solid black;
border-collapse: collapse;
}
th,td {
padding: 5px;
}
</style>
<body>
<div style="background-color:rgb(255, 255, 255, 0.6);
       width:88%; margin:20px;padding: 15px;">

<h2>Customer Details</h2>
<div class="bg" >

<form action="">
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Select a customer:</option>
<option value="110">Avantika Singh</option>
<option value="123">Hrithik Saha</option>
<option value="201">Wolski Zajazd</option>
<!-- <option value="116">Ritika Sharma</option>
<option value="098">Nikita Devi</option> -->
</select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>
<script>
function showCustomer(str) {
var xhttp;
if (str == "") {
document.getElementById("txtHint").innerHTML = "";
return;
}
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xhttp.open("GET", "55ajaxfetch2.php?q="+str, true);
xhttp.send();
}
</script>
</div>

</div>
</body>
</html>
