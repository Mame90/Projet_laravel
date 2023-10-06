<?php

class Securite
{
    /**
     * fonction qui permet de sécuriser une chaine de caractère
     *
     * @param $string
     * @return $string
     */
    public static function secureHTML($string)
    {
        // supprime les espaces en début et fin de chaine
        $string = trim($string);
        // supprime les antislashs d'une chaîne
        $string = stripslashes($string);
        // convertit tous les caractères éligibles en entités HTML
        $string = htmlentities($string);

        return $string;
    }    
}