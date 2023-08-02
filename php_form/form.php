<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

$error_fname = $error_lname = $error_email = $error_password = $error_number = "";
$fname = $lname = $email = $password = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $error_fname = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $error_fname = "Only letters and white space allowed";
        }
    }



    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $fname = $_POST['fname'];
//     if (empty($fname)) {
//         $error_fname = "First name is required";
//     } else if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
//         $error_fname = "Only letters and white space allowed";
//     } else {
//         $fname = test_input($fname);
//     }

    if (empty($_POST["lname"])) {
        $error_lname = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $error_lname = "Only letters and white space allowed";
        }
    }

    // $lname = $_POST['lname'];
    // if (empty($lname)) {
    //     $error_lname = "Last name is required";
    // } else if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
    //     $error_lname = "Only letters and white space allowed";
    // } else {
    //     $lname = test_input($lname);
    // }

    if (empty($_POST["email"])) {
        $error_email = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "Invalid email format";
        }
    }

    // $email = $_POST['email'];
    // if (empty($email)) {
    //     $error_email = "Email is required";
    // }
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $error_email = "Invalid email format";
    // } else {
    //     $email = test_input($email);
    // }

    $password = $_POST['password'];
    if (empty($password)) {
        $error_password = "Password required";
    } else if (!preg_match("@[^\W]@", $password) || !preg_match('@[0-9]@', $password) || preg_match('@[a-z]@', $password) || preg_match('@[A-Z]@', $password)) {
        $error_password = "Strong password";
    } else {
        $password = test_input($password);
    }

    // if (!$password || strlen($password) < 8) {
    //     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    // } else {
    //     echo 'Strong password.';
    // }


    $number = $_POST['number'];
    if (empty($number)) {
        $error_number = "Phone number is required";
    } else if (!preg_match('@[0-9]@', $number)) {
        $error_number = "Only letters and white space allowed";
    } else {
        $number = test_input($number);
    }


    $clear = $error_fname . $error_lname . $error_email . $error_password . $error_number;
    if (empty($clear)) {
        echo $fname . " " . $lname . " " . $email . " " . $password . " " . $number;
        $fname = $lname = $email = $password = $number = "";

    }
}
?>