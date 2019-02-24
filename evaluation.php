<?php
    $conn = mysqli_connect('localhost','root','','records');
    if (!$conn) {
        echo "<script> alert('Not Connected!'); </script>";
    }
?>
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
p{
  position: absolute;
  color:black;
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
<body onload="myFunction()">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <img src="images/care_tech.png" style="width:220px;height:220px;">
    <h6 class="title"><i> Emotional Wellness Self Monitoring System for College Students taking up thesis.</i></h6>
  
  </div>
  <div class="w3-bar-block">
    
     <div class="w3-bar-block">
    
    <a href="test.php#learning" onclick="w3_close()" class="w3-bar-item" style="text-decoration: none;">About Us</a>
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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-white"  style="text-decoration: none;">Evaluation</a>    
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
    <h6 class="w3-jumbo">Evaluation</h6>
    <p>Emotional Wellness</p><br>
    <span id="demo" style="position: inherit; top:14px;font-size: 40px;"></span>
    <span style="font-size: 40px;"><?php echo "%";?></span><BR>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <p>Opp Wellness</p><br>
    <span id="demo1" style="position: inherit; top:14px;font-size: 40px;"></span>
    <span style="font-size: 40px;"><?php echo "%";?></span><BR>
    <hr style="width:50px;border:5px solid red" class="w3-round">


     
  </div>
   <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Age</td>
                <td>Course</td>
                <td>Gender</td>
            </tr>
        </thead>
        <tbody border="1">
            <?php

                $query = mysqli_query($conn, "SELECT * FROM students");
                 while($row = mysqli_fetch_array($query))
                 {
                    $name = $row['name'];
                    $age = $row['age'];
                    $course = $row['course'];
                    $gender = $row['gender'];

                    echo "<tr>
                    <td>".$name."</td>
                    <td>".$age."</td>
                    <td>".$course."</td>
                    <td>".$gender."</td>
                    </tr>";
                 }
            ?>
        </tbody>
    </table>
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
function myFunction(){
  var ulul = localStorage.getItem("storageName");
  var totAal = ulul;
  document.getElementById('demo').innerHTML = totAal;
 if((totAal>=0)&&(totAal<=25)){
  alert("Accept mistakes and learn from them for next time. Try to developt new passion by trying a new hobby. Learn to seek or accept help and support from others.");
 }
 else if((totAal>=26)&&(totAal<=50)){
    alert("Practice being mindful and increase your awareness. Manage your time by setting daily goals. Learn to say no when overextending yourself.");
 }
 else if((totAal>=51)&&(totAal<=75)){
    alert("Remind yourself to stay positive. Keep smiling and taking laugh breaks. Practice mindfulness.");
 }
 else if((totAal>=76)&&(totAal<=100)){
    alert("Strengthen social connections. Continue practicing mindfulness. Continue being optimistic.");
 }
}
function myFunction1(){
  var ulul1 = localStorage.getItem("storageName1");
  var totAal1 = ulul1;
  document.getElementById('demo1').innerHTML = totAal1;
 
}




</script>
<h4>0-25</h4>
<span>-Accept mistakes and learn from them for next time.<br>
-Try to developt new passion by trying a new hobby.<br>
-Learn to seek or accept help and support from others.<br></span>

<h4>26-50</h4>
<span>-Practice being mindful and increase your awareness.<br>
-Manage your time by setting daily goals.<br>
-Learn to say no when overextending yourself.<br></span>

<h4>51-75</h4>
<span>-Remind yourself to stay positive.<br>
-Keep smiling and taking laugh breaks.<br>
-Practice mindfulness.</span><br>

<h4>76-100</h4>
<span>-Strengthen social connections.<br>
-Continue practicing mindfulness.<br>
-Continue being optimistic.</span><br>

</body>
</html>
