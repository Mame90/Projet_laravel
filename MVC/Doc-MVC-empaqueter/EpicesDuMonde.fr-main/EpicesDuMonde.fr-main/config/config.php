<?php
// informations necessaires pour se connecter a la base de données
const HOST_NAME = "******";
const DATABASE_NAME = "******";
const USER_NAME = "******";
const PASSWORD = "******";

const ALERT_SUCCESS = 1;
const ALERT_DANGER = 2;
const ALERT_INFO = 3;
const ALERT_WARNING = 4;

// recupere le chemin absolu pour le mettre dans l'url
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
