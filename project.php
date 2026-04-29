<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $team = $_POST['team'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Registration</title>
</head>

<body style="font-family: Arial;">

<h2>Project Competition Registration</h2>

<!-- Form -->
<form method="POST">
    Name: <br>
    <input type="text" name="name"><br><br>

    Email: <br>
    <input type="text" name="email"><br><br>

    Project Title: <br>
    <input type="text" name="project"><br><br>

    Team Size: <br>
    <input type="number" name="team"><br><br>

    <input type="submit" value="Register">
</form>

<hr>

<!-- Display Data -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Submitted Details:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Project Title: " . $project . "<br>";
    echo "Team Size: " . $team . "<br>";
}
?>

</body>
</html>