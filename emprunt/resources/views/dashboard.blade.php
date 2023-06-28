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


        <!-- Contenu de la page de l'admin -->
        <h1>Bienvenu {{ Auth::user()->name }}

        
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>