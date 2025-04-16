<?php
require_once("config.php");
require_once("database.php");

function getEMV4()
{
    global $bdd;
    $liste = [];

    $sqlRequete = "SELECT date_lecture, temperature, humidite, pression FROM EMV4;";
    $stmt = $bdd->prepare($sqlRequete);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $liste[] = $row;
    }

    return $liste;
}

function getSCD40()
{
    global $bdd;
    $liste = [];

    $sqlRequete = "SELECT date_lecture, temperature, humidite, co2 FROM SCD40;";
    $stmt = $bdd->prepare($sqlRequete);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $liste[] = $row;
    }

    return $liste;
}



?>