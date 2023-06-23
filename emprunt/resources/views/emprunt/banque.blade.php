<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" >
 
    <title>Formulaire de la banque</title>
  </head>
  <body>
 
    <div class="container mt-4">
        <ul class="nav justify-content-end">
             
            <li class="nav-item">
                <a class="nav-link" href="{{ route('banques.index') }}">Liste des banque</a>
            </li>
             
        </ul>

        <!--formulaire-->

        <div class="col-md-6">
            <form method="post" action="{{ route('banques.store')}}" >
                @csrf
                <h1>Formilaire de la banque</h1>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="Nom" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required="required">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="exampleInputPassword1" placeholder="Adresse" required="required">
                </div>
                 
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        <div>
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>