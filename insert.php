<!DOCTYPE html>
    <head><title>Inserting data</title>
    <link rel="stylesheet" href="insert.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="icon" href="raichu.png" sizes="32x32" type="image/png">


    </head>
    <body>
        <div class="bg">
        <?php
            $con=mysqli_connect("localhost","root","","BCA");

            if(mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: ".mysqli_connect_error();
            }
            /*else
            {
                echo "Database connected successfully";
            }
             */
            $first_name=mysqli_real_escape_string($con,$_POST['first_name']);
            $last_name=mysqli_real_escape_string($con,$_POST['last_name']);
            $age=mysqli_real_escape_string($con,$_POST['age']);
            $payment=mysqli_real_escape_string($con, $_POST['payment']);

            mysqli_query($con,"insert into Data (Firstname, Lastname, Age, Payment) values ('$first_name', '$last_name', '$age', '$payment' )");

           // echo "<br> Records has been inserted successfully";

            mysqli_close($con);
        ?>

            <div class="thnx">
                <button type="submit" class="btn" onclick="openPopup()">The End</button>
                <div class="popup" id="popup">
                    <h2>Thank You</h2>
                    <p class="txt">Your details has been successfully submitted. Thanks!</p>
                    <button type="button" onclick="closePopup()">OK</button>
                </div>
            </div>        
            <script>
                let popup = document.getElementById("popup");
                
                function openPopup(){
                    popup.classList.add("open-popup");
                }

                function closePopup(){
                    popup.classList.remove("open-popup");
                }

            </script>
        </div>
    </body>
</html>