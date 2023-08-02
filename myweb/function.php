<?php
declare(strict_types=1);

function display()
{
    echo "Hello World<br>";
}
display();

function echoo($value)
{
    echo $value . "<br>";
}

echoo('hello world');
echoo('hello world');
echoo('hello world');
echoo('hello world');

function sumNum(int $val1, int $val2)
{
    return $val1 + $val2;
}
echoo(sumNum(10, 5));

function getAge($year)
{
    $age = date('Y') - $year;
    return $age;
}

echoo(getAge('1998'));

function setHeight(int $minheight = 50)
{
    return $minheight;
}
echoo(setHeight());

function sub(int $val1, int $val2)
{
    return $val1 - $val2;
}
var_dump(sub(20, 10));

function add_two(&$num)
{
    $num += 2;
}

$numb = 10;
add_two($numb);
echoo($numb);