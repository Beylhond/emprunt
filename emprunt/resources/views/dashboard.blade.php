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
                <a class="nav-link" href="{{ route('banques.index') }}">Banques</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.index') }}">Clients</a>
            </li>
             
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
            </li>
             
        </ul>


        <!-- Contenu de la page de l'admin -->
        <h1>Bienvenu {{ Auth::user()->name }}

        
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>