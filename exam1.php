
<!DOCTYPE html>
<html lang="en">
<title>Care Tech</title>
<link ref = "shortcut icon" href="images/care_tech.png">
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
.button {
  background-color: #141414;
  border: none;
  color: white;
  padding: 15px 62px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <img src="images/care_tech.png" style="width:220px;height:220px;">
    <h6 class="title"><i>Emotional Wellness Self Monitoring System for College Students taking up thesis.</i></h6>
  
  </div>
  <div class="w3-bar-block">
    
    <a href="test.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" style="text-decoration: none;">About Us</a>
    <div class="dropdown">
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-white" style="text-decoration: none;">Begin Test</a></button>
  <div class="dropdown-content">
    <a href="#Emotional">Emotional Wellness</a>
    <a href="#Occupational">Occupational Wellness</a>
    <a href="#Spiritual">Spiritual Wellness</a>
    <a href="#Intellectual">Intellectual Wellness</a>
    <a href="#Physical">Physical Wellness</a>
    <a href="#Social">Social Wellness</a>
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

  <!-- Emotional -->
  <div class="w3-container" style="margin-top:80px" id="learning">
    <div id="Emotional">
    <h1 class="w3-jumbo"><b>Emotional Wellness</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <h2>1. I have financial problems.</h2>
        <input type='radio' value='1' id="x1" name='button1' style='height:35px; width:20px; vertical-align: middle;' required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="x2" name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="x3" name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="x4" name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="x5" name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>

    <h2>2. I am passionate about what I am doing in my thesis.</h2>
        <input type='radio' value='1' id=
        "y1" name='button2' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="y2" name='button2' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="y3" name='button2'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="y4" name='button2'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="y5" name='button2'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>3. I worry a lot about mistakes that I make.</h2>
        <input type='radio' value='1' id="z1" name='button3' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="z2" name='button3' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="z3" name='button3'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="z4" name='button3'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="z5" name='button3'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>4. I keep my feelings to myself.</h2>
        <input type='radio' value='1' id="a1" name='button4' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="a2" name='button4' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="a3" name='button4'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="a4" name='button4'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="a5" name='button4'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>5. I have family problems (eg. broken family).</h2>
        <input type='radio' value='1' id="b1" name='button5' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="b2" name='button5' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="b3" name='button5'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="b4" name='button5'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="b5" name='button5'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th></div> 

        <a href='evaluation.php'><button type="button" class="button" onclick="myFunction()">Done</button></a>

 




<!--Occupational-->
<div id="Occupational">
        <h1 class="w3-jumbo"><b>Occupational Wellness</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <h2>1. I have financial problems.</h2>
        <input type='radio' value='1' id="x11" name='button11' style='height:35px; width:20px; vertical-align: middle;' required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="x21" name='button11' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="x31" name='button11'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="x41" name='button11'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="x51" name='button11'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>

    <h2>2. I am passionate about what I am doing in my thesis.</h2>
        <input type='radio' value='1' id="y11" name='button21' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="y21" name='button21' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="y31" name='button21'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="y41" name='button21'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="y51" name='button21'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>3. I worry a lot about mistakes that I make.</h2>
        <input type='radio' value='1' id="z11" name='button31' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="z21" name='button31' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="z31" name='button31'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="z41" name='button31'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="z51" name='button31'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>4. I keep my feelings to myself.</h2>
        <input type='radio' value='1' id="a11" name='button41' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="a21" name='button41' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="a31" name='button41'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="a41" name='button41'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="a51" name='button41'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>5. I have family problems (eg. broken family).</h2>
        <input type='radio' value='1' id="b11" name='button51' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2' id="b21" name='button51' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3' id="b31" name='button51'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4' id="b41" name='button51'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5' id="b51" name='button51'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th></div> 

        <a href='evaluation.php?myVar1'><button type="button" class="button" onclick="myFunction1()">Done</button></a>







<div id="Spiritual">
         <h1 class="w3-jumbo"><b>Spiritual Wellness</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <h2>1.  I have strong faith in my religion.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;' required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>2. I have found my purpose of existence. </h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>3. I understand how the world works.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>4. I meditate regularly. </h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>5. I appreciate truth,beauty and unity.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
          <a href='evaluation.php?myVar1=total'><button type="button" class="button" onclick="myFunction1()">Done</button></a>
</div>


<div id="Intellectual">
            <h1 class="w3-jumbo"><b>Intellectual Wellness</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
   
   <h2>1. I am interested in learning new things.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>2. I make an effort to improve my verbal and written skills.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>3. I am able to analyze, synthesize, and see more than one side of an issue.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>4. I enjoy engaging in intellectual discussions.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>5. I enjoy engaging in intellectual discussions.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
</div>
        <div id="Physical">
        <h1 class="w3-jumbo"><b>Physical Wellness</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <h2>1. I exercise regularly.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;' required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>2. I always feel tired. </h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>3. I spent too much time on my computer and mobile phone.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>4. I am a working student. </h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>5. I play sports.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
</div>





        <div id="Social">
         <h1 class="w3-jumbo"><b>Social Wellness</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
   
   <h2>1. I am close with my family.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>2. I always stay at my house.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>3. I have anxiety or nervousness in social situations.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>4. I feel worthless.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
    <h2>5. I isolate yourself from others.</h2>
        <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Never</th><br>
        <input type='radio' value='2'  name='button1' style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Sometimes </th><br>
        <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 4%;">  Neutral  </th><br>
        <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 3%;">  Agree   </th><br>
        <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'required="required"><th style="width: 2%;">  Strongly Agree   </th>
  </div>
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

<button type="submit" class="btn btn-success " style="margin-top: 9%;margin-left: 60%;top: 10px;" name="btn_save">
<span class="glyphicon glyphicon-send"></span> <b>Submit Your Survey Form</b>
</button>
</div> <p id="demo"></p>
  </div>
<!-- End page content -->
</div>



<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"> <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
 //Try 
 function myFunction(){
   var a1 = document.getElementById("x1").checked;
   var a2 = document.getElementById("x2").checked;
   var a3 = document.getElementById("x3").checked;
   var a4 = document.getElementById("x4").checked;
   var a5 = document.getElementById("x5").checked;

   var b1 = document.getElementById("y1").checked;
   var b2 = document.getElementById("y2").checked;
   var b3 = document.getElementById("y3").checked;
   var b4 = document.getElementById("y4").checked;
   var b5 = document.getElementById("y5").checked;
   if (a1 == true){
     a1 = 1;
   }
   else if (a2 == true){
     a2 = 2;
   }
  else if (a3 == true){
     a3 = 3;
   }
   else if (a4 == true){
     a4 = 4;
   }
   else if (a5==true){
     a5 = 5;
   }
   var atotal= a1+a2+a3+a4+a5;
   if (b1 == true){
     b1 = 1;
   }
   else if (b2 == true){
     b2 = 2;
   }
   else if (b3 == true){
     b3 = 3;
   }
   else if (b4 == true){
     b4 = 4;
   }
   else if (b5 == true){
     b5 = 5;
   }
   var btotal=b1+b2+b3+b4+b5;
   var total1 = atotal+btotal;
   var c1 = document.getElementById("z1").checked;
   var c2 = document.getElementById("z2").checked;
   var c3 = document.getElementById("z3").checked;
   var c4 = document.getElementById("z4").checked;
   var c5 = document.getElementById("z5").checked;
   if (c1 == true){
     c1 = 1;
   }
   else if (c2 == true){
     c2 = 2;
   }
   else if (c3 == true){
     c3 = 3;
   }
   else if (c4 == true){
     c4 = 4;
   }
   else if (c5 == true){
     c5 = 5;
   }
   var totalC = c1+c2+c3+c4+c5;
   var totalAfterC = total1 + totalC;
   var d1 = document.getElementById("a1").checked;
   var d2 = document.getElementById("a2").checked;
   var d3 = document.getElementById("a3").checked;
   var d4 = document.getElementById("a4").checked;
   var d5 = document.getElementById("a5").checked;
   if (d1 == true){
     d1 = 1;
   }
   else if (d2 == true){
     d2 = 2;
   }
   else if (d3 == true){
     d3 = 3;
   }
   else if (d4 == true){
     d4 = 4;
   }
   else if (d5 == true){
     d5 = 5;
   }
   var totalD = d1+d2+d3+d4+d5;
   var totalL = totalAfterC + totalD;

   var e1 = document.getElementById("b1").checked;
   var e2 = document.getElementById("b2").checked;
   var e3 = document.getElementById("b3").checked;
   var e4 = document.getElementById("b4").checked;
   var e5 = document.getElementById("b5").checked;
   if (e1 == true){
     e1 = 1;
   } 
   else if (e2 == true){
     e2 = 2;
   }
   else if (e3 == true){
     e3 = 3;
   }
   else if (e4 == true){
     e4 = 4;
   }
   else if (e5 == true){
     e5 = 5;    
   }
   var totalE = e1+e2+e3+e4+e5;
   var total = ((totalL + totalE)/25)*100;  
   alert(total);

   var getInput = parseInt(total);
   localStorage.setItem("storageName",getInput);

}

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


function myFunctionas(){
   var a11 = document.getElementById("x11").checked;
   var a21 = document.getElementById("x21").checked;
   var a31 = document.getElementById("x31").checked;
   var a41 = document.getElementById("x41").checked;
   var a51 = document.getElementById("x51").checked;

   var b11 = document.getElementById("y11").checked;
   var b21 = document.getElementById("y21").checked;
   var b31 = document.getElementById("y31").checked;
   var b41 = document.getElementById("y41").checked;
   var b51 = document.getElementById("y51").checked;
   if (a11 == true){
     a11 = 1;
   }
   else if (a21 == true){
     a21 = 2;
   }
   else if (a31 == true){
     a31 = 3;
   }
   else if (a41 == true){
     a41 = 4;
   }
   else if (a51==true){
     a51 = 5;
   }
   var atotal1= a11+a21+a31+a41+a51;
   if (b11 == true){
     b11 = 1;
   }
   else if (b21 == true){
     b21 = 2;
   }
   else if (b31 == true){
     b31 = 3;
   }
   else if (b41 == true){
     b41 = 4;
   }
   else if (b51 == true){
     b51 = 5;
   }
   var btotal1=b11+b21+b31+b41+b51;
   var total11 = atotal1+btotal1;
   var c11 = document.getElementById("z11").checked;
   var c21 = document.getElementById("z21").checked;
   var c31 = document.getElementById("z31").checked;
   var c41 = document.getElementById("z41").checked;
   var c51 = document.getElementById("z51").checked;
   if (c11 == true){
     c11 = 1;
   }
   else if (c21 == true){
     c21 = 2;
   }
   else if (c31 == true){
     c31 = 3;
   }
   else if (c41 == true){
     c41 = 4;
   }
   else if (c51 == true){
     c51 = 5;
   }
   var totalC1 = c11+c21+c31+c41+c51;
   var totalAfterC1 = total11 + totalC1;
   var d11 = document.getElementById("a11").checked;
   var d21 = document.getElementById("a21").checked;
   var d31 = document.getElementById("a31").checked;
   var d41 = document.getElementById("a41").checked;
   var d51 = document.getElementById("a51").checked;
   if (d11 == true){
     d11 = 1;
   }
   else if (d21 == true){
     d21 = 2;
   }
   else if (d31 == true){
     d31 = 3;
   }
   else if (d41 == true){
     d41 = 4;
   }
   else if (d51 == true){
     d51 = 5;
   }
   var totalD1 = d11+d21+d31+d41+d51;
   var totalL1 = totalAfterC1 + totalD1;

   var e11 = document.getElementById("b11").checked;
   var e21 = document.getElementById("b21").checked;
   var e31 = document.getElementById("b31").checked;
   var e41 = document.getElementById("b41").checked;
   var e51 = document.getElementById("b51").checked;
   if (e11 == true){
     e11 = 1;
   } 
   else if (e21 == true){
     e21 = 2;
   }
   else if (e31 == true){
     e31 = 3;
   }
   else if (e41 == true){
     e41 = 4;
   }
   else if (e51 == true){
     e51 = 5;    
   }
   var totalE1 = e11+e21+e31+e41+e51;
   var totalq = ((totalL1 + totalE1)/25)*100;  
   alert(totalq);


   var getInputt = parseInt(totalq);
   localStorage.setItem("storageNameA",getInputt);

}

</script>
</body>
</html>