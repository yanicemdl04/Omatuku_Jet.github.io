<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    @include('partials.meta', ['description' => 'Nos services d’aviation sont axés sur la sécurité, le vol responsable et le confort.',
    'keywords' => 'vols, jets', 'cargo'])
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

  </head>

  <body>
  
  <main class="form-signin w-100 m-auto">
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form method="POST" action="{{ route('contact.store') }}" class="formulaire">
    @csrf <!-- Protection CSRF -->
    
    
    <img class="mb-4" src="images/logo1.jpg" alt="" width="250" height="65">
    <h1 class="h3 mb-3 fw-normal">Contactez-nous</h1>

    <div class="email">
      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"  required>
        <label for="email">Email</label>
      </div>
    </div>

    <div class="nom">
      <div class="form-floating">
        <input type="text" class="form-control" name="nom" id="floatingInput" placeholder="nom"  required>
        <label for="nom">Nom</label>
      </div>
    </div>

    <div class="prenom">
      <div class="form-floating">
        <input type="text" class="form-control" name="prenom" id="floatingInput" placeholder="prenom"  required>
        <label for="prenom">Prenom</label>
      </div>
    </div>

    <div class="numero">
      <div class="form-floating">
        <input type="number" class="form-control" name="numero" id="floatingInput" placeholder="+24390000000"  required>
        <label for="numero">Numero de telephone</label>
      </div>
    </div>

    <div class="formule">
      <div class="form-floating">
            <select class="form-select" type="text" name="formule" id="floatingInput" placeholder="turbo jet" for="formule">
              <option value="1">Cargo</option>
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

