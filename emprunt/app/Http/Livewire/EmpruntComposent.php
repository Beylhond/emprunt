<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Compte;
use App\Models\Emprunt;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class EmpruntComposent extends Component
{
    public $telephone;

    public $montant = 0;

    public $show_histo = false;

    public $client;

    public $compte;

    public $emprunts;

    public $total;

    public $total_rembourser;

    public function render()
    {
        // if(empty($this->montant))
        // {
        //     $this->montant = 0;
        // }

        foreach ($this->emprunts as  $item) {

           $this->total = $this->total + $item->montant;
           $this->total_rembourser = $this->total_rembourser + $item->total_rembourser;
        }

        return view('livewire.emprunt-composent');
    }

    public function verifier_client()
    {
        $this->client = null;
        $this->show_histo = false;

        $this->validate([
            'telephone'=>'required|min:9',
            'montant'=>'required',
        ]);
 
        $client = Client::where('telephone',$this->telephone)->first();

        //si le client existe
        if($client != null)
        {
            $this->show_histo = true;
            $this->client = $client;

            $this->compte = Compte::where('client_id',$client->id)->first();

            $this->emprunts =  Emprunt::where('compte_id',$this->compte->id)->get();
 
        }//si le client n'existe pas
        else
        {
            $this->client = null;
            $this->show_histo = false;
            return redirect('/client');
        }
    }  

    /**
     * Confirmer l'emprunt du client 
     */

    public function confirmer()
    { 
        //sauvegarde de l'emprunt 
        $emprunt = new Emprunt();
        $emprunt->compte_id = $this->compte->id;
        $emprunt->montant = $this->montant;
        $emprunt->total_rembourser = ($this->montant  + (($this->montant * $emprunt->compte->client->banque->commission)/100));
        $emprunt->save();

        //mise à jour du solde du compte 
        $this->compte->solde = $this->compte->solde + ($this->montant  + (($this->montant * $emprunt->compte->client->banque->commission)/100)) ;
        $this->compte->save();

        $this->show_histo = false;

        Session::flash('message', "Félicitation ! Vous avez emprunter la somme de $this->montant FCFA avec succès !");
        Session::flash('alert-class', 'alert-success'); 
    }
}
