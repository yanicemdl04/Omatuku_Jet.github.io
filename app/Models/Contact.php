<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Liste des champs qui peuvent être assignés en masse
    protected $fillable = [
        'email',
        'nom',
        'prenom',
        'numero',
        'formule',
    ];
}