<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" >
 
    <title>Emprunt</title>
  </head>
  <body>
 
    <div class="container mt-4">
        <ul class="nav justify-content-end">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Accueil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('banques.index') }}">Liste des banques</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.index') }}">Liste des clients</a>
            </li>            
             
            <li class="nav-item">
                
            <form  class="nav-link" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Déconnexion') }}
                    </x-responsive-nav-link>
                </form>

             </li> 
             
        </ul>

        <!--formulaire-->

        <div class="col-md-12">
            <h1>Liste des clients</h1>
        <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Banque</th>
            <th scope="col">Numéro de compte</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Telephone</th>
            <th scope="col">statut</th>
            <th  scope="col">Compte</th>
             </tr>
        </thead>
        <tbody>
            @foreach ($comptes as $compte )
             
            <tr>
            <td>{{ $compte->client->banque->nom}}</td>
            <td>{{ $compte->numero}}</td>
            <td>{{ $compte->client->nom}}</td>
            <td>{{$compte->client->prenom}}</td>
            <td>{{$compte->client->telephone}}</td>
            <!--<td>  <input type="checkbox" @if($compte->statut == false) checked @endif/></td>-->
            <td>
            @if($compte->statut == 0)
                <span class="text-danger">Inactif</span>
            @else
                <span class="text-success">Actif</span>
            @endif
        
            </td>
            @if($compte->statut == 0)
                <td><a class="nav-link" href="{{ route('activer',[$compte->id]) }}">Activer</a>
            @else
                <td><a class="nav-link" href="{{ route('desactiver',[$compte->id]) }}">Désactiver</a>
            @endif

        </td>
           
        </td>
            </tr>
            @endforeach
        </tbody>
    </table>


        <div>
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>