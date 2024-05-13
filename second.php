<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Result</title>
</head>
<body>
    <h2>Sum Result</h2
    
    <?php
    // Check if the form is submitted with a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the numbers from the form input
        $num1 = isset($_POST["num1"]) ? $_POST["num1"] : 0;
        $num2 = isset($_POST["num2"]) ? $_POST["num2"] : 0;

        // Validate and sanitize the input (convert to integers)
        $num1 = intval($num1);
        $num2 = intval($num2);

        // Calculate the sum
        $sum = $num1 + $num2;

        // Display the result
        echo "<p>The sum of $num1 and $num2 is: $sum</p>";
    }
    ?>
    
    <p><a href="index.html">Back to Calculator</a></p>
</body>
</html>
