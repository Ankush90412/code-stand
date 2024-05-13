<?php
// Check if the form is submitted with a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user's name from the form input
    $name = isset($_POST["name"]) ? $_POST["name"] : '';

    // Validate and sanitize the input (trim any extra whitespace)
    $name = trim($name);

    // Generate a personalized greeting message
    if (!empty($name)) {
        $greeting = "Hello, $name! Welcome!";
    } else {
        $greeting = "Hello, Guest! Please enter your name.";
    }

    // Display the greeting message
    echo "<h2>$greeting</h2>";
}
?>
