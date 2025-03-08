<?php
// Create an array of colors
$colors = array("red", "green", "blue");

// Create a function to get a random color from the array
function getRandomColor() {
  // Randomly select an index from the array
  $index = rand(0, count($colors) - 1);

  // Return the corresponding color
  return $colors[$index];
}

// Get a random color and print it to the page
echo getRandomColor();
?>