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
                <a class="nav-link" href="{{ route('logout') }}">Banque</a>
            </li>
             
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
            </li>
             
        </ul>

        <!--formulaire-->

        <div class="col-md-4">
            <form>
                <h1>Emprunt bancaire</h1>

                <div class="form-group">
                    <label for="exampleInputEmail1">Téléphone</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le numéro de téléphone">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Montant</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Montant">
                </div>
                 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <div>
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>