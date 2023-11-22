<!DOCTYPE html>
<html lang="en" dir="1tr">
    <head>
        <meta charset="utf-8">
        <title>duc</title>
</head>
<body>
    <?php
    echo "THE GAME ";
    if ($_GET["response"] == "yes")
    {
        echo " HAS BEEN QUITED";
    }
    if ($_GET["response"] == "no")
    {
        echo " WILL BE CONTINUED IN 3 SECOND";
    }
    echo "<br>AFTER IF STATAMENT";
    ?>
    </body>
    </html>
    