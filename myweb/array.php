<?php

function echoo($value)
{
    echo $value . "<br>";
}

$cars = ['Benz', 'Volvo', 'Toyota', 'Honda'];
for ($i = 0; $i < count($cars); $i++) {
    echoo($cars[$i]);
}

$person = ['name' => "Sunday Micheal", 'age' => 20, 'color' => 'black'];
foreach ($person as $key => $value) {
    echoo($key . "=>" . $value);
}
print_r($person);

$students = [
    '001' => [
        'name' => 'Micheal Sunday',
        'course' => 'Web development',
        'email' => 'sunday@gmail.com',
        'subjects' => ['PHP', 'mysql',
        ]
    ],
    '002' => [
        'name' => 'Yusuf',
        'course' => 'Web development',
        'email' => 'ysuuf@gmail.com',
        'subjects' => ['php', 'mysql']
    ],
];