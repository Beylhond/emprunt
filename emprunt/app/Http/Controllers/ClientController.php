<?php

namespace App\Http\Controllers;

use App\Models\Banque;
use App\Models\Client;
use App\Models\Compte;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$clients = Client::all();
        $comptes = Compte::all();

        return view('emprunt.liste_client', compact('comptes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banques = Banque::all();

        return view('emprunt.client', compact('banques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:banques',
            'prenom' => 'required',
            'banque' => 'required',
        ]);

        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom= $request->prenom;
        $client->code_pin = $request->code_pin;
        $client->telephone = $request->telephone;
        $client->banque_id = $request->banque;

        //sauvegarder de la banque
        $client->save();

        $compte = new Compte();
        $compte->solde = 0;
        $compte->statut = true;
        $compte->numero = 'COMPTE_'.Compte::count()+1;
        $compte->client_id = $client->id;

        $compte->save();

        return redirect('/welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Activer le compte du client 
     */

    public function activer($id)
    {
        $compte = Compte::findOrFail($id);
        $compte->statut = true;

        $compte->save();

        return redirect('/clients');  
    }

    /**
     * Désactiver le compte du client 
     */

    public function desactiver($id)
    {
        $compte = Compte::findOrFail($id);
        $compte->statut = false;

        $compte->save();

        return redirect('/clients');  
    }

}
