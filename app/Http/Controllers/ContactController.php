<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }
    
    public function store(Request $request)
{
    $contact = new Contact();
    $contact->email = $request->input('email');
    $contact->nom = $request->input('nom');
    $contact->prenom = $request->input('prenom');
    $contact->numero = $request->input('numero');
    $contact->formule = $request->input('formule');
    $contact->save();

    return redirect()->back()->with('success', 'Vous recevrez un email pour plus d\'information!');
}

}
