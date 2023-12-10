<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    header("Location: ../index.html");
}
else {
    header("Location: ../index.html")
}
?>