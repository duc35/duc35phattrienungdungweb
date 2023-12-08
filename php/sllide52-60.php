<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8'); 

    $sql = 'SELECT * FROM flights';

    $result = $conn-> query($sql);

    if($result->num_rows > 0) 
    {
        while($row = $result-> fetch_assoc())
        {
            echo"FligtID: ".$row["id"].
                " Origin: ". $row["origin"].
                " Destination: ". $row["destination"].
                " Duration: ". $row["duration"]. "<br>";

        } 

    }
    else{
        echo"No flight in database";
    }
    $conn->close();

    ?>

</body>
</html>
hoangduc

<?php
 require './connect.php';
mysqli_set_charset($conn, 'UTF8');
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
print_r($result);
$row = $result->fetch_assoc();
 echo "<br>";
print_r($row);
$row = $result->fetch_assoc();
echo "<br>";
print_r($row);
 $conn->close();

