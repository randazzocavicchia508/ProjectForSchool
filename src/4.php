<?php

// This is a comment

function getRandomNumber($min = 0, $max = 10) {
    // Randomize the number
    $randomNumber = rand($min, $max);

    return $randomNumber;
}

// Use the function to get a random number between 5 and 15
$randomNumber = getRandomNumber(5, 15);

echo "The random number is: $randomNumber";

?>
