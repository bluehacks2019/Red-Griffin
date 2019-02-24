 <?php

        
            $total = $_POST['total'];
            

            $query = mysqli_query($conn, "INSERT INTO `students`('total') VALUES ('$total')");


            if ($query) {
                echo "<script> alert('SAVED'); </script>";
                echo "<script> location.replace('test.php')</script>";
            }
            else
            {
                echo "<script> alert('NOT SAVED'); </script>";
            }

?>