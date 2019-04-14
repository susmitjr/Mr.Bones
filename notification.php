<?php
$msg="";
function getallstatus()
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="select * from booking where status='temporary'";
    $result=mysql_query($sql,$conn);
    $arr=array();
    $i=0;
    while($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
        $arr[$i]=array();
        $arr[$i][0]=$row[0];
        $arr[$i][1]=$row[1];
        $arr[$i][2]=$row[2];
        $arr[$i][3]=$row[3];
        $arr[$i][4]=$row[4];
        $arr[$i][5]=$row[5];
        $arr[$i][6]=$row[6];
        $arr[$i][7]=$row[7];
        $i++;
    }
    mysql_close($conn);
    return $arr;
}
if(isset($_REQUEST['sub2']))
{
    $arr=array();
    $arr=$_REQUEST['cid']; 
    $msg="$arr";
    IF($arr>0)
    {
        $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="update booking set status='paid' where bid=$arr";
        $result=mysql_query($sql,$conn);
        if($result>0)
            $msg="Successful";
        else
            $msg="Unsuccessful";
        mysql_close($conn);
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Bong Travels - Notification</title>
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
          <h1>UPDATE STATUS</h1>
          <br>
          <form name="f1" mehtod=get>
              <div>
              <?php
                  if($msg!="")
                  echo $msg
                      ?>
              </div>
        <table class="w3-table-all w3-centered">
        <tr><th>Booking ID</th><th>User ID</th><th>Trip ID</th><th>Booking Date</th><th>Amount</th><th>Total Amount</th><th>No. of persons</th><th>Status</th><th>Change Status</th></tr>
          <?php
          $arr=getallstatus();
            $i=0;
            foreach($arr as $val)
            {
                $e1=$arr[$i][0];
                $e2=$arr[$i][1];
                $e3=$arr[$i][2];
                $e4=$arr[$i][3];
                $e5=$arr[$i][4];
                $e6=$arr[$i][5];
                $e7=$arr[$i][6];
                $e8=$arr[$i][7];
                echo "<tr><td>$e1</td><td>$e2</td><td>$e3</td><td>$e4</td><td>$e5</td><td>$e6</td><td>$e7</td><td>$e8</td><td><input type=checkbox name=cid value=$e1></td></tr>";
                $i++;
            }
            echo "<tr><td colspan=9><input type=submit class=w3-btn name=sub2></td></tr>"
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