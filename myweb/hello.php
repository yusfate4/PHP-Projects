<?php
/*
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";
echo "<br>";
echo "<br>";
$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo "Your favourite color is red!";
        break;
    case 'blue':
        echo "Your favourite color is blue!";
        break;
    case 'green':
        echo "Your favourite color is green!";
        break;
    default:
        echo "Your favourite color is neither red, blue, nor green";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

function setHeight(int $minheight = 50)
{
    echo "The height is: $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(1350);
setHeight(38);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


function add_five(&$value)
{
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$age = array("Peter" => "35", "Yusuf" => "12", "Oyin" => "34");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$car = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land ROver", 17, 15),
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $car[$row][$col] . "</li>";
    }
    echo "</ul>";

}
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);
*/

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);