<?php
session_start();
require_once 'controllers/frontendController.php';
require_once 'controllers/backendController.php';
require_once 'config/Securite.php';

try {
    if (isset($_GET['page']) && !empty($_GET['page'])) {

        //Securité : on appel la fonction secureHTML de la class Securite.class
        $page = Securite::secureHTML($_GET['page']);

        switch ($page) {
            case "accueil":
                getPageAccueil();
                break;
            case "admin":
                getPageAdmin();
                break;
            case "view_epice":
                getPageViewEpice();
                break;
            case "add_epice":
                getPageAddEpice();
                break;
            case "update_epice":
                getPageUpdateEpice();
                break;
            case "delete_epice":
                getPageDeleteEpice();
                break;
            case "confirmDelete":
                getPageConfirmDeleteEpice();
                break;
            case "error301":
            case "error302":
            case "error400":
            case "error401":
            case "error402":
            case "error403":
            case "error405":
            case "error500":
            case "error505":
                throw new Exception("Vous n'avez pas le droit d'accéder à ce dossier ! <br>Erreur de type: " . $page);
                break;
            case "error404":
                throw new Exception("Oups, il semblerait que cette page n'existe pas ! <br>Error 404");
                break;
            default:
                throw new Exception("Oups, il semblerait que cette page n'existe pas !");
        }
    } else {
        getPageAccueil();
    }
} catch (Exception $e) {
    $title = "Erreur";
    $description = "Page de description des erreurs";
    $errorMessage = $e->getMessage();
    require "views/commons/errors.php";
}