<?php
$uid="";
$name="";
$add="";
$mob="";
$gender="";
$dob="";
$eid="";
$sq="";
$ans="";
$pwd="";
$cpwd="";
$msg="";
require_once 'fun_user.php';
if(isset($_REQUEST['submit']))
{
$pwd=$_REQUEST['pwd'];
$cpwd=$_REQUEST['cpwd'];
    
    if($pwd==$cpwd)
    {
   
        $uid=newuser();
        $name=$_REQUEST['name'];
        $add=$_REQUEST['add'];
        $mob=$_REQUEST['mob'];
        $eid=$_REQUEST['eid'];
        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];
        $sq=$_REQUEST['sq'];
        $ans=$_REQUEST['ans'];
        $msg=addUser($uid,$name,$add,$mob,$gender,$dob,$eid,$pwd,$sq,$ans,'user');
    }
     else
       $msg="<font color=red size=4>Password doesn't match</font>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bong Travels - Signup</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
    <style>
         body{
            background-image: url(light-green-amber.png);
            background-attachment: scroll;
             background-size: cover;
        }

    </style>
    <script>
    // Accordion 
function myAccFunc1() {
    var x = document.getElementById("Acc1");
        if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
        function myAccFunc2() {
    var x = document.getElementById("Acc2");
        if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
        function myAccFunc3() {
    var x = document.getElementById("Acc3");
        if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


document.getElementById("myBtn").click();


// Script to open and close sidenav
function navopen() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function navclose() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

    </script>
    
    </head>
    <body class="w3-content" style="max-width:1200px">
    <!-- Sidenav/menu -->
<nav class="w3-sidenav w3-light-green w3-collapse w3-top" style="z-index:3; width:250px" id="mySidenav">
  <a href="javascript:void(0)" onclick="navclose()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container w3-padding-16">
    <br>
        <br>
    <h2 class="w3-wide "><b>Bong Travels</b></h2>
  </div>
  <div class="w3-padding-64 w3-large w3-text-black" style="font-weight:bold">
    <a href="index.php" class="w3-text-black ">Home</a>
   <div class="w3-accordion">
      <a onclick="myAccFunc1()" href="javascript:void(0)" id="myBtn">
        About Us &#8642;
      </a>
      <div id="Acc1" class="w3-accordion-content w3-padding-large w3-medium">
        <a href="about.php#Mission">&#8674; Mission</a>
        <a href="about.php#Vision">&#8674; Vision</a>
      </div>
    </div> 
    <div class="w3-accordion">
      <a onclick="myAccFunc2()" href="javascript:void(0)" id="myBtn">
        Tourist Places &#8642;
      </a>
      <div id="Acc2" class="w3-accordion-content w3-padding-large w3-medium">
        <a href="tplaces.php#Himalayas" >&#8674; Himalayas</a>
        <a href="tplaces.php#Pilgrimages">&#8674; Pilgrimage</a>
        <a href="tplaces.php#Forest">&#8674; Forest</a>
        <a href="tplaces.php#WeekendGateways">&#8674; Weekend Gateways</a>
          <a href="tplaces.php#HistoricalPlaces">&#8674; Historical Places</a>
      </div>
    </div>
   <div class="w3-accordion">
      <a onclick="myAccFunc3()" href="javascript:void(0)" id="myBtn">
        Online Booking &#8642;
      </a>
      <div id="Acc3" class="w3-accordion-content w3-padding-large w3-medium">
        <a href="onlinebookings.php#BookPackages">&#8674; Book Packages</a>
      </div>
    </div>
   <a href="contact.php">Contact Us</a>
  </div>
    <a href="login.php" class="w3-padding">Login</a> 
  <a href="signup.php" class="w3-padding w3-light-grey">Sign Up</a> 
  <a href="bookings.php"  class="w3-padding">Bookings</a>
    <a href="profile.php"  class="w3-padding">Profile</a>
        </nav>
    <!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-light-green w3-xlarge w3-padding-24">
  <a href="javascript:void(0)" class="w3-btn w3-left w3-green w3-border w3-border-white w3-margin-right" onclick="navopen()">☰</a>
    &nbsp;
    <span class="w3-left w3-wide">Bong Travels</span>
  
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="navclose()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
        </div>
        
      <div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
           <header class="w3-container w3-xlarge">
               <img src="backlogo.jpg" width="100%">
          </header>
          <div class="w3-container w3-large">
 
      <div class="w3-content w3-display-container">
          
          <h1 class="w3-text-green" align=center><b>Welcome To New Registration</b></h1>
    <form name=f1 method=get action="">
<table class="w3-table-all">
<tr>
<td><b> Name:- </b></td>
<td bgcolor=#BBBBBB><input type=text size=70 placeholder="Enter Your name Here" name="name" required></td>
</tr>

<tr>
<td><b> Address:- </b></td>
<td bgcolor=#BBBBBB><input type=text size=70 placeholder="Enter Your Address Here" name="add" required></td>
</tr>

<tr>
<td><b> Mobile No:- </b></td>
<td bgcolor=#BBBBBB><input type=text size=70 maxlength=10 name="mob" id=t3 placeholder="(Maximum 10 Digits)" required ></td>
<br>

<div id="div1"></div>

</tr>

<tr>
<td><b> Email ID:- </b></td>
<td bgcolor=#BBBBBB><input type=text size=70 placeholder="example@gmail.com" name="eid" required></td>
</tr>

<tr>
<td ><b> Gender:-</b> </td>
<td bgcolor=#BBBBBB><input type=radio name=gender value=F name="gender" required>Female
<input type=radio name=gender value=M>Male</td>
</tr>


<tr>
<td ><b> Date Of Birth:-</b> </td>
<td bgcolor=#BBBBBB>
    <input type=date name=dob required>
    </td>

</tr>

<tr>
<td><b> Security Question:- </b></td>
<td bgcolor=#BBBBBB><select name="sq">
<option selected>Choose Question Here</option>
<option>What is your favorite color?</option>
<option>Who is your childhood Hero?</option>
<option>In which city you were born?</option>
<option>Who is your best friend?</option>
<option>What is the name of your pet?</option>
<option>What is your favourite food?</option>
</select>
</td>
</tr>


<tr>
<td><b> Answer:- </b></td>
<td bgcolor=#BBBBBB><input type=text name="ans" size=70 placeholder="Answer" required></td>
</tr>

<tr>
<td><b> Password(Min 8 Digits):- </b></td>
<td bgcolor=#BBBBBB><input type=password placeholder="Give a Strong Password" size=70 name="pwd" required id=p1 onkeyup="return pwdstrength(this.value)">
<br>

<div id="div2"></div>

</td>
</tr>

<tr>
<td><b> Confirm Password:- </b></td>
<td bgcolor=#BBBBBB><input type=password  placeholder="Re-enter your password" size=70 name=cpwd required id=p2 onblur="return chk_cnfpwd(this.value)">
<br>

<div id="div3"></div>

</td>
</tr>

<tr bgcolor=#CCCCCC>
<td colspan=2><input type=submit class="w3-btn" name=submit value="Submit">&nbsp;
<input type=reset class="w3-btn" value="Reset">

     <div id="div4"><?php
        echo $msg;
        ?></div>
    </td>
</tr>
</table>
</form>
        <br>
              </div>
          </div>
        <script type="text/javascript">
var msg="";




function pwdstrength(data)

{
	
if(data.length==0)
		  
document.getElementById("div2").innerHTML="";


else if(data.length<4)


 document.getElementById("div2").innerHTML="<font color=red size=4>Weak</font>";


else if(data.length<8)
			  

document.getElementById("div2").innerHTML="<font color=blue size=4>Medium</font>";
else
				 
 
document.getElementById("div2").innerHTML="<font color=green size=4>Strong</font>";
	
return true;

}



function chk_cnfpwd(cp)

{

var p=document.getElementById("p1").value;

if(cp!=p)

{
		
document.getElementById("div3").innerHTML="<font color=red size=4>Password doesn't Match</font>";

return false;

}
	
document.getElementById("div3").innerHTML="<font color=green size=4>Password Match</font>";
	
return true;

}
          </script>
          
<footer class="w3-container ">
    <div class="w3-content w3-display-container  w3-light-green">
         <table class="w3-table w3-centered">
             <tr><th><b>Home</b></th><th><b>About</b></th><th><b>Tourist Places</b></th><th><b>Online Booking</b></th><th><b>Contact Us</b></th><th>Users</th></tr>
              <tr><td><a href="index.php">Home</a></td><td><a href="about.php#Mission">Mission</a></td><td><a href="Tplaces.php#Himalayas">Himalayas</a></td><td><a href="onlinebooking.php#BookPackages">Book Packages</a></td><td><a href="contact.php">Contact Us</a></td><td><a href="login.php">Log In</a></td></tr>
              <tr><td></td><td><a href="about.php#Vision">Vision</a></td><td><a href="Tplaces.php#Pilgrimage">Pilgrimage</a></td><td></td><td></td><td><a href="signup.php">Sign Up</a></td></tr>
              <tr><td></td><td></td><td><a href="Tplaces.php#Forest">Forest</a></td><td></td><td></td><td><a href="bookings.php">Bookings</a></td></tr>
              <tr><td></td><td></td><td><a href="Tplaces.php#WeekendGateways">Weekend Gateways</a></td><td></td><td></td><td><a href="profile.php">Profile</a></td></tr>
              <tr><td></td><td></td><td><a href="Tplaces.php#HistoricalPlaces">Historical Places</a></td><td></td><td></td><td><a href="forgotpassword.php">Forgot Password</a></td></tr>
    </table>
        <hr>
        <br>
        <p align=center>Made by Riya Chakraborty, Baidik Chatterjee, Susmit Jana and Debasreeta Roy</p>
        <p align=center>Made for Globsyn PHP project Online trip</p>
        <br>
    </div>
          </footer>
        </div>
        
    </body>



</html>