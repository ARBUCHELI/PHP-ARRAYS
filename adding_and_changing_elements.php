<?php
namespace Codecademy;

$change_me = [3, 6, 9];
// Write your code below:

$change_me[] = "four";
$change_me[] = 4;
$change_me[1] = "tadpole";

echo implode(", ", $change_me);