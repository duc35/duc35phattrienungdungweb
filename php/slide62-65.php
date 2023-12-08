<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    if($result -> num_rows > 0)
    {
        echo"
        <table border = '1' width =50% align ='center'>
        <caption> <b> BẢNG THÔNG TIN </b></caption>
        <tr>
            <th>ID</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Duration</th>
        </tr>";
        while($row = $result -> fetch_assoc())
        {
            if($row['id'] % 2 ==0)
            {
                echo"<tr class ='odd'><td>". $row['id']. "</td>";
            }
            else
            {   
                echo"<tr class ='even'><td>". $row['id']. "</td>";

            }
            echo"<td>" . $row['origin']. "</td>".
                "<td>" . $row['destination']. "</td>".
                "<td>" . $row['duration']. "</td></tr>";
        }
    }
    else{
        echo"No flight in database";
    }
    ?>

</body>
</html>
hoangduc


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4-search.css">
    <title>Document</title>
</head>
<body>
    <h2>Search Flight</h2>
    <form action="" method = 'get' name ='register'>
        Origin <input type="text" name='origin'><br>
        Destination <input type="text" name ='destination'><br>
        <input type="submit" value='Search'><br>

    </form>
    <?php
{
            require 'connect.php';
            $origin = $_GET['origin'];
            $destination = $_GET['destination'];

            mysqli_set_charset($conn, 'UTF8');

            $sql = 'SELECT * FROM flights';
            $result = $conn->query($sql);

            require '4-displayFlight.php ';
            $conn->close();
}
    ?>
</body>
</html>