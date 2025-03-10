<?php
function getRandomColor() {
    $colors = array('blue', 'green', 'red', 'yellow');
    return $colors[array_rand($colors)];
}
?>