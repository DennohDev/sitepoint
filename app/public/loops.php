<?php

$x = 0;

do {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
while($x < 10);


// For Each Loop

$cars = ["volvo", "Ferari", "Mazda", "Toyota"];

$numbers = [4,6,20, 3 ];

foreach ($numbers as $x) {
    echo $x;
}


for($y = 0; $y <= 10; $y++) {
    echo "$y <br>";
}