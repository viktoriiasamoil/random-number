<?php

$number = (int) $_POST['number'];

if ($number < 0 || $number > 100 || is_numeric($_POST['number'])) {
    die("Incorrect input.");
}

$counter = 0;

do {
    $rand = rand(1,100);
    $counter++;

}
while ($number !== $rand);

echo "The number $number was found from $counter attempt. Computer number is $rand";

