<div>
    <div class="container-fluid mt-4">
        <ul class="nav justify-content-end">
             
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Compte administrateur</a>
            </li>
             
        </ul>

        <div class="row">
            <div class="col-md-3">
                <h1>Emprunt</h1>

                <div class="form-group">
                    <label  >Téléphone</label>
                    <input type="tel" wire:model="telephone" class="form-control"  aria-describedby="emailHelp"   >
                    @error('telephone')<span class="text-danger"> {{  $message  }} </span>@enderror
                </div>
                <div class="form-group">
                    <label  >Montant</label>
                    <input type="number" wire:model="montant" class="form-control">
                    @error('montant')<span class="text-danger"> {{  $message  }} </span>@enderror
                </div>
                    
                <button type="button" wire:click="verifier_client()" class="btn btn-primary">Emprunter</button>
            </div> 

            <style> 
                    .blink {
                    animation: blink 1s steps(1, end) infinite;
                    }
            </style>

            <!--<div class="col-md-12">

             <span class="blink">Emprunter facilement et rapidement un crédit auprès d'une banque de votre choix</span>
            </div>-->

            @if(!$show_histo)
            <div class="col-md-3">
                <h3>Nouveau</h3>
                <ul>
                    <li class="text-justify">Emprunter désormais en self-service de l'argent auprès de la banque de votre choix avec notre portail web sécurisé et optimiser</li>
                      
                    </ul>
            </div>

            <div class="col-md-3">
                <h3>Procédure 1</h3>
                <ul>
                    <li class="text-justify">Si vous avez déjà un compte, Entrez votre numéro de téléphone et le montant que vous souhaitez emprunter puis cliquer sur le bouton <b>Emprunter</b>.</li>
                      
                    </ul>
            </div>
            <div class="col-md-3">
                <h3>Procédure 2</h3>
                <ul>
                    <li class="text-justify">Si vous n'avez pas de compte, Entrez votre numéro de téléphone et le montant que vous souhaitez emprunter puis cliquer sur le bouton <b>Emprunter</b>.
                    <li class="text-justify">Sur la page suivante, remplissez le formulaire avec vos informations personnelles puis cliquez sur le bouton <b>Enregistrer</b>.</li>
                    </ul>
            </div>
            @endif
            
            @if(session()->has('message'))
                <div class="col-md-8">
                    <div class="alert {{ Session::get('alert-class', 'alert-success') }} text-center">{{ Session::get('message') }}</div>
                </div>
            @endif

            @if($show_histo)
            <div class="col-md-3">
                <h1>Résumé</h1>

                <div class="form-group">
                    <label for="exampleInputEmail1">Banque : </label>
                    <label for="exampleInputEmail1"><b>{{ $client->banque->nom }}</b></label>
                </div> 

                <div class="form-group">
                    <label for="exampleInputEmail1">Client : </label>
                    <label for="exampleInputEmail1"><b>{{ $client->nom }} {{ $client->prenom }}</b></label>
                </div>
 
                <div class="form-group">
                    <label for="exampleInputEmail1">Montant demandé : </label>
                    <label for="exampleInputEmail1"><b>{{ $montant }}</b></label>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Commision : </label>
                    <label for="exampleInputEmail1"><b>{{ $client->banque->commission }}% = {{ ((!empty($montant) ? $montant : 0) * $client->banque->commission) /100 }}</b></label>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Montant à rembourser : </label>
                    <label for="exampleInputEmail1"><b>{{ (((!empty($montant) ? $montant : 0) * $client->banque->commission) /100) + (!empty($montant) ? $montant : 0) }}</b></label>
                </div>
                
                <button type="button" wire:click="confirmer()" class="btn btn-primary">Confirmer</button>

            </div>
            

            @if(!empty($emprunts))
                <div class="col-md-6">
                    <h1>Mes emprunts</h1>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                        <th scope="col">Date emprunt</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Total</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emprunts as $emprunt )
                        
                        <tr>
                        
                        <td>{{ $emprunt->convert_date($emprunt->created_at)}}</td>
                        <td>{{ $emprunt->montant}}</td>
                        <td>{{$emprunt->total_rembourser}}</td> 
                    
                        </tr>
                        @endforeach
                    </tbody>
                    <tfooter>
                        <tr>
                            <td><b>Total</b></td>
                            <td><b>{{ $total}}</b></td>
                            <td><b>{{ $total_rembourser }}</b></td> 
                        <tr> 
                        </tfooter>
                    </table>    
                </div>
            @endif
        @endif
             
        </div>
    </div>

</div>
