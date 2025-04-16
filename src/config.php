<?php
$dbname = "dashboard";
$user = "root";
$pass = "root_pwd";

try {
    $pdo = new PDO("mysql:host=db;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
