<?php
require_once "models/pdo.php";
require_once "models/epice.dao.php";
require_once "config/Securite.php";
require_once "views/commons/alerts.php";

function getPageAdmin()
{
    $title = "Page d'admin";
    $metaDescription = "Description de la page d'admin";
    $alert = "";

    $categories = getAllCategories();
    $epices = getAllEpices();

    require_once 'views/back/adminViews.php';
}

function getPageViewEpice()
{
    $title = "Admin - Voir une fiche";
    $metaDescription = "Description de la page d'admin";

    require_once 'views/back/epiceViews.php';
}

function getPageAddEpice()
{
    // J'initialise les variables comme vide pour le 1er passage de l'affichage du formulaire
    $nameError = $priceError = $descriptionError = $categoryError = $mediaError = "";
    $name = $price = $description = $category = $media = "";

    // Validation du formulaire avant envoi a "true", passage a "false" si probleme rencontré lors des verifs
    $isSuccess = true;
    // Validation de l'upload de l'image initialise a "false", passage a "true" si aucun probleme
    $isUploadSuccess = false;
    // J'initialise l'alert comme vide
    $alert = "";

    // Second passage, j'attribue les données du formulaire à mes variables crées plus haut
    // grâce à la superglobal POST
    if (!empty($_POST)) {
        //si c'est pas vide, on rempli les variables en les verifiant avec la fonction secureHTML de la classe Securite
        $name           = Securite::secureHTML($_POST['name']);
        $category       = Securite::secureHTML($_POST['category']);
        $price           = Securite::secureHTML($_POST['price']);
        $description     = Securite::secureHTML($_POST['description']);

        //particularité imgage $_FILES, on veut recup son nom & uploader
        $media = Securite::secureHTML($_FILES['media']['name']);
        //(mediaPath = son chemin) permet de mettre l'image uploadée dans un dossier specifique
        $mediaPath = "public/img/" . basename($media);
        //permet de connaitre l'extension de l'image
        $mediaExtension = pathinfo(
            $mediaPath,
            PATHINFO_EXTENSION
        );

        //debut des verifs
        if (empty($name)) {
            $nameError = "Vous devez mettre un nom d'article";
            $isSuccess = false;
        }
        if (empty($category)) {
            $categoryError = "Vous devez sélectionner une catégorie";
            $isSuccess = false;
        }
        if (empty($price)) {
            $priceError = "Vous devez indiquer un prix";
            $isSuccess = false;
        }
        if (empty($description)) {
            $descriptionError = "Un descriptif d'article est requis";
            $isSuccess = false;
        }
        if (empty($media)) {
            $mediaError = "Vous devez choisir une image";
            $isSuccess = false;
        } else {
            $isUploadSuccess = true;
            //si l'extension n'est pas autorisé
            if (
                $mediaExtension != "jpg" && $mediaExtension != "jpeg" && $mediaExtension != "png" && $mediaExtension != "gif"
            ) {
                $mediaError = "Le format de l'image n'est pas autorisé";
                $isUploadSuccess = false;
            }
            //si une image a le meme nom de fichier
            if (file_exists($mediaPath)) {
                $mediaError = "Ce nom de fichier existe déjà";
                $isUploadSuccess = false;
            }
            //si l'image est superieur a 500kb
            if ($_FILES["media"]["size"] > 500000) {
                $mediaError = "Le fichier ne doit pas dépasser les 500KB";
                $isUploadSuccess = false;
            }
            //on envoi en verifiant qu'il n'y a pas eu d'erreur d'upload
            if ($isUploadSuccess) {
                if (!move_uploaded_file($_FILES["media"]["tmp_name"], $mediaPath)) {
                    $mediaError = "Un problème est survenu pendant l'upload, veuillez réessayer !";
                    $isUploadSuccess = false;
                }
            }
        }

        try {
            if (
                $isSuccess && $isUploadSuccess
            ) {
                if (insertArticleIntoBdd($name, $category, $price, $description, $media)) {
                    $alertType = ALERT_SUCCESS;
                    $alert = "L'article a bien été ajouté";
                    header("Refresh:2; url=admin", true, 303);
                } else {
                    throw new Exception("L'insertion en base de données n'a pas fonctionné");
                }
            }
        } catch (Exception $e) {
            $alertType = ALERT_DANGER;
            $alert = "Une erreur est apparue pendant l'ajout de l'article <br />" . $e->getMessage();
        }
    }

    $title = "Admin - Ajouter une fiche";
    $metaDescription = "Description de la page d'admin";

    $categories = getAllCategories();

    require_once 'views/back/addViews.php';
}


function getPageUpdateEpice()
{
    $nameError = $priceError = $descriptionError = $categoryError = $mediaError = $alert = "";

    if (!empty($_GET['id'])) {
        $id = Securite::secureHTML($_GET['id']);
    }

    //on est au 2e passage, on recupere les valeurs des variables de la superglobal post
    //on verifie si elle n'est pas vide
    if (!empty($_POST)) {
        //si c'est pas vide, on rempli les variables en les verifiant avec la fonction secureHTML de la classe Securite
        $name           = Securite::secureHTML($_POST['name']);
        $price          = Securite::secureHTML($_POST['price']);
        $description    = Securite::secureHTML($_POST['description']);
        $category       = Securite::secureHTML($_POST['category']);

        //particularité imgage $_FILES, on veut recup son nom & uploader (tableau de tableau)
        $media          = Securite::secureHTML($_FILES['media']['name']);
        //(mediaPath=son chemin)permet de mettre l'image uploader dans un dossier specifique
        $mediaPath = "public/img/" . basename($media);
        //permet de connaitre l'extension de l'image
        $mediaExtension = pathinfo($mediaPath, PATHINFO_EXTENSION);
        //validation du formulaire avant envoi a true, passage a false si probleme rencontré lors des verifs
        $isSuccess = true;

        //debut des verifs
        if (empty($name)) {
            $nameError = "Vous devez mettre un nom d'article";
            $isSuccess = false;
        }
        if (empty($category)) {
            $categoryError = "Vous devez sélectionner une catégorie";
            $isSuccess = false;
        }
        if (empty($price)) {
            $priceError = "Vous devez indiquer un prix";
            $isSuccess = false;
        }
        if (empty($description)) {
            $descriptionError = "Un descriptif d'article est requis";
            $isSuccess = false;
        }

        if (empty($media)) {
            $isMediaUpdated = false;
        } else {
            $isMediaUpdated = true;
            $isUploadSuccess = true;
            if ($mediaExtension != "jpg" && $mediaExtension != "jpeg" && $mediaExtension != "png" && $mediaExtension != "gif") {
                $mediaError = "Le format de l'image n'est pas autorisé";
                $isUploadSuccess = false;
            }
            if (file_exists($mediaPath)) {
                $mediaError = "Ce nom de fichier existe déjà";
                $isUploadSuccess = false;
            }
            if ($_FILES["media"]["size"] > 500000) {
                $mediaError = "Le fichier ne doit pas dépasser les 500KB";
                $isUploadSuccess = false;
            }
            if ($isUploadSuccess) {
                if (!move_uploaded_file($_FILES["media"]["tmp_name"], $mediaPath)) {
                    $mediaError = "Un problème est survenu pendant l'upload, veuillez réessayer !";
                    $isUploadSuccess = false;
                }
            }
        }

        try {
            if (($isSuccess && $isMediaUpdated && $isUploadSuccess) || ($isSuccess && !$isMediaUpdated)) {

                //on est dans le cas ou input isSuccess ET l'image a été updated
                if ($isMediaUpdated) {
                    if (updateArticleIntoBddWithImg($name, $price, $description, $category, $media, $id)) {
                        $alertType = ALERT_SUCCESS;
                        $alert = "L'article a bien été modifié";
                    } else {
                        throw new Exception("L'insertion en base de données n'a pas fonctionné media");
                    }
                }
                //on est dans le cas ou input isSuccess mais l'image n'a pas été updated
                else {
                    if (updateArticleIntoBdd($name, $price, $description, $category, $id)) {
                        $alertType = ALERT_SUCCESS;
                        $alert = "L'article a bien été modifié";
                    } else {
                        throw new Exception("L'insertion en base de données n'a pas fonctionné");
                    }
                }
            }
        } catch (Exception $e) {
            $alertType = ALERT_DANGER;
            $alert = "Une erreur est apparue pendant l'ajout de l'activité <br />" . $e->getMessage();
        }
    }

    $title = "Admin - Modifier une fiche";
    $metaDescription = "Description de la page d'admin";

    $epice = getEpiceById($id);
    $categories = getAllCategories();

    require_once 'views/back/updateViews.php';
}

function getPageDeleteEpice()
{
    if (!empty($_GET['id'])) {
        $id = Securite::secureHTML($_GET['id']);
    }

    $title = "Page suppression fiche";
    $description = "Description de la page suppression fiche";
    $alert = "";

    $epice = getEpiceById($id);

    require_once 'views/back/deleteViews.php';
}

function getPageConfirmDeleteEpice()
{
    $alert = "";
    $alertType = "";
    if (!empty($_GET['id'])) {
        $id = Securite::secureHTML($_GET['id']);

        try {
            if (deleteEpiceFromBdd($id)) {
                $alertType = ALERT_SUCCESS;
                $alert = "La fiche a bien été supprimée";
                header("Location: admin");
            } else {
                $alert = "La suppression de la fiche a échoué";
                $alertType = ALERT_DANGER;
            }
        } catch (Exception $e) {
            $alert = "La suppression de la fiche a echoué";
            $alertType = ALERT_DANGER;
        }
    }
}