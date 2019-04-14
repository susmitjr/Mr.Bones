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
$pass="";
$user="";
$atype="";
$msg="";
if(isset($_REQUEST['submit1'])){

$conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $uid=$_REQUEST['uid'];
    $pwd=$_REQUEST['pwd'];
    $sql="select * from user where eid='$uid' and pwd='$pwd'";
$result=mysql_query($sql,$conn);
    if($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
        $user=$row[0];
        $name=$row[1];
        $add=$row[2];
        $mob=$row[3];
        $gender=$row[4];
        $dob=$row[5];
        $eid=$row[6];
        $pass=$row[7];
        $sq=$row[8];
        $ans=$row[9];
        $atype=$row[10];
    }
    else
        $msg="Not registered";
        mysql_close($conn);
}
if(isset($_REQUEST['sub2'])){
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $user=$_REQUEST['user'];
    $name=$_REQUEST['name'];
        $add=$_REQUEST['add'];
        $mob=$_REQUEST['mob'];
        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];
        $eid=$_REQUEST['eid'];
    $pass=$_REQUEST['pass'];
    $sq=$_REQUEST['sq'];
        $ans=$_REQUEST['ans'];
        $atype=$_REQUEST['atype'];
     $sql="UPDATE `user` SET `name`='$name',`add`='$add',`mob`='$mob',`gender`='$gender',`dob`='$dob',`eid`='$eid',`pwd`='$pass',`sq`='$sq',`ans`='$ans',`atype`='$atype' WHERE uid='$user'";
    $row=mysql_query($sql,$conn);
		if($row>0)
			$msg= "<font size=7 color=green>Updated</font>";
		else 
			$msg= "<font size=7 color=red>Unsuccessful.</font>";
		mysql_close($conn);
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bong Travels - Profile</title>
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
    <a href="profile.php"  class="w3-padding w3-light-grey">Profile</a>
    
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
          <h1>PROFILE</h1>
          <form name="f1" mehtod=get>
        <table class="w3-table-all">
        <tr><td>Enter Username</td><td><input type=text size=50 name=uid value='<?php
                                              if(isset($_REQUEST['uid']))
                                                  echo $uid;
                                              ?>'></td></tr>
            <tr><td>Enter Password</td><td><input type=password size=50 name=pwd></td></tr>
            <tr><td align=center colspan=2><input class="w3-btn" type=submit name=submit1 value="Submit"></td></tr>
            <div>
                <?php
                    if($user!="")
                    {
                        
                        echo "<tr><td>User ID</td><td><input type=text size=50 name=user disabled value='$user'></td></tr>";
                        echo "<tr><td>Name</td><td><input type=text size=50 name=name value='$name'></td></tr>";
                        echo "<tr><td>Address</td><td><input type=text size=50 name=add value='$add''></td></tr>";
                        echo "<tr><td>Mobile Number</td><td><input type=text size=50 name=mob value='$mob'></td></tr>";
                        echo "<tr><td>Gender</td><td><input type=text size=50 name=gender  value='$gender'></td></tr>";
                        echo "<tr><td>Date of Birth</td><td><input type=date size=50 name=dob  value='$dob'></td></tr>";
                        echo "<tr><td>Email ID</td><td><input type=text size=50 name=user value='$eid'></td></tr>";
                        echo "<tr><td>Password</td><td><input type=password size=50 name=user value='$pass'></td></tr>";
                        echo "<tr><td>Security Question</td><td><input type=text size=50 name=user value='$sq'></td></tr>";
                        echo "<tr><td>Answer</td><td><input type=text size=50 name=user value='$ans'></td></tr>";
                        echo "<tr><td>Account Type</td><td><input type=text size=50 name=user disabled value='$atype'></td></tr>";
                        echo "<tr><td colspan=2><input type=submit class=w3-btn name=sub2 value=Update>&nbsp;&nbsp;&nbsp;
                        <a class=w3-btn href=index.php>Cancel</a></td></tr>";
                        
                    }
                    else {
                        if($msg!="")
                        echo "<font color=red>'$msg'</font>";
                    }
                        ?>
            </div>
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