<?php

session_start();

if (
    isset($_POST['email']) &&
    isset($_POST['password'])
) {

    include "../db_connect.php";
    include "validation.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $text = "Email";
    $location = "../login.php";
    $ms = "error";
    is_empty(var: $email, text: $text, location: $location, ms: $ms, data: "");

    $text = "Password";
    $location = "../login.php";
    $ms = "error";
    is_empty(var: $password, text: $text, location: $location, ms: $ms, data: "");

    $sql = "SELECT * FROM admin WHERE email=?";
    $stmt = $conn->prepare(query: $sql);
    $stmt->execute(params: [$email]);

    if ($stmt->rowCount() === 1) {
        echo "cool";
        $user = $stmt->fetch();
        $user_id = $user['id'];
        $user_email = $user['email'];
        $user_password = $user['password'];

        if ($email === $user_email) {
            if (password_verify(password: $password, hash: $user_password)) {

                echo "OK";
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_email'] = $user_email;
                header(header: "Location: ../admin.php");

            } else {
                $em = "email ou mot de passe incorrect";
                header(header: "Location: ../login.php?error=?em");
            }
        }
    } else {
        $em = "email ou mot de passe incorrect";
        header(header: "Location: ../login.php?error=?em");
    }
} else {
    header(header: "Location: ../login.php");
}

