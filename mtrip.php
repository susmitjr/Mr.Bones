<?php

$tid="";
$tnm='';
$loc='';
$rate='';
$dstn='';
$std='';
$end='';
$capc='';
if(isset($_REQUEST['show']))
{
	$tid=$_REQUEST['tripid'];
	$conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
	$sql="Select tid,tnm,loc,rate,dstn,std,end,capc from trip where tid='$tid'";
	$result=mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result,MYSQL_BOTH))
	{
		$tnm=$row[1];
		$loc=$row[2];
		$rate=$row[3];
		$dstn=$row[4];
		$std=$row[5];
		$end=$row[6];
		
		$capc=$row[7];
	}
	mysql_close($conn);
	
}
if(isset($_REQUEST['update']))
{
	$conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
$tid=$_REQUEST['tripid'];
$tnm=$_REQUEST['tripname'];
$loc=$_REQUEST['location'];
$rate=$_REQUEST['rate'];
$dstn=$_REQUEST['destination'];
$std=$_REQUEST['startingdate'];
$end=$_REQUEST['endingdate'];
$capc=$_REQUEST['capacity'];

$sql="update trip set tnm='$tnm',loc='$loc',rate='$rate',dstn='$dstn',std='$std',end='$end',capc='$capc' where tid='$tid'";
	
		$nor=mysql_query($sql,$conn);
if($nor>0)
	echo "Updated successfully";
else 
	echo "Update failed";
mysql_close($conn);
}
if(isset($_REQUEST['delete']))
{
	$conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
	$tid=$_REQUEST['tripid'];
	$sql="delete from trip where tid='$tid'";
	$nor=mysql_query($sql,$conn);
	if($nor>0)
		echo "Record successfully deleted";
	else 
		echo "Record deletion failed";
	mysql_close($conn);
}
	?>
<!DOCTYPE html>
<html>
<head>
    <title>Bong Travels - Modify Trip</title>
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
   <a href="contact.php" >Contact Us</a>
  </div>
    <a href="login.php" class="w3-padding">Login</a> 
  <a href="signup.php" class="w3-padding">Sign Up</a> 
  <a href="bookings.php"  class="w3-padding ">Bookings</a>
    <a href="profile.php"  class="w3-padding ">Profile</a>
    
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
          <br>
          <hr>
          <br>
          <form method=get name=form1>
<p align=center>
<table class="w3-table-all" name=table1 border=1 bgcolor=pink>
<tr><td>Tripid:</td><td><select name=tripid><option >Select</option>
<?php
$conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
$sql="select tid from trip";
$result=mysql_query($sql,$conn);
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
	if($row[0]==$tid)
	echo "<option selected>$row[0]</option>";
	else
		echo "<option>$row[0]</option>";
}
mysql_close($conn);
    ?></select></td></tr>
<tr><td colspan=2><input class="w3-btn" type=submit value='Show' name=show></td></tr>
<?php
    if(isset($_REQUEST['show']))
    {
    echo "
<tr><td>Trip Name: </td><td><input type=text value='$tnm' id=tripname name=tripname></td></tr>
<tr><td>Location: </td><td><input type=text value='$loc' id=location name=location></td></tr>
<tr><td>Rate: </td><td><input type=text value='$rate' id=rate name=rate></td></tr>
<tr><td>Destination: </td><td><input type=text value='$dstn' id=destination name=destination></td></tr>
<tr><td>Starting date: </td><td><input type=text value='$std' id=startingdate name=startingdate></td></tr>
<tr><td>Ending date: </td><td><input type=text value='$end' id=endingdate name=endingdate></td></tr>
<tr><td>Capacity: </td><td><input type=text value='$capc' id=capacity name=capacity></td></tr>
<tr><td colspan=2>
<input class=w3-btn type=submit value='Delete' name=delete>
<input class=w3-btn type=submit value='Update' name=update>
<input class=w3-btn type=reset value='Reset' name=Reset></td></tr>";
    }
    ?>
</table>

</form>
          <br>
          <hr>
          <br>          
               </div>
          </div>
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