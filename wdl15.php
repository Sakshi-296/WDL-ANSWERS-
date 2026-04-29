<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>

<center>
    <h2>Student Marks Calculation</h2>

    <form method="POST">
        Enter Marks for 5 Subjects:<br><br>
        
        Subject 1: <input type="number" name="m1" required><br><br>
        Subject 2: <input type="number" name="m2" required><br><br>
        Subject 3: <input type="number" name="m3" required><br><br>
        Subject 4: <input type="number" name="m4" required><br><br>
        Subject 5: <input type="number" name="m5" required><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        // Store marks in array
        $marks = array(
            $_POST['m1'],
            $_POST['m2'],
            $_POST['m3'],
            $_POST['m4'],
            $_POST['m5']
        );

        // Calculate maximum marks
        $max = max($marks);

        // Calculate total and percentage
        $total = array_sum($marks);
        $percentage = $total / 5;

        echo "<h3>Results:</h3>";
        echo "Marks: " . implode(", ", $marks) . "<br>";
        echo "Maximum Marks: " . $max . "<br>";
        echo "Total Marks: " . $total . "<br>";
        echo "Percentage: " . $percentage . "%";
    }
    ?>

</center>

</body>
</html>