<?php

$x = 0;
while ($x < 10) {
    echo $x . "<br>";
    $x++;
}


$a = 1;
do {
    if ($a == 4) {
        $a++;
        break;
    }
    echo $a . "<br>";
    $a++;
} while ($a <= 10);

for ($i = 0; $i < 10; $i++) {
    if ($i == 4) {
        continue;
    }
    echo $i;
}
echo "<br>";
$cars = ["volvo", "benz", "toyota", 'mazda'];
foreach ($cars as $key => $value) {
    echo $value . "<br>";
}