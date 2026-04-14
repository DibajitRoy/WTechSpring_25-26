<?php

$name = $email = $website = $comment = $gender = "";
$password = $validpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (isset($_POST["name"])) {
        $name = $_POST["name"];

        if (!empty($name) && strlen($name) >= 5 && preg_match("/^[a-zA-Z ]+$/", $name)) {
            echo "User Name: " . $name . "<br>";
        } else {
            echo "User Name must be at least 5 characters & only letters<br>";
        }
    }

   
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        if (!empty($email) && preg_match("/^[^ ]+@[^ ]+\.[a-z]{2,3}$/", $email)) {
            echo "Email: " . $email . "<br>";
        } else {
            echo "Invalid Email format<br>";
        }
    }

    
    if (isset($_POST["website"])) {
        $website = $_POST["website"];

        if (!empty($website) && preg_match("/\b(https?:\/\/)?[a-z0-9.-]+\.[a-z]{2,}\b/", $website)) {
            echo "Website: " . $website . "<br>";
        } else {
            echo "Invalid Website<br>";
        }
    }

    
    if (isset($_POST["comment"])) {
        $comment = $_POST["comment"];

        if (!empty($comment)) {
            echo "Comment: " . $comment . "<br>";
        } else {
            echo "Comment is required<br>";
        }
    }

    
    if (isset($_POST["password"])) {
        $password = $_POST["password"];

        if (!empty($password) && preg_match("/^.{4,}$/", $password)) {
            echo "Password: " . $password . "<br>";
        } else {
            echo "Password must be minimum 4 characters<br>";
        }
    }

    
    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
        echo "Gender: " . $gender . "<br>";
    } else {
        echo "Please select gender<br>";
    }
}
?>