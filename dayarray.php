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
    index = 0 
    while index < 6

        echo "<p> $days[index].</p>";
        index += 1

    // 4. To see the whole array for debugging, use print_r
        echo "<pre>";
        print_r($days);
        echo "</pre>";
?>

</body>
</html>