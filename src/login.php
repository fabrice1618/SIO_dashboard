<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SIOD - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h4 class="text-center mb-4">Connexion</h4>
            <?php if (!empty($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php endif; ?>
            <form action="auth.php" method="POST">
                <div class="mb-3">
                    <label>Identifiant</label>
                    <input type="identifiant" name="identifiant" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>