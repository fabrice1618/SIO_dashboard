<?php
require_once("config.php");
require_once("database.php");

function getRFID()
{
    global $bdd;
    $liste = [];

    $sqlRequete = "SELECT code, etat_rfid, nom, prenom FROM rfid_autorise;";
    $stmt = $bdd->prepare($sqlRequete);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Si prenom est null, on met une chaîne vide ou un mot par défaut
        if (is_null($row['prenom'])) {
            $row['prenom'] = "--";
        }

        $liste[] = $row;
    }

    return $liste;
}



?>