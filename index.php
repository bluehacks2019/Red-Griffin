
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Care Tech</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    $conn = mysqli_connect('localhost','root','','records');
    if (!$conn) {
        echo "<script> alert('Not Connected!'); </script>";
    }
?>
<body>

   
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Please fill up this form</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="age"></label>
                                <input type="text" name="age" id="age" placeholder="Your Age" required="required"/>
                            </div>    
                              <div class="form-group">
                                <label for="course"></label>
                                <input type="text" name="course" id="age" placeholder="Your Course" required="required"/>
                            </div>    
                           
                           

                             <div class="form-group">
                                Male:
                                <input type="radio" name="gender" value="Male" class="agree-term" required="required" />
                                Female:
                                <input type="radio" name="gender" value="Female" class="agree-term" required="required"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" onclick="window.location.href='test.php'" class="form-submit" value="Confirm"/>
                            </div>
                        </form>
                    </div>
                
                </div>
            </div>
        </section>


  
    <?php

        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $course = $_POST['course'];
            $gender = $_POST['gender'];

            $query = mysqli_query($conn, "INSERT INTO `students`(`name`, `age`, `course`, `gender`) VALUES ('$name', '$age', '$course', '$gender')");


            if ($query) {
                echo "<script> alert('SAVED'); </script>";
                echo "<script> location.replace('test.php')</script>";
            }
            else
            {
                echo "<script> alert('NOT SAVED'); </script>";
            }
        }
        

    ?>
 

     
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>