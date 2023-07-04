<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailzino;

class ReservationController extends Controller
{
    public function create()
    {
        // Afficher le formulaire de réservation
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire de réservation
        $validatedData = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'email' => 'required|string',
            'guests' => 'required|integer',
            
            // Ajoutez ici d'autres règles de validation pour les champs supplémentaires
        ]);
        
        $email = $request->input('email');
        $name = $request->input('name');
        $date = $request->input('date');

        $data = [
            'name'  => $name,
            'email' => $email,
            'date' => $date,
            'message' => "le reservation a ete confirme",
        ];

        // Créer une nouvelle réservation
        $reservation = Reservation::create($validatedData);

        Mail::to($email)->send(new Mailzino($data));
        // Afficher un message de confirmation
        return redirect('/')->with('success', 'Réservation effectuée avec succès !');
    }

    public function index()
{
    $reservations = Reservation::all();
    return view('admin.reservations.index', ['reservations' => $reservations]);
}

}


