<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="traitement_inscription.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>

        <label for="confirmpassword">Confirmation du mot de passe :</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required><br><br>

        <input type="submit" value="S'inscrire" name="inscription">
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Inscription</h1>
                <form action="traitement_inscription.php" method="POST">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>

                    <div class="mb-3">
                        <label for="login" class="form-label">Login :</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>

                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">Confirmation du mot de passe :</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="inscription">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JavaScript (jQuery et Popper.js requis) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
