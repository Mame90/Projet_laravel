<?php
ob_start();
?>

<div class="container mt-5">
    <h1 class="text-center">Oups, il semblerait que cette page n'existe pas !</h1>
    <div class="text-center pt-5 mb-5">
        <a class="btn btn-primary" href="index.php" role="button">Retour à l'accueil</a>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = "Page 404";
require "../commons/template.php";
