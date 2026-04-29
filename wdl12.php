<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body bgcolor="lightblue">

<center>
    <h1>Welcome to Dashboard</h1>

    <?php
        // Set timezone (India)
        date_default_timezone_set("Asia/Kolkata");

        // Display current date and time
        echo "<h2>Current Date: " . date("d-m-Y") . "</h2>";
        echo "<h2>Current Time: " . date("H:i:s") . "</h2>";
    ?>

</center>

</body>
</html>