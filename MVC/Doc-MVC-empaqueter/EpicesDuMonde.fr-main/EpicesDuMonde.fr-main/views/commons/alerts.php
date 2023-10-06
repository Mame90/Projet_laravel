<?php

function afficherAlert($text, $type){
    $alertType = "";
    if ($type === ALERT_SUCCESS) $alertType = "success";
    if ($type === ALERT_DANGER) $alertType = "danger";
    if ($type === ALERT_INFO) $alertType = "info";
    if ($type === ALERT_WARNING) $alertType = "warning";   

    $txt = '<div class="alert alert-'.$alertType.' mt-2" role="alert">';
    $txt .= $text;
    $txt .= '</div>';

    return $txt;
}