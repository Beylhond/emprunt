<?php

namespace App\Http\Controllers;

use App\Models\Banque;
use Illuminate\Http\Request;

class BanqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banques = Banque::all();

        return view('emprunt.liste_banque', compact('banques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emprunt.banque');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:banques',
            'email' => 'required',
            'adresse' => 'required',
        ]);

        $banque = new Banque();
        $banque->nom = $request->nom;
        $banque->email = $request->email;
        $banque->adresse_banque = $request->adresse;
        $banque->commission = $request->commission;
 
        //sauvegarder de la banque
        $banque->save();

        return redirect('banques');
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
    }

    public function supprimer(string $id)
    {
        $banque = Banque::find($id);
        $banque->delete();

        return redirect('banques');
    }
}
