<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':email' => $email,
        ':password' => $password
    ]);

    if ($stmt->rowCount() === 1) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "Email ou mot de passe incorrect.";
        header("Location: login.php");
        exit;
    }
}
