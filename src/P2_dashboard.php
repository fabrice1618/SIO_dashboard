<?php
require_once("database.php");
require_once("p2.php");

openDatabase();
$emv4Data = getEMV4();
$scd40Data = getSCD40();
closeDatabase();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h1 class="text-center mb-4">Données 🔥</h1>
    
    <!-- Carte globale -->
    <div class="card shadow rounded-4">
      <div class="card-body">
        <center>
          <h4 class="card-title">Conditions actuelles</h4>
        </center>
        
        <div class="row mt-4">
          <!-- Colonne EMV4 -->
          <div class="col-md-6">
            <h4 class="card-title text-center">EMV4</h4>
            <ul class="list-group list-group-flush mt-3">
              <li class="list-group-item">🌡️ Température : <strong>23°C</strong></li>
              <li class="list-group-item">💧 Humidité : <strong>45%</strong></li>
              <li class="list-group-item">📈 Pression : <strong>1013 hPa</strong></li>
            </ul>
          </div>

          <!-- Colonne SCD40 -->
          <div class="col-md-6">
            <h4 class="card-title text-center">SCD40</h4>
            <ul class="list-group list-group-flush mt-3">
              <li class="list-group-item">🌡️ Température : <strong>23°C</strong></li>
              <li class="list-group-item">💧 Humidité : <strong>45%</strong></li>
              <li class="list-group-item">🫁 CO2 : <strong>420 ppm</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    </br>

    <!-- Deuxième div : Tableau -->
    <div>
      <div>
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h4 class="card-title">Historique des données EMV4</h4>
            <table class="table table-striped mt-3">
            <thead>
            <tr>
              <th>Date</th>
              <th>Temperature</th>
              <th>Humidité</th>
              <th>Pression</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($emv4Data)) : ?>
              <?php foreach ($emv4Data as $row) : ?>
                <tr>
                  <td><?php echo htmlspecialchars($row['date_lecture']); ?></td>
                  <td><?php echo htmlspecialchars($row['temperature']); ?></td>
                  <td><?php echo htmlspecialchars($row['humidite']); ?></td>
                  <td><?php echo htmlspecialchars($row['pression']); ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="4" class="text-center">Aucune donnée du capteur EMV4 trouvée.</td>
              </tr>
            <?php endif; ?>
          </tbody>
          
            </table>
          </div>
        </div>
      </div>
    </div>
        <!-- Troisième div : Tableau -->
        <div>
      <div>
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h4 class="card-title">Historique des données SCD40</h4>
            <table class="table table-striped mt-3">
            <thead>
            <tr>
              <th>Date</th>
              <th>Temperature</th>
              <th>Humidité</th>
              <th>C/th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($scd40Data)) : ?>
              <?php foreach ($scd40Data as $row) : ?>
                <tr>
                  <td><?php echo htmlspecialchars($row['date_lecture']); ?></td>
                  <td><?php echo htmlspecialchars($row['temperature']); ?></td>
                  <td><?php echo htmlspecialchars($row['humidite']); ?></td>
                  <td><?php echo htmlspecialchars($row['co2']); ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="4" class="text-center">Aucune donnée du capteur EMV4 trouvée.</td>
              </tr>
            <?php endif; ?>
          </tbody>
          
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Bootstrap JS (facultatif) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
