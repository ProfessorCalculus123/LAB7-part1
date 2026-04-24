<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>

    <h1>PHP Variables, arrays and operators </h1>

<?php
    $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    
    $index = 0; // Added $ and semicolon
    
    // Condition needs parentheses and the loop needs curly braces { }
    while ($index <= 6) { 
        echo "<p>$days[$index]</p>";
        $index += 1; // Added $ and semicolon
    }

    // Moved print_r outside the loop so it only prints once
    echo "<h3>Array Debugging:</h3>";
    echo "<pre>";
    print_r($days);
    echo "</pre>";
?>

</body>
</html>