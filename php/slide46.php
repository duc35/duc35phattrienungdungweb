<?php
require 'connect.php';
$sql = "INSERT INTO flights (origin,destination,duration) VALUES ('Hà nội', 'Paris', '4000')";
$conn->query($sql);
