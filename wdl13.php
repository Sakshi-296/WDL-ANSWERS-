<!DOCTYPE html>
<html>
<head>
    <title>Project Competition Registration</title>
</head>
<body>

<center>
    <h2>Project Competition Registration Form</h2>

    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Project Title: <input type="text" name="project" required><br><br>
        College Name: <input type="text" name="college" required><br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $project = $_POST['project'];
        $college = $_POST['college'];

        echo "<h3>Registration Details</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Project Title: " . $project . "<br>";
        echo "College Name: " . $college . "<br>";
    }
    ?>

</center>

</body>
</html>