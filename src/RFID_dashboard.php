<?php
require_once("database.php");
require_once("rfid.php");

openDatabase();
$rfidData = getRFID();
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
    
    <div>
      <!-- Première div : Température, humidité, pression, présence -->
      <div>
        <div class="card shadow rounded-4">
          <div class="card-body">
            <center>
              <h4 class="card-title">Conditions actuelles</h4>
            </center>
            <ul class="list-group list-group-flush mt-3">
              <li class="list-group-item">🧑‍💼 Nom : <strong>Turing</strong></li>
              <li class="list-group-item">📝 Prénom : <strong>Alan</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </br>

    <!-- Deuxième div : Tableau -->
    <!-- Tableau dynamique RFID -->
    <div class="card shadow rounded-4">
      <div class="card-body">
        <h4 class="card-title">Historique RFID Autorisés</h4>
        <table class="table table-striped mt-3">
          <thead>
            <tr>
              <th>Code RFID</th>
              <th>État</th>
              <th>Nom</th>
              <th>Prénom</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($rfidData)) : ?>
              <?php foreach ($rfidData as $row) : ?>
                <tr>
                  <td><?php echo htmlspecialchars($row['code']); ?></td>
                  <td><?php echo $row['etat_rfid'] == 1 ? 'Autorisé' : 'Refusé'; ?></td>
                  <td><?php echo htmlspecialchars($row['nom']); ?></td>
                  <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="4" class="text-center">Aucune donnée RFID trouvée.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (facultatif) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
