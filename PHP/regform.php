<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <?php
    function sanitize_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $firstname = $age = $gender = $motto = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = sanitize_input($_POST["firstname"]);
        $age = sanitize_input($_POST["age"]);
        $gender = sanitize_input($_POST["gender"]);
        $motto = sanitize_input($_POST["motto"]);

 
        if (empty($firstname) || empty($age) || empty($gender) || empty($motto)) {
            $error = "All fields are required.";
        } else {
            echo "<h3>You are $firstname, a $age-year-old $gender. Your motto in life is: \"$motto\"</h3>";
        }
    }
    ?>

 
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="firstname">First Name:</label><br>
        <input type="text" name="firstname" id="firstname" value="John Michael"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" id="age" value="22"><br><br>

        <label for="gender">Gender:</label><br>
        <select name="gender" id="gender">
            <option value="">--Select--</option>
            <option value="Male" selected>Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="motto">Quote in Life:</label><br>
        <textarea name="motto" id="motto" rows="3" cols="30">Nothhing is true, everything is permitted. -Hassan-I-Sabbah</textarea><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>