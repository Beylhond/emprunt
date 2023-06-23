<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" >
 
    <title>Formulaire du client</title>
  </head>
  <body>
 
    <div class="container mt-4">
        <ul class="nav justify-content-end">
             
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">compte du client</a>
            </li>
             
        </ul>

        <!--formulaire-->

        <div class="col-md-6">
        <form method="post" action="{{ route('clients.store')}}" >
                @csrf
                <h1>Formilaire du client</h1>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Nom</label>
                    <input type="text" name = "nom" class="form-control" id="exampleInputPassword1" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prénom</label>
                    <input type="text" name ="prenom" class="form-control" id="exampleInputPassword1" placeholder="Prénom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Téléphone</label>
                    <input type="text" name ="telephone" class="form-control" id="exampleInputPassword1" placeholder="Téléphone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">code_pin</label>
                    <input type="text" name = "code_pin" class="form-control" id="exampleInputPassword1" placeholder="code_pin">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        <div>
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>