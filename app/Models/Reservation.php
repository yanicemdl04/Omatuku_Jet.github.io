<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Autoriser les champs pour l'attribution de masse
    protected $fillable = [
        'lieu_depart',
        'lieu_arrivee',
        'date_heure',
        'date_retour',
        'pax',
        'email',
        'nom_prenom',
        'numero_telephone',
    ];
}