<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

<center>
    <h2>String Manipulation Program</h2>

    <form method="POST">
        Enter a String: <input type="text" name="str" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        $str = $_POST['str'];

        // Length of string
        $length = strlen($str);

        // Reverse string
        $reverse = strrev($str);

        // Substring (first 5 characters)
        $substring = substr($str, 0, 5);

        echo "<h3>Results:</h3>";
        echo "Original String: " . $str . "<br>";
        echo "Length: " . $length . "<br>";
        echo "Reversed String: " . $reverse . "<br>";
        echo "Substring (first 5 characters): " . $substring . "<br>";
    }
    ?>

</center>

</body>
</html>