<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table = 'inscription'; // Remplacez 'votre_table' par le nom de votre table
    protected $fillable = ['prenom','nom', 'email']; // Ajoutez ici les noms des colonnes de votre table
}
