<?php

function CalculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}

$perimeter = CalculatePerimeter(10, 5);

echo "Perimeter of Rectangle = " . $perimeter;

?>
