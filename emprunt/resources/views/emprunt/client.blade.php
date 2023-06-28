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
              
        </ul>

        <!--formulaire-->

        <div class="col-md-6">
        <form method="post" action="{{ route('clients.store')}}" >
                @csrf
                <h1>Formulaire du client</h1>
             
                <div class="form-group">
                    <label for="exampleInputPassword1">Nom de la banque</label>
                    <select  name="banque"  class="form-select" aria-label="Default select example">
                        <option selected>Sélectionner une banque</option>

                        @foreach($banques as $banque)
                            <option value="{{ $banque->id }}">{{ $banque->nom }}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name = "nom" class="form-control text-uppercase" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prénom</label>
                    <input type="text" name ="prenom" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Téléphone</label>
                    <input type="text" name ="telephone" class="form-control"  />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Code Pin</label>
                    <input type="password" name = "code_pin" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{ route('welcome')}}"  class="btn btn-default">Annuler</a>
            </form>
        <div>
    </div> 

    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>