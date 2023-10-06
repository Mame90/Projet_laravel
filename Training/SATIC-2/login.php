<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="traitement_inscription.php" method="POST">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>

        <input type="submit" value="Se connecter" name="connexion">
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Connexion</h1>
                <form action="traitement_connexion.php" method="POST">
                    <div class="mb-3">
                        <label for="login" class="form-label">Login :</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>

                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="connexion">Se connecter</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JavaScript (jQuery et Popper.js requis) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
