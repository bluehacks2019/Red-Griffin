<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stage1.css">
    <link rel="shortcut icon" href="images/SELF.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      
    </script>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Care Tech</b></h3>
  </div>
  <div class="w3-bar-block">
    
    <a href="test.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Learning</a>
    <a href="test.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Aim</a>
    <a href="exam1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Begin Test</a>
    <a href="eval.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Evaluation</a>    
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
  <table class='table table-hover table-responsive table-condensed' style='margin-left: 4.5%;color:black;position: fixed;margin-top: 6.7%;'>
                              <thead>
                     
                                
                                </thead>
                            </table>


 <div class="fixed_header">
                
                            <table class='table-hover table-responsive table-condensed' 
                            style='width: 89%;color:black;position: fixed;margin-top: 9%;margin-left: -33px;overflow-y: scroll;' border="0">
                          
                              <thead>
                                <tr>
                                 <th style="width: 20%;">Personality Traits</th>
                                 <th style="width: 2%;">Neutral</th>
                                 <th style="width: 2%;">Sometimes</th>
                                 <th style="width: 4%;">Often</th>
                                 <th style="width: 3%;">Agree</th>
                                 <th style="width: 2%;">Strongly Agree</th> 
                                </tr>
                              </thead>
                              <tbody style="overflow-y: scroll;width: 89%;position: fixed;">
                              <tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>1. I learn something new in every project.</td>
                                    <td> <input type='radio' value='1'  name='button1' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button1'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>2. I am a quick learner and a great team player.</td>
                                    <td> <input type='radio' value='1'  name='button2' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button2'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button2'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button2'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button2'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>3. I see myself in a senior position managing important portfolio of this company.</td>
                                    <td> <input type='radio' value='1'  name='button3' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button3'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button3'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button3'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button3'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>Whatever encounter problem, I feel challenged professionally.</td>
                                    <td> <input type='radio' value='1'  name='button4' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button4'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button4'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button4'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button4'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>The team which I was a part of have successfully completed the projects within a deadline.</td>
                                    <td> <input type='radio' value='1'  name='button5' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button5'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button5'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button5'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button5'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>I will be constantly keeping tab of assigned work within my subordinates and seniors, finishing the assigned job before deadlines.</td>
                                    <td> <input type='radio' value='1'  name='button6' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button6'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button6'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button6'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button6'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>I keep myself calm and focus on multi tasking while being patient.</td>
                                    <td> <input type='radio' value='1'  name='button7' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button7'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button7'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button7'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button7'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>I enrolled myself for some advanced personality development course with some freelance work.</td>
                                    <td> <input type='radio' value='1'  name='button8' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button8'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button8'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button8'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button8'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>I ensure to complete my projects within stipulated time.</td>
                                    <td> <input type='radio' value='1'  name='button9' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button9'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button9'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button9'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button9'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr><tr>
                                  
                                    <td style='font-size:20px;font-weight:bold;width:15%;'>LOYAL</td>
                                    <td> <input type='radio' value='1'  name='button10' style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='2'  name='button10'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='3'  name='button10'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td> <input type='radio' value='4'  name='button10'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                    <td style='width:2%;'> <input type='radio' value='5'  name='button10'  style='height:35px; width:20px; vertical-align: middle;'> </td>
                                  </tr>                                    

                              </tbody>
                            </table>
                              <button type="submit" class="btn btn-success " style="margin-top: 39%;margin-left: 65%;top: 50px;" name="btn_save">
                                <span class="glyphicon glyphicon-send"></span> <b>Submit Your Survey Form</b>
                              </button>
                          </div> 

  

<!-- End page content -->
</div>
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
