<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'email' => 'required|email',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'formule' => 'required|string|max:255',
        ]);

        // Enregistrement des données dans la base de données
        Contact::create($validated);

        // Affichage d'un message de confirmation et effacement des champs du formulaire
        return back()->with('success', 'Formulaire soumis avec succès!');
    }
}
