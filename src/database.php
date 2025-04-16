<?php
require_once("config.php");

function openDatabase()
{
    global $bdd;
    $db_access = sprintf('mysql:host=%s;dbname=%s;port=3306charset=utf8', DB_HOST, DB_NAME);
    $bdd = new PDO($db_access, DB_USER, DB_PWD);
    $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}

function closeDatabase()
{
    global $bdd;
    $bdd = null;
}

?>