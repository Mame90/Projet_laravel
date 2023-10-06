<?php
ob_start();
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
            <h2 class="text-center mb-3">Modifier un article</h2>
            <br>
            <div class="mx-auto">
                <form class="form" role="form" method="POST" action="" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Désignation :</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $epice['name']; ?>">
                            <span class="form-help"><?php echo $nameError; ?></span>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="price">Prix : (en € pour 100g)</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" min="0" placeholder="0.00" value="<?= $epice['price']; ?>">
                            <span class="form-help"><?php echo $priceError; ?></span>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="category">Catégorie :</label>
                            <select id="category" class="form-control" name="category">
                                <?php
                                foreach ($categories as $category) {
                                    if ($epice['catId'] == $category['id'])
                                        echo '<option selected="selected" value="' . $category['id']  . ' ">' . $category['name'] . ' </option>';
                                    else
                                        echo '<option value="' . $category['id']  . ' ">' . $category['name'] . ' </option>';
                                }
                                ?>
                            </select>
                            <span class="form-help"><?php echo $categoryError; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea class="form-control" id="description" name="description" rows="5" value="<?= $epice['description']; ?>"><?= $epice['description']; ?></textarea>
                        <span class="form-help"><?php echo $descriptionError; ?></span>
                    </div>
                    <div class="form-group">
                        <label><img src="<?= URL ?>public/img/<?= $epice['image']; ?>" class="rounded" width="100px" height="auto" alt="..."> Image actuelle: <?= $epice['image']; ?></label>
                        <br>
                        <label for="media">Choisir une autre image</label>
                        <input type="file" class="form-control-file" id="media" name="media" value="<?= $epice['image']; ?>">
                        <div id="imgActivityHelp" class="form-text">Taille max 500 kb, format autorisés .jpeg, .jpg, .png et .gif</div>
                        <span class="form-help"><?php echo $mediaError; ?></span>
                    </div>
                    <br>
                    <div class="form-actions">
                        <p class="form-priv"><i class="bi bi-cone-striped"></i> Vos privilèges à la base de données ne vous permettent pas d'ajouter un item.</p>
                        <a href="admin" class="btn btn-dark btn-sm mb-4"><i class="bi bi-arrow-left-circle"></i> Retour</a>
                        <button type="submit" class="btn btn-info btn-sm mb-4"><i class="bi bi-pencil"></i> Modifier</button>
                    </div>
                </form>
            </div> <!-- end row -->
        </div> <!-- end .admin -->
    </div> <!-- end container hauteur -->
</section>

<?php

$content = ob_get_clean();
$title = "EpicesDuMonde.fr - Admin - Page d'ajout";
require "views/commons/template.php";
