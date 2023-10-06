<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Michel Dufour">
    <meta name="description" content="<?= $metaDescription ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css" type="text/css">

    <title><?= $title ?></title>
</head>

<body>
    <header>
        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-custom fixed-top"> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
            <div class="container">
                <a class="navbar-brand" href="accueil">EpicesDuMonde.fr</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="accueil">Les épices</a></li>
                        <li class="nav-item "><a class="nav-link" href="#les_thes">Les thés</a></li>
                        <li class="nav-item "><a class="nav-link" href="#les_condiments">Les condiments</a></li>
                        <li class="nav-item "><a class="nav-link" href="#les_accessoires">Les accessoires</a></li>
                        <li class="nav-item "><a class="nav-link" href="#nos_recettes">Nos recettes</a></li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-custom my-2 my-sm-0" type="submit" href="admin"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                                <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                            </svg> Admin</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <?= $content ?>

    </main>

    <footer class="footer-page">
        <p>&copy; 2020 EpicesDuMonde.fr | Developed by Michel Dufour</p>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>