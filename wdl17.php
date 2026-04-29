<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>

<center>
    <h2>Student Information Form</h2>

    <form method="POST">
        Name: <input type="text" name="name" required><br><br>

        Marks:<br>
        Subject 1: <input type="number" name="m1" required><br><br>
        Subject 2: <input type="number" name="m2" required><br><br>
        Subject 3: <input type="number" name="m3" required><br><br>
        Subject 4: <input type="number" name="m4" required><br><br>
        Subject 5: <input type="number" name="m5" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        // Get name
        $name = $_POST['name'];

        // String functions
        $upper = strtoupper($name);
        $length = strlen($name);

        // Store marks in array
        $marks = array(
            $_POST['m1'],
            $_POST['m2'],
            $_POST['m3'],
            $_POST['m4'],
            $_POST['m5']
        );

        // Calculate total and average
        $total = array_sum($marks);
        $average = $total / count($marks);

        echo "<h3>Result</h3>";
        echo "Original Name: " . $name . "<br>";
        echo "Name in Uppercase: " . $upper . "<br>";
        echo "Length of Name: " . $length . "<br><br>";

        // Display marks using loop (instead of implode)
        echo "Marks: ";
        for($i = 0; $i < count($marks); $i++) {
            echo $marks[$i] . " ";
        }
        echo "<br>";

        echo "Total Marks: " . $total . "<br>";
        echo "Average Marks: " . $average . "<br>";
    }
    ?>

</center>

</body>
</html>
