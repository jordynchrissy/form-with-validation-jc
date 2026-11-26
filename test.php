<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // connection string
    $con = mysqli_connect("localhost", "root", "");

    //check the connection
    if($con===false){
        die("ERROR: Could not connect.".mysqli_connect_error());
    }
    // indicate if the connection is successful
    echo "Connection successful";

    ?>
    
</body>
</html>