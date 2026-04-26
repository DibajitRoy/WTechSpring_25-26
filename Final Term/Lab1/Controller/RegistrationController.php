<?php
session_start();

$name = "";
$email = "";
$website = "";
$comment = "";
$password = "";
$gender = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    if (!empty($name) && strlen($name) >= 5) {

        $_SESSION["name"] = $name;
        setcookie("name", $name, time() + 3600, "/");
    }
    else {
        echo "Name must be at least 5 characters!<br>";
    }
    $email = $_POST["email"];

    
    if (!empty($email) && preg_match("/^[^ ]+@[^ ]+\.[a-z]{2,3}$/", $email)) {

        $_SESSION["email"] = $email;
        setcookie("email", $email, time() + 3600, "/");
    }
    else {
        echo "Invalid Email Format!<br>";
    }
    $website = $_POST["website"];

    if (!empty($website) && preg_match("/\b(https?:\/\/)?[a-z0-9.-]+\.[a-z]{2,}\b/", $website)) {

        $_SESSION["website"] = $website;
        setcookie("website", $website, time() + 3600, "/");
    }
    else {
        echo "Invalid Website Format!<br>";
    }
    $comment = $_POST["comment"];

    if (!empty($comment)) {

        $_SESSION["comment"] = $comment;
        setcookie("comment", $comment, time() + 3600, "/");
    }
    else {
        echo "Comment cannot be empty!<br>";
    }
    $password = $_POST["password"];

    if (!empty($password) && strlen($password) >= 4) {

        $_SESSION["password"] = $password;
        setcookie("password", $password, time() + 3600, "/");
    }
    else {
        echo "Password must be minimum 4 characters!<br>";
    }
    if (isset($_POST["gender"])) {

        $gender = $_POST["gender"];

        $_SESSION["gender"] = $gender;
        setcookie("gender", $gender, time() + 3600, "/");
    }
    else {
        echo "Please Select Gender!<br>";
    }
    if (
        isset($_SESSION["name"]) &&
        isset($_SESSION["email"]) &&
        isset($_SESSION["website"]) &&
        isset($_SESSION["comment"]) &&
        isset($_SESSION["password"]) &&
        isset($_SESSION["gender"])
    ) {
        echo "Form Submitted Successfully!<br>";
        echo "Welcome Back";
    }
}
?>