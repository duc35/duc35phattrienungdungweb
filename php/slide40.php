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
if ($conn->connection_error)
{
  die('Connection failed:' . $conn->connection_error);

}
echo "Connected successfully <br>";
?>

</body>
</html>
