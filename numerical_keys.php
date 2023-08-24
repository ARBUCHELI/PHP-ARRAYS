<?php
namespace Codecademy;

// Write your code below:
$hybrid_array = [0, 1, 2, 3];
$hybrid_array[8] = "five more";
print_r($hybrid_array);
array_push($hybrid_array, rand());

print_r($hybrid_array);

echo $hybrid_array[9];