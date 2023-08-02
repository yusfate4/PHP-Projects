<?php
$date = date('H');
if ($date < "12") {
    echo "Have a good day";
} else if ($date < "17") {
    echo "Have a good afternoon";
} else {
    echo "Have a good night";
}
echo "<br>";
$favcolor = 'green';
switch ($favcolor) {
    case 'blue':
        echo "My favourite color is yellow";
        break;


    case 'green':
        echo "My favourite color is green";
        break;

    default:
        echo "favourite color not found";
        break;
}