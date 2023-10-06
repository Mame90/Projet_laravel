<?php
require_once "models/pdo.php";
require_once "models/epice.dao.php";

function getPageAccueil()
{
    $title = "Page d'accueil";
    $description = "Description de la page d'accueil";

    $categories = getAllCategories();
    $epices = getAllEpices();

    require_once 'views/front/accueilViews.php';
}
