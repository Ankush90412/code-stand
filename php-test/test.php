<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Calculator</title>
</head>
<body>
    <h2>Sum Calculator</h2>

    <?php
    // Check if parameters 'num1' and 'num2' are provided in the URL query string
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        // Retrieve and sanitize input values
        $num1 = floatval($_GET['num1']); // Convert to float
        $num2 = floatval($_GET['num2']); // Convert to float

        // Calculate the sum
        $sum = $num1 + $num2;

        // Display the result
        echo "<p>Sum of $num1 and $num2 is: $sum</p>";
    } else {
        // Display error message if parameters are missing
        echo "<p>Error: Please provide 'num1' and 'num2' parameters in the URL.</p>";
    }
    ?>

    <p>Usage: <strong>calculate_sum.php?num1=5&num2=10</strong></p>
</body>
</html>
