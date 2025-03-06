<?php
echo "Enter a number: ";
$number = trim(fgets(STDIN));

if (!is_numeric($number)) {
    echo "Invalid input. Please enter a number.\n";
    exit();
}

$number = (int)$number;

if ($number % 2 == 0) {
    echo "$number is Even.\n";
} else {
    echo "$number is Odd.\n";
}

if ($number > 0) {
    echo "$number is Positive.\n";
} elseif ($number < 0) {
    echo "$number is Negative.\n";
} else {
    echo "The number is Zero.\n";
}
?>
