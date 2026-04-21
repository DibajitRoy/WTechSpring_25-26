<?php
session_start();

$name = "";
$password = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$nameErr = "";
$passwordErr = "";
$emailErr = "";
$websiteErr = "";
$commentErr = "";
$genderErr = "";

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["name"])) {
        $name = trim($_POST["name"]);
    }

    if (isset($_POST["password"])) {
        $password = trim($_POST["password"]);
    }

    if (isset($_POST["email"])) {
        $email = trim($_POST["email"]);
    }

    if (isset($_POST["website"])) {
        $website = trim($_POST["website"]);
    }

    if (isset($_POST["comment"])) {
        $comment = trim($_POST["comment"]);
    }

    if (isset($_POST["gender"])) {
        $gender = trim($_POST["gender"]);
    }

    $isValid = true;

    if (empty($name)) {
        $nameErr = "Name is required";
        $isValid = false;
    } elseif (strlen($name) < 5) {
        $nameErr = "Name must be at least 5 characters";
        $isValid = false;
    }

    if (empty($password)) {
        $passwordErr = "Password is required";
        $isValid = false;
    } elseif (strlen($password) < 4) {
        $passwordErr = "Password must be at least 4 characters";
        $isValid = false;
    }

    if (empty($email)) {
        $emailErr = "Email is required";
        $isValid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $isValid = false;
    }

    if (empty($website)) {
        $websiteErr = "Website is required";
        $isValid = false;
    }

    if (empty($comment)) {
        $commentErr = "Comment is required";
        $isValid = false;
    }

    if (empty($gender)) {
        $genderErr = "Gender is required";
        $isValid = false;
    }

    if ($isValid) {

        $_SESSION["name"] = $name;
        setcookie("name", $name, time() + 3600, "/");

        $formdata = array(
            "name" => $name,
            "password" => $password,
            "email" => $email,
            "website" => $website,
            "comment" => $comment,
            "gender" => $gender
        );

        if (file_exists($datafile)) {
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata, true);
        } else {
            $tempdata = array();
        }

        if (!is_array($tempdata)) {
            $tempdata = array();
        }

        $tempdata[] = $formdata;
        $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

        if (file_put_contents($datafile, $jsondata)) {
            echo "Data Saved Successfully!";
        } else {
            echo "Please Try Again";
        }
    }

    if (isset($_SESSION['name']) || isset($_COOKIE['name'])) {
        echo "<br>Welcome Back";
    } else {
        echo "<br>Log in Again";
    }
}
?>