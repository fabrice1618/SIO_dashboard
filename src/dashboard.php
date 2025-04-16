<?php
require_once("database.php");
require_once("SCD40.php");

openDatabase();
$rfidData = getSCD40();
closeDatabase();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h1 class="text-center mb-4">Données 🔥</h1>

    <!-- Conditions actuelles -->
    <div class="card shadow rounded-4">
      <div class="card-body">
        <center><h4 class="card-title">Conditions actuelles</h4></center>
        <ul class="list-group list-group-flush mt-3">
          <li class="list-group-item">🌡️ Température : <strong>23°C</strong></li>
          <li class="list-group-item">💧 Humidité : <strong>45%</strong></li>
          <li class="list-group-item">🫁 CO₂ : <strong>420 ppm</strong></li>
<li class="list-group-item">🕒 Lecture : <strong>16/04/2025</strong></li>
        </ul>
      </div>
    </div>

    </br>

    <!-- Historique -->
    <div class="card shadow rounded-4">
      <div class="card-body">
        <h4 class="card-title">Historique des données</h4>
        <table class="table table-striped mt-3">
          <thead>
            <tr>
              <th>Date</th>
              <th>Heure</th>
              <th>Température</th>
              <th>Humidité</th>
              <th>CO₂</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rfidData as $row): ?>
              <tr>
                <td><?= date('d/m/Y', strtotime($row['date_lecture'])) ?></td>
                <td><?= date('H:i:s', strtotime($row['date_lecture'])) ?></td>
                <td><?= $row['temperature'] ?>°C</td>
                <td><?= $row['humidite'] ?>%</td>
                <td><?= $row['co2'] ?> ppm</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>