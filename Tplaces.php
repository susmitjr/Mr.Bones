<!DOCTYPE html>
<html>
<head>
    <title>Bong Travels - Tourist Places</title>
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
      <a onclick="myAccFunc2()" href="javascript:void(0)" id="myBtn" class="w3-light-grey">
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
          <br>
              <hr>
              <br>
          <div class="w3-container w3-xlarge" >
              <div class="w3-display-container mySlides" id="Himalayas">
             <img src="Himalayas1.jpg" style="width:100%">
  <div class="w3-display-bottommiddle w3-xxlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Himalayas
  </div>
              </div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
    <div class="w3-display-container mySlides">
  <a href="darjeeling.php"><img src="darjeeling-icon.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Darjeeling
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="kurseong.php"><img src="kurseong.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Kurseong
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="kalingpong.php"><img src="kalingpong.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Kalingpong
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="mirik.php"><img src="mirik.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Mirik
  </div>
      </a>
              </div>
</div>
</div>
              <br>
                <div class="w3-row ">
<div class="w3-container w3-half">
  <div class="w3-display-container mySlides">
  <a href="sandakufu.php"><img src="sandakufu.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Sandakfu
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <hr>
              <br>
              <div class="w3-display-container mySlides" id="Pilgrimage">
             <img src="Pilgrimage1.jpg" style="width:100%" >
  <div class="w3-display-bottommiddle w3-xxlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Pilgrimage
  </div>
                
              </div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
    <div class="w3-display-container mySlides">
  <a href="gangasagar.php"><img src="gangasagarmela2014.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Gangasagar
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="belurmath.php"><img src="belur-math-images.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Belur Math
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="dakhineswar.php"><img src="dakhiineswar.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Dakhineswar
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="kalighat.php"><img src="kalighat.jpg" width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Kalighat
  </div>
      </a>
              </div>
</div>
</div>
              <br>
                <div class="w3-row ">
<div class="w3-container w3-half">
  <div class="w3-display-container mySlides">
  <a href="tarapith.php"><img src="tarapith-complex-1024x678.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Tarapith
  </div>
      </a>
              </div>
</div>
                    <div class="w3-container w3-half">
  <div class="w3-display-container mySlides">
  <a href="imambara"><img src="bara-imambara-photo-lucknow.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Imambara
  </div>
      </a>
              </div>
</div>
              </div>
                <br>
              <hr>
              <br>
              <div class="w3-display-container mySlides" id="Forest">
             <img src="forest1.jpg" style="width:100%">
  <div class="w3-display-bottommiddle w3-xxlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Forest
  </div>
              </div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
    <div class="w3-display-container mySlides">
  <a href="dooarss.php"><img src="dooarss.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Dooars
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="jaldapara.php"><img src="jaldapara.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Jaldapara
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="gorumara.php"><img src="Gorumara_National_Park_Panorama.JPG"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Gorumara
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="sundarbans.php"><img src="sundorbon.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Sundarbans
  </div>
      </a>
              </div>
</div>
</div>
              
                <br>
              <hr>
              <br>
              <div class="w3-display-container mySlides" id="WeekendGateways">
              <img src="WeekendGateaways1.jpg" style="width:100%">
  <div class="w3-display-bottommiddle w3-xxlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Weekend Gateways
  </div>
              </div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
    <div class="w3-display-container mySlides">
  <a href="digha.php"><img src="digha.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Digha
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="mandarmani.php"><img src="mandarmoni.png"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Mandarmani
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
  <div class="w3-display-container mySlides">
  <a href="bakkhali.php"><img src="bakkhali.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Bakkhali
  </div>
      </a>
              </div>
</div>

</div>
              <br>
                <div class="w3-row ">

              </div>
                <br>
              <hr>
              <br>
              <div class="w3-display-container mySlides" id="HistoricalPlaces">
  <img src="HistoricalPlaces1.jpg" style="width:100%">
  <div class="w3-display-bottommiddle w3-xxlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Historical Places
  </div>
              </div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
    <div class="w3-display-container mySlides">
  <a href="murshidabad.php"><img src="murshidabad.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Murshidabad
  </div>
      </a>
              </div>
</div>
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="birbhum.php"><img src="birbhum.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Birbhum
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <div class="w3-row">
<div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="bankura.php"><img src="bankura-district.jpg"width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Bankura
  </div>
      </a>
              </div>
</div>
                  <div class="w3-container w3-half">
   <div class="w3-display-container mySlides">
  <a href="malda.php"><img src=""width="400px" height="250px">
        <div class="w3-display-middle w3-display-hover w3-xlarge w3-container w3-padding-16 w3-light-grey w3-opacity (50% opacity)">
   Malda
  </div>
      </a>
              </div>
</div>
</div>
              <br>
              <hr>
              <br>
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