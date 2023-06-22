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

        <div class="col-md-4">
            <form>
                <h1>Formilaire du client</h1>
                <div class="form-group">
                    <label for="exampleInputPassword1">Banque</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="banque">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Téléphone</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le numéro de téléphone">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">nom</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">prenom</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="prenom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">code_pin</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="code_pin">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <div>
    </div>


    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>