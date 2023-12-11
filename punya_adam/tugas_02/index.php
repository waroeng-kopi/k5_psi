<!DOCTYPE html>
<html>
<head>
    <title>Input Validation</title>
</head>
<body>
    <?php
    // Function to validate the input
    function validateInput($input) {
        // Define regular expressions to check for the required criteria
        $minLengthRegex = '/^.{8,}$/';
        $numberRegex = '/\d/';
        $lowercaseRegex = '/[a-z]/';
        $uppercaseRegex = '/[A-Z]/';
        $symbolRegex = '/[^a-zA-Z0-9]/'; // This matches any character that is not a letter or a number

        // Check each criterion
        $isValid = true;
        if (!preg_match($minLengthRegex, $input)) {
            $isValid = false;
            echo "Input must be 8 characters or more.<br>";
        }
        if (!preg_match($numberRegex, $input)) {
            $isValid = false;
            echo "Input must contain at least one number.<br>";
        }
        if (!preg_match($lowercaseRegex, $input)) {
            $isValid = false;
            echo "Input must contain at least one lowercase letter.<br>";
        }
        if (!preg_match($uppercaseRegex, $input)) {
            $isValid = false;
            echo "Input must contain at least one uppercase letter.<br>";
        }
        if (!preg_match($symbolRegex, $input)) {
            $isValid = false;
            echo "Input must contain at least one symbol.<br>";
        }

        if ($isValid) {
            echo "Input is valid!";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userInput = $_POST["userInput"];
        validateInput($userInput);
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="userInput">Enter your input: </label>
        <input type="text" id="userInput" name="userInput">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
