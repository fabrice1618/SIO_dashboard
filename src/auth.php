<?php
session_start();
require_once("database.php");

openDatabase();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilisateur WHERE identifiant = :identifiant AND password = :password";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        ':identifiant' => $identifiant,
        ':password' => $password
    ]);

    if ($stmt->rowCount() === 1) {
        $_SESSION['user'] = $identifiant;
        header("Location: P2_dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "identifiant ou mot de passe incorrect.";
        header("Location: login.php");
        exit;
    }
}
