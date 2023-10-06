<?php
if (!empty($_GET['id'])) {
    $id = Securite::secureHTML($_GET['id']);
    ob_start();
    $epice = getEpiceById($id);
}
?>
<!-- CONTENT -->
<section id="page">
    <div class="container hauteur">
        <div class="header-page px-3 pb-md-4 mx-auto text-center">
            <h1 class="page-title">Administration</h1>

            <?php if ($alert !== "") {
                echo afficherAlert($alert, $alertType);
            } ?>

        </div>
        <div class="admin">
            <!-- <h2 class="text-center mb-3">Supprimer cet article ?</h2> -->
            <br>
            <div class="mx-auto">

                <form class="form" role="form" action="confirmDelete" method="POST">
                    <input type="hidden" name="id" value="<?= $epice['id']; ?>" />
                    <h3 class="alert alert-danger text-center">Etes-vous sûr de vouloir supprimer cette fiche produit ?</h3>
                    <br>

                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= URL; ?>public/img/<?= $epice['image']; ?>" class="card-img-top" width="100%" height="auto" alt="...">
                            <?php
                            if ($epice['catId'] == '6')
                                echo '<div class="card-price">' . number_format($epice['price'], 2, '.', '') . ' € le lot</div>';
                            else
                                echo '<div class="card-price">' . number_format($epice['price'], 2, '.', '') . ' € les 100g</div>';
                            ?>
                            <div class="card-body">
                                <h2 class="card-title text-center"><?= $epice['name']; ?></h2>
                                <p class="card-text text-center"><?= $epice['description']; ?></p>
                                <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg> Commander</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions text-center">
                        <p class="form-priv text-center"><i class="bi bi-cone-striped"></i> Vos privilèges à la base de données ne vous permettent pas de supprimer un item.</p>
                        <a href="admin" class="btn btn-dark btn-sm mb-4"><i class="bi bi-arrow-left-circle"></i> Retour</a>

                        <a class="btn btn-danger btn-sm mb-4" href="confirmDelete&id=<?= $epice['id']; ?>">Oui, Supprimer</a>

                    </div>
                </form>

                <!-- <div class="form-actions text-center">
                    <a href="admin" class="btn btn-dark btn-sm mb-4"><i class="bi bi-arrow-left-circle"></i> Retour</a>
                    <a href="deleteItem" class="btn btn-danger btn-sm mb-4"><i class="bi bi-trash"></i> Oui, supprimer</a>
                </div> -->

            </div> <!-- end row -->
        </div> <!-- end .admin -->
    </div> <!-- end container hauteur -->
</section>

<?php

$content = ob_get_clean();
$title = "EpicesDuMonde.fr - Admin - Supprimer article";
require "views/commons/template.php";
