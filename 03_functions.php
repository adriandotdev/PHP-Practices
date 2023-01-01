<?php
// normal function without parameter
function Add($num1, $num2)
{
    return $num1 + $num2;
}

// anonymous function
$Subtract = function ($num1, $num2) {
    return $num1 - $num2;
};

// Arrow Function
$Multiply = fn ($num1, $num2) => $num1 * $num2;

echo Add(5, 5) . '<br>';
echo $Subtract(10, 5) . '<br>';
echo $Multiply(5, 5) . '<br>';
