<?php

$marks = [85, 85, 95];

$marks[1] = 90;


$ave = array_sum($marks) / count($marks);

if ($ave >= 50) {
    $status = "PASSED";
} else {
    $status = "FAILED";
}

echo "Average Mark: " . $ave . "<br>";
echo "Status: " . $status;
?>