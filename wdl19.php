<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>

<center>
    <h2>String Operations</h2>

    <form method="POST">
        Enter a String: <input type="text" name="str" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        $str = $_POST['str'];

        echo "<h3>Results:</h3>";

        // a) Uppercase
        echo "Uppercase: " . strtoupper($str) . "<br>";

        // b) Lowercase
        echo "Lowercase: " . strtolower($str) . "<br>";

        // c) First character uppercase
        echo "First Character Uppercase: " . ucfirst($str) . "<br>";

        // d) First character of all words uppercase
        echo "First Character of Each Word: " . ucwords($str) . "<br>";

        // e) Remove leading zeroes
        $num = ltrim($str, "0");
        echo "After Removing Leading Zeroes: " . $num . "<br>";

        // f) Reverse, Length, Substring
        echo "Reversed String: " . strrev($str) . "<br>";
        echo "Length: " . strlen($str) . "<br>";
        echo "Substring (first 5 chars): " . substr($str, 0, 5) . "<br>";
    }
    ?>

</center>

</body>
</html>