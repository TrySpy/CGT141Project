<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $sex = htmlspecialchars($_POST['sex']);
    $message = htmlspecialchars($_POST['message']);

    header("Location: ../index.html");
}
else {
    header("Location: ../index.html")
}
?>