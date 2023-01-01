<?php
$fruits = ['apple', 'orange', 'pear'];

// To get the length or number of elements in an array.
echo 'Length: ' . count($fruits) . '<br>'; // returns an integer.

// To search a certain value in an array.
echo 'IS FOUND: ' . var_dump(in_array('banana', $fruits)) . '<br>'; // returns boolean value. 

// Adding values to an array.
$fruits[] = 'banana';
array_push($fruits, 'mango');
array_unshift($fruits, 'grapes');
print_r($fruits);
echo '<br>';

array_pop($fruits); // removes the element at the end of the array.
array_shift($fruits); // removes the element at the beginning of the array.
unset($fruits[2]); // removes the specified element.

print_r($fruits);
echo '<br>';

// Split into chunks
$array = [1, 2, 3, 4, 5, 6, 7];
$chunked_array = array_chunk($array, 2);
print_r($chunked_array);
echo '<br>';

// Concatenating or combining arrays.
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, 4, 5, 6]; // Spread operator just like javascript

print_r($arr3);
echo '<br>';
print_r($arr4);
echo '<br>';

// Making first array as key and second array as values.
$keys = ['green', 'red', 'yellow'];
$values = ['avocado', 'apple', 'banana'];

$combined = array_combine($keys, $values);
print_r($combined);
echo '<br>';

// To make an array of keys.
$arrayOfKeys = array_keys($combined);
// To make an array of values
$arrayOfValues = array_values($combined);

print_r($arrayOfKeys);
echo '<br>';
print_r($arrayOfValues);
echo '<br>';

// to flipped the keys and values in the array
$flippedArray = array_flip($combined);

print_r($flippedArray);
echo '<br>';

// Mapping an array
$originalNumbers = [1, 2, 3, 4, 5];

$newArray = array_map(function ($number) {

    return "Number ${number}";
}, $originalNumbers);

print_r($newArray);
echo '<br>';

// Filtering an array
$DivisibleByTwo = array_filter($originalNumbers, function ($number) {
    return $number % 2 === 0;
});

print_r($DivisibleByTwo);
