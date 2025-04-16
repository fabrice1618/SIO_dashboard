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
    <div>
      <div>
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h4 class="card-title">Historique des données</h4>
            <table class="table table-striped mt-3">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Heure</th>
                  <th>Type</th>
                  <th>Réception</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Donnée</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>09/04/2025</td>
                  <td>14:23</td>
                  <td>RFID</td>
                  <td>OK</td>
                  <td>Turing</td>
                  <td>Alan</td>
                  <td>aF93cB71eD2kXz</td>
                </tr>
                <tr>
                  <td>09/04/2025</td>
                  <td>14:26</td>
                  <td>RFID</td>
                  <td>OK</td>
                  <td>Zuckerberg</td>
                  <td>Mark</td>
                  <td>d7F3kG92xP1qZt</td>
                </tr>
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
