<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <table border="1px" width="70%" align="center">
        <thead>
            <th>S/N</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Course</th>
            <th>Duration</th>
            <th>Re. Date</th>
            <th>Subjects</th>
        </thead>
        <tbody>
            <?php
            $students = [
                '001' => [
                    'name' => 'Micheal Sunday',
                    'course' => 'Web development',
                    'email' => 'sunday@gmail.com',
                    'duration' => '3 months',
                    'reg_date' => '28-07-2023',
                    'subjects' => ['PHP', 'mysql'],
                ],
                '002' => [
                    'name' => 'Micheal Sunday',
                    'course' => 'Web development',
                    'email' => 'sunday@gmail.com',
                    'duration' => '3 months',
                    'reg_date' => '28-07-2023',
                    'subjects' => ['PHP', 'mysql'],
                ],
                '003' => [
                    'name' => 'Micheal Sunday',
                    'course' => 'Web development',
                    'email' => 'sunday@gmail.com',
                    'duration' => '3 months',
                    'reg_date' => '28-07-2023',
                    'subjects' => ['PHP', 'mysql'],
                ],
                '004' => [
                    'name' => 'Micheal Sunday',
                    'course' => 'Web development',
                    'email' => 'sunday@gmail.com',
                    'duration' => '3 months',
                    'reg_date' => '28-07-2023',
                    'subjects' => ['PHP', 'mysql'],
                ],
                '005' => [
                    'name' => 'Micheal Sunday',
                    'course' => 'Web development',
                    'email' => 'sunday@gmail.com',
                    'duration' => '3 months',
                    'reg_date' => '28-07-2023',
                    'subjects' => ['PHP', 'mysql'],
                ],
            ];
            $sn = 0;


            foreach ($students as $key => $value) {
                $subject = "";
                for ($i = 0; $i < count($value['subjects']); $i++) {
                    $subject .= $value['subjects'][$i] . ",";
                }
                $sn++;
                echo '<tr>
                            <td>' . $sn . '</td>
                            <td>' . $value['name'] . '</td>
                            <td>' . $value['email'] . '</td>
                            <td>' . $value['course'] . '</td>
                            <td>' . $value['duration'] . '</td>
                            <td>' . $value['reg_date'] . '</td>
                            <td>' . $subject . '</td>                 
                        </tr>';
            }
            ?>
        </tbody>
       </table>
    </body>
</html>