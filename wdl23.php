<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<center>
    <h2>Feedback Form</h2>

    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Feedback:<br>
        <textarea name="feedback" required></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        // Set timezone
        date_default_timezone_set("Asia/Kolkata");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        echo "<h3>Feedback Submitted</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Feedback: " . $feedback . "<br><br>";

        echo "Date: " . date("d-m-Y") . "<br>";
        echo "Time: " . date("h:i:s A") . "<br>";
    }
    ?>

</center>

</body>
</html>