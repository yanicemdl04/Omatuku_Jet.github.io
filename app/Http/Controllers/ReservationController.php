<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {

        $reservation = new Reservation();
        $reservation->lieu_depart = $request->input('lieu_depart');
        $reservation->lieu_arrivee = $request->input('lieu_arrivee');
        $reservation->date_heure = $request->input('date_heure');
        $reservation->date_retour = $request->input('date_retour');
        $reservation->pax = $request->input('pax');
        $reservation->email = $request->input('email');
        $reservation->nom_prenom = $request->input('nom_prenom');
        $reservation->numero_telephone = $request->input('numero_telephone');
        $reservation->save();

        // Rediriger ou retourner un message de succès
        return redirect()->back()->with('success', 'Vous recevrez un email pour plus d\'information!');
    }


    public function showForm()
    {
        return view('reservation');
    }
    
   

}