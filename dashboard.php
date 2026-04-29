<?php
date_default_timezone_set("Asia/Kolkata"); // Set timezone

$currentDate = date("d-m-Y");
$currentTime = date("h:i:s A");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top:50px;">

    <h1>Welcome to Dashboard</h1>

    <h2>
        <?php
            echo "Hello Student!";
        ?>
    </h2>

    <p>
        <?php
            echo "Today's Date: " . $currentDate;
        ?>
    </p>

    <p>
        <?php
            echo "Current Time: " . $currentTime;
        ?>
    </p>

</body>
</html>