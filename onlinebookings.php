<?php
session_start();
if(isset($_SESSION['un'])==false)
    header('location: login.php');
$tid="";
$tnm="";
$loc="";
$rate="";
$dstn="";
$std="";
$end="";
$capc="";
$msg="";
$ntid="";
$bid="";
$un="";
$ntid="";
$amt=0;
$tamt="";
$ppl="";
$status="";
$npl=0;
$bdt="";
$opl="";
function getalltripid()
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="select tid,tnm,loc,dstn from trip";
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
        $i++;
    }
    mysql_close($conn);
    return $arr;
}
if(isset($_REQUEST['submit1']))
{
    
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $tid=$_REQUEST['tid'];
    $ntid=substr($tid,-5);
    $msg=$ntid;
    $sql="select * from trip where tid='$ntid'";
    $result=mysql_query($sql,$conn);
    if($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
        $tid=$row[0];
        $tnm=$row[1];
        $loc=$row[2];
        $rate=$row[3];
        $dstn=$row[4];
        $std=$row[5];
        $end=$row[6];
        $capc=$row[7];
        $opl=$row[8];
    }
    else
        $msg=$msg." Trip Not Found";
        mysql_close($conn);
}
function newbid()
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
		$sql="select max(bid)+1 as nbid from booking";
		$result=mysql_query($sql,$conn);
		$nbid=10001;
		if($row=mysql_fetch_array($result,MYSQL_BOTH))
		{
			if($row[0]!="")
                $nbid=$row[0];
			
		}
		mysql_close($conn);
		return $nbid;
}
if(isset($_REQUEST['sub2']))
{
    $bid=newbid();
    $un=$_SESSION['un'];
    $ntid=$_REQUEST['tid'];
    $tid=substr($ntid,-5);
    $ndt=new DateTime();
    $bdt=$ndt->format('Y-m-d');
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
		$sql="select rate from trip where tid=$tid";
        $result=mysql_query($sql,$conn);
    if($row=mysql_fetch_array($result,MYSQL_BOTH))
		{
            $amt=$row[0];
    }
    mysql_close($conn);
    $ppl=$_REQUEST['npl'];
    $tamt=$amt*$ppl;
    $status="temporary";
}
if(isset($_REQUEST['sub3']))
{   
    $bid=$_REQUEST['bid'];
    $un=$_REQUEST['un'];
    $tid=$_REQUEST['tid'];
    $bdt=$_REQUEST['bdt'];
    $amt=$_REQUEST['amt'];
    $tamt=$_REQUEST['tamt'];
    $ppl=$_REQUEST['ppl'];
    $status=$_REQUEST['status'];
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="INSERT INTO `booking`(`bid`, `uid`, `tid`, `bdt`, `amt`, `tamt`, `ppl`, `status`) VALUES ('$bid','$un','$tid','$bdt','$amt','$tamt','$ppl','$status')";
   $row=mysql_query($sql,$conn);
		if($row>0)
        {
            
            $sql1="select ppl from trip where tid=$tid";
             $result=mysql_query($sql1,$conn);
                if($row1=mysql_fetch_array($result,MYSQL_BOTH))
		{
                    echo "$row1[0].$ppl.$tid";
            $sql2="update trip set ppl=($row1[0]+$ppl) where tid=$tid";
               $row2=mysql_query($sql2,$conn);
                if($row2>0){
			$msg= "<font size=7 color=green>Your order has been placed with booking ID $bid. Please pay the relevant amount at our office within 7 days</font>";
                }
                    else 
			$msg= "<font size=7 color=red>Unsuccessful.</font>";
                }
            else 
			$msg= "<font size=7 color=red>Unsuccessful.</font>";
        }
		else 
			$msg= "<font size=7 color=red>Unsuccessful.</font>";
    mysql_close($conn);
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bong Travels - Online Bookings</title>
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
      <a onclick="myAccFunc1()" href="javascript:void(0)" id="myBtn" >
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
      <a onclick="myAccFunc3()" href="javascript:void(0)" id="myBtn" class="w3-light-grey">
        Online Booking &#8642;
      </a>
      <div id="Acc3" class="w3-accordion-content w3-padding-large w3-medium">
        <a href="onlinebookings.php#BookPackages">&#8674; Book Packages</a>
      </div>
    </div>
   <a href="contact.php">Contact Us</a>
  </div>
    <a href="login.php" class="w3-padding">Login</a> 
  <a href="signup.php" class="w3-padding">Sign Up</a> 
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
          
           <br>
          <hr>
          <br>
          <h1>SELECT TRIP</h1>
          <form name="f1" mehtod=get>
        <table class="w3-table-all">
        <tr><td>Select Trip ID</td><td><select name=tid>
            <option>Select</option>
            <?php
            $arr=getalltripid();
            foreach($arr as $val)
            {
                if(isset($_REQUEST['tid']))
                {
                    if($_REQUEST['tid']=="$val[1],$val[2],$val[3],$val[0]")
                        echo "<option selected>$val[1],$val[2],$val[3],$val[0]</option>";
                    else 
                        echo "<option>$val[1],$val[2],$val[3],$val[0]</option>";
                }
                else
                    echo "<option>$val[1],$val[2],$val[3],$val[0]</option>";
            }
            ?>
            </select></td></tr>
            <tr><td align=center colspan=2><input class="w3-btn" type=submit name=submit1 value="Submit"></td></tr>
            <div>
                <?php
                    if($tnm!="")
                    {
                        echo "<tr><td>Trip Name</td><td>$tnm</td></tr>";
                        echo "<tr><td>Location</td><td>$loc</td></tr>";
                        echo "<tr><td>Rate</td><td>$rate</td></tr>";
                        echo "<tr><td>Destination</td><td>$dstn</td></tr>";
                        echo "<tr><td>Starting Date</td><td>$std</td></tr>";
                        echo "<tr><td>Ending Date</td><td>$end</td></tr>";
                        echo "<tr><td>Capacity</td><td>$capc</td></tr>";
                        $vac=($capc-$opl);
                        echo "<tr><td>Vacancy</td><td>$vac</td></tr>";
                        echo "<tr><td>Enter no of persons</td><td><select name=npl>
                        <option>Select</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        </select></td></tr>";
                        echo "<tr><td colspan=2><input type=submit class=w3-btn name=sub2 value=Book>&nbsp;&nbsp;&nbsp;
                        <a class=w3-btn href=index.php>Cancel</a></td></tr>";
                        
                    }
                    else {
                        if($msg!="")
                        echo "<font color=red>".$msg."</font>";
                    }
                        ?>
            </div>
            <div>
            <?php
                if(isset($_REQUEST['sub2']))
                {
                        echo "<tr><td>Booking ID</td><td>$bid<input type=hidden name=bid value=$bid></td></tr>";
                        echo "<tr><td>User ID</td><td>$un<input type=hidden name=un value=$un></td></tr>";
                        echo "<tr><td>Trip ID</td><td>$tid<input type=hidden name=tid value=$tid></td></tr>";
                        echo "<tr><td>Booking Date</td><td>$bdt<input type=hidden name=bdt value=$bdt></td></tr>";
                        echo "<tr><td>Amount per head</td><td>$amt<input type=hidden name=amt value=$amt></td></tr>";
                        echo "<tr><td>Total amount</td><td>$tamt<input type=hidden name=tamt value=$tamt></td></tr>";
                        echo "<tr><td>No. of persons</td><td>$ppl<input type=hidden name=ppl value=$ppl></td></tr>";
                        echo "<tr><td>Status</td><td>$status<input type=hidden name=status value=$status></td></tr>";
                        echo "<tr><td colspan=2><input type=submit class=w3-btn name=sub3 value='Book Now'>&nbsp;&nbsp;&nbsp;
                        <a class=w3-btn href=index.php>Cancel</a></td></tr>";
                    
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