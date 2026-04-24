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
    
    echo "<p> The days of the week in English Are: </p> ";
    while ($index <= 6) { 
        echo "<p>$days[$index]</p>";
        $index += 1; 
    }

        $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    
    $index = 0; 
    
    
    echo "<p> The days of the week in French Are: </p> ";
    while ($index <= 6) { 
        echo "<p>$days[$index]</p>";
        $index += 1; 
    }





?>

</body>
</html>