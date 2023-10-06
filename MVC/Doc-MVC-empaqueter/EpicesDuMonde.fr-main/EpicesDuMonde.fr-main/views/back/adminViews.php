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
            <div class="row align-items-center">
                <div class="col">
                    <h1>Liste des épices</h1>
                </div>
                <div class="col text-right">
                    <a href="add_epice" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Ajouter</a>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="bi bi-camera"></i></th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($epices as $epice) { ?>
                        <tr>
                            <td><img src="<?= URL . 'public/img/' . $epice['image']; ?>" class="" width="50px" height="auto" alt="..."></td>
                            <td><?= $epice['name']; ?></td>
                            <td><?= $epice['description']; ?></td>
                            <td><?= $epice['category']; ?></td>
                            <td><?= number_format((float)$epice['price'], 2, '.', ''); ?></td>

                            <td width=283>
                                <a class=" btn btn-warning btn-sm" href="view_epice&id=<?= $epice['id']; ?>" role="button"><i class="bi bi-eye"></i> Voir</a>
                                <a class="btn btn-info btn-sm" href="update_epice&id=<?= $epice['id']; ?>" role="button"><i class="bi bi-pencil"></i> Modifier</a>
                                <a class="btn btn-danger btn-sm" href="delete_epice&id=<?= $epice['id']; ?>" role="button"><i class="bi bi-trash"></i> Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</section>

<?php

$content = ob_get_clean();
$title = "EpicesDuMonde.fr - Admin - Accueil";
require "views/commons/template.php";
