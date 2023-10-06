<?php
if (!empty($_GET['id'])) {
    $id = Securite::secureHTML($_GET['id']);
    ob_start();
    $epice = getEpiceById($id);
?>
    <!-- CONTENT -->
    <section id="page">
        <div class="container hauteur">
            <div class="header-page px-3 pb-md-4 mx-auto text-center">
                <h1 class="page-title">Administration</h1>
            </div>
            <div class="admin">
                <h2 class="text-center mb-3">Voir la fiche épice n° <?= $id; ?></h2>
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <img src="<?= URL ?>public/img/<?= $epice['image']; ?>" class="card-img-top" width="100%" height="auto" alt="...">
                    </div>
                    <div class="col-lg-9">
                        <p><b>Désignation :</b> <?= $epice['name']; ?></p>
                        <p><b>Catégorie :</b> <?= $epice['category']; ?></p>
                        <p><b>Description longue :</b> <?= $epice['description']; ?>.<br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante velit, rhoncus eu gravida non, dictum ac arcu. Donec tempus egestas nibh, vel tristique tortor bibendum at. Pellentesque finibus lectus eget odio pharetra tincidunt. Nunc tristique orci eget tristique porttitor. Pellentesque ornare nulla ac ornare posuere.</p>

                        <p><b>Prix :</b><?php if ($epice['catId'] == '6')
                                                        echo ' ' . number_format($epice['price'], 2, '.', '') . ' € le lot</div>';
                                                    else
                                                        echo ' ' . number_format($epice['price'], 2, '.', '') . ' € les 100g</div>';
                                                    ?></p>
                    </div>
                    <div class="text-center">
                        <a href="accueil" class="btn btn-sm btn-dark"><i class="bi bi-arrow-left-circle"></i> Retour</a>
                        <button type="button" class="btn btn-sm btn-success"><i class="bi bi-cart2"></i> Commander</button>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end .admin -->
        </div> <!-- end container hauteur -->
    </section>

<?php
    $content = ob_get_clean();
    $title = "EpicesDuMonde.fr - Admin - Accueil";
    require "views/commons/template.php";
} else {
    header('Location: 404.php');
    exit();
}