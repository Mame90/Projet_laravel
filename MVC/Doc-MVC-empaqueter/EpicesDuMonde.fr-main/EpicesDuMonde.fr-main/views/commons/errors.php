<?php
ob_start();
?>

<div class="container hauteur">

    <h1 class="text-center" style="padding-top: 20vh;"><?= $errorMessage ?></h1>
    <div class="text-center pt-5 mb-5">
        <a class="btn btn-dark" href="<?= URL ?>index.php" role="button">Retour à l'accueil</a>
    </div>

</div>

<?php
$content = ob_get_clean();
// $titre = "Page 404";
require "views/commons/template.php";
