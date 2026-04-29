<!DOCTYPE html>
<html>
<head>
    <title>Search Roll Number</title>
</head>
<body>

<center>
    <h2>Search Student Roll Number</h2>

    <form method="POST">
        Enter Roll Number to Search:
        <input type="number" name="roll" required>
        <br><br>
        <input type="submit" name="submit" value="Search">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        // Array of roll numbers
        $roll_numbers = array(101, 102, 103, 104, 105);

        $search = $_POST['roll'];

        // Search using in_array()
        if(in_array($search, $roll_numbers))
        {
            echo "<h3>Roll Number " . $search . " is FOUND in the list.</h3>";
        }
        else
        {
            echo "<h3>Roll Number " . $search . " is NOT FOUND.</h3>";
        }
    }
    ?>

</center>

</body>
</html>