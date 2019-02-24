<!DOCTYPE html>
<html lang="en">
<title>Care Tech</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.active, .btn:hover {
  background-color: white;
  color: #141414;
}
.title{
  position: inherit;
  top:90px;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 20px;
  font-size: 16px;
  border: none;
}
  
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 31px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <div ></div>
    <img src="images/care_tech.png" style="width:220px;height:220px;">
    <h6 class="title"><i> Emotional Wellness Self Monitoring System for College Students taking up thesis.</i></h6>
  
  </div>
  <div class="w3-bar-block">
    
    <a href="test.php#learning" onclick="w3_close()" class="w3-bar-item w3-white" style="text-decoration: none;">About Us</a>
    <div class="dropdown">
  <a href="exam1.php" onclick="w3_close()" class="w3-bar-item btn" style="text-decoration: none;">Begin Test</a></button>
  <div class="dropdown-content">
    <a href="exam1.php#Emotional">Emotional Wellness</a>
    <a href="exam1.php#Occupational">Occupational Wellness</a>
    <a href="exam1.php#Spiritual">Spiritual Wellness</a>
    <a href="exam1.php#Intellectual">Intellectual Wellness</a>
    <a href="exam1.php#Physical">Physical Wellness</a>
    <a href="exam1.php#Social">Social Wellness</a>
  </div>
</div>
    <a href="evaluation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Evaluation</a>    
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="learning">
    <h1 class="w3-jumbo"><b>Learning</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Wellness is an active process of becoming aware of and making choices toward a healthy and fulfilling life, 
    <b>CareTech</b> is a software that monitor and analyze the wellness of college students taking up thesis. It allows the students to take up some suggestion task that makes them free from stress and illness and boost what they lack in emtional, occupational, social, intellectual, spiritual and physical wellness. 
    </p>
  </div>
  
  <!-- Photo grid (modal) -->


  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Aim -->
  <div class="w3-container" id="aim" style="margin-top:75px">
    <h1 class="w3-jumbo"><b>Aim</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>CareTech aims to assist all college students who are taking up thesis nationwide and also help college students monitor their wellness because most of the students who are facing this kind of situations does not know what to do and ending up stressed and depressed.
    </p>
  </div>
  
  <!-- Contact Us -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-jumbo"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>You can contact CareTech at Facebook.
    </p>
  </div>

  

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
