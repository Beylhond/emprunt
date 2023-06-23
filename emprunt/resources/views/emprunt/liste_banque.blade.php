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
                <a class="nav-link" href="{{ route('banques.create') }}">Ajouter une ligne</a>
            </li>
            

             
        </ul>

        <!--formulaire-->

        <div class="col-md-8">
            <h1>Liste des banques</h1>
        <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banques as $banque )
             
            <tr>
            
            <td>{{ $banque->nom}}</td>
            <td>{{$banque->email}}</td>
            <td>{{$banque->adresse}}</td>
            <td><a class="nav-link" href="{{ route('supprimer',[$banque->id]) }}">Suppression</a>
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