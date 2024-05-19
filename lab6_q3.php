<?php
function calculateArea($width, $height) {
    // Calculate the area of the rectangle
    $area = $width * $height;
    return $area;
}

// Call the function with sample values
$width = 5;
$height = 10;
$area = calculateArea($width, $height);

// Display the result
echo "The area of the rectangle with width $width and height $height is $area.";
?>