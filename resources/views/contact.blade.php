<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
  </head>

  <body>
<main class="form-signin w-100 m-auto">
  

  <form method="POST" action="" class="formulaire">
    @csrf <!-- Protection CSRF -->
    
    <img class="mb-4" src="images/logo1.jpg" alt="" width="160" height="65">
    <h1 class="h3 mb-3 fw-normal">Contactez-nous</h1>

    <div class="Email">
      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="Email">Email</label>
      </div>
    </div>

    <div class="Nom">
      <div class="form-floating">
        <input type="text" class="form-control" name="nom" id="floatingInput" placeholder="nom">
        <label for="Nom">Nom</label>
      </div>
    </div>

    <div class="Prenom">
      <div class="form-floating">
        <input type="text" class="form-control" name="prenom" id="floatingInput" placeholder="prenom">
        <label for="Prenom">Prenom</label>
      </div>
    </div>

    <div class="Numero">
      <div class="form-floating">
        <input type="number" class="form-control" name="prenom" id="floatingInput" placeholder="+24390000000">
        <label for="Numero">Numero de telephone</label>
      </div>
    </div>

    <div class="Formule">
      <div class="form-floating">
            <select class="form-select" type="text" name="formule" id="floatingInput" placeholder="turbo jet" for="Formule">
              <option value="1">Turbo Jet</option>
              <option value="2">Cargo Jet</option>
            </select>
      </div>
    </div>

    <button class="btn btn-danger w-100 py-2" type="submit">Envoyer</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; Yanice 2024</p>
  </form>
</main>
<script src="bootstrap.bundle.min.js"></script>
  </body>
</html>

