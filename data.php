<html>
    <head>
        <title>Creating A table</title>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost","root","","BCA");

        if(mysqli_connect_errno())
        {
            echo "Failed to connect to MYSQL: ".mysqli_connect_error();
        }
        else
        {
            echo "Connected to Database Successfully";
        }

        $sql="Create Table Data(Firstname char(30), Lastname char(30), Age int, Payment int)";

        if(mysqli_query($con,$sql))
        {
            echo "<br> Table Data created successfully";
        }
        else
        {
            echo "Error in creating table".mysqli_error($con);
        }

        mysqli_close($con);
        ?>
    </body>
</html>