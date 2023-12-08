<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'hoangduc';
    $conn = new mysqli($servername, $username, $password, $db);

    if($conn-> connect_error){
        die('Connection failed: '. $conn-> connect_error);
    }
    echo"Connected successfully <br>";
    
    // $sql = "INSERT INTO flights (Origin, Destination, Duration) VALUES ('Hà Nội','Paris','4000')";
    // // run the sql query
    // $conn->query($sql);
    // $conn->close();

    ?>
    
    
</body>
</html>