<html>
    <head>
        <title>Creating a database</title>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost","root","","MYSQL");
        if(mysqli_connect_errno())
        {
            echo "Failed to connect MySQL:".mysqli_connect_error();
        }
        else
        {
            echo "Database connected successfully";
        }

        $sql="Create Database BCA";
        
        if(mysqli_query($con,$sql))
        {
            echo "<br> Database  BCA created successfully";
        }
        else
        {
            echo "Database not created".mysqli_error($con);
        }

        mysqli_close($con);
        ?>
    </body>
</html>