@section('title', 'reservation')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.meta', ['description' => 'Nos services d’aviation sont axés sur la sécurité, le vol responsable et le confort.',
   'keywords' => 'vols, jets', 'jet privé'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https : //fonts.googleapis.com/css2?family= Quicksand :wght@300 & display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/other.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet"
    href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Amatic+SC">

</head>


<body style="background:url('../images/mosaiques.jpg'); background-size:cover;">

<section>
<div class="w3-container w3-xlarge" id="menuf">
  <div class="w3-content">
    <h1 class="menu-title">Réservez votre jet privé</h1>
    <div id="mangue">
      <div class="w3-row w3-center w3-white w3-border-dark-grey" style="margin-top: 50px;">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-blue" onclick="openMenu(event, 'Pizza')" id="myLink"><h3>One Way</h3></div>
        <div class="w3-col s4 tablink w3-padding-large w3-hover-blue" onclick="openMenu(event, 'Pasta')"><h3>Aller retour</h3></div>
        <div class="w3-col s4 tablink w3-padding-large w3-hover-blue" onclick="openMenu(event, 'Starter')"><h3>Destinations multiples</h3></div>
      </div>

      <div id="Pizza" class="w3-container menu w3-white" style="display: none;">
        <main class="form-signin w-100 m-auto">
          @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <form action="{{ route('reservation.store') }}" method="POST" class="formulaire">
            @csrf

            <!-- Group 1: Lieu de départ, Lieu d'arrivée, Date et heure -->
            <div class="flex">
                <label>
                <span for="lieu_depart">Lieu de départ</span>

                    <input type="text" class="form-control" name="lieu_depart" placeholder="" required style="width: 200px;">
                </label>

                <label>
                <span for="lieu_arrivee">Lieu d'arrivée</span>

                    <input type="text" class="form-control" name="lieu_arrivee" placeholder="" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
                <label>
                    <span for="date_heure">Date et heure</span>
                    <input type="datetime-local" class="form-control" name="date_heure" placeholder="Date et heure" required style="width: 200px;">
                </label>

                <label>
                    <span for="pax">Nombre de passagers</span>  
                    <input type="number" class="form-control" name="pax" placeholder="" required style="width: 200px;">

                </label>
              </div>

              <div class="flex">
                <label>
                    <span for="email">Email</span>  
                    <input type="email" class="form-control" name="email" placeholder="" required style="width: 200px;">
        
                </label>

                <label>
                  <span for="nom_prénom">Nom et prénom</span>  

                    <input type="text" class="form-control" name="nom_prenom" placeholder="" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
              <label>
                <span for="numero_telephone">Numéro de téléphone</span>  
                    <input type="text" class="form-control" name="numero_telephone" placeholder="" required style="width: 200px;">
                </label>
              </div>


            <button class="btn btn-primary w-100 py-2" type="submit">Envoyer</button>
          </form>
        </main>
      </div>

      <div id="Pasta" class="w3-container menu w3-white" style="display: none;">
        <main class="form-signin w-100 m-auto">
          <!-- Form for "Aller retour" -->
          <form method="POST" action="{{ route('reservation.store') }}" class="formulaire">
            @csrf
           <!-- Group 1: Lieu de départ, Lieu d'arrivée, Date et heure -->
           <div class="flex">
                <label>
                <span for="lieu_depart">Lieu de départ</span>

                    <input type="text" class="form-control" name="lieu_depart" placeholder="" required style="width: 200px;">
                </label>

                <label>
                <span for="lieu_arrivee">Lieu d'arrivée</span>

                    <input type="text" class="form-control" name="lieu_arrivee" placeholder="" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
                <label>
                    <span for="date_heure">Date et heure</span>
                    <input type="datetime-local" class="form-control" name="date_heure" placeholder="Date et heure" required style="width: 200px;">
                </label>

                <label>
                  <span for="date_heure">Date de retour</span>
                    <input type="datetime-local" class="form-control" name="date_retour" placeholder="Date de retour" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
                <label>
                    <span for="email">Email</span>  
                    <input type="email" class="form-control" name="email" placeholder="" required style="width: 200px;">
                </label>

                <label>
                    <span for="pax">Nombre de passagers</span>  
                    <input type="number" class="form-control" name="pax" placeholder="" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
              <label>
                  <span for="nom_prénom">Nom et prénom</span>  
                    <input type="text" class="form-control" name="nom_prenom" placeholder="" required style="width: 200px;">
                </label>
              <label>
                <span for="numero_telephone">Numéro de téléphone</span>  
                    <input type="text" class="form-control" name="numero_telephone" placeholder="" required style="width: 200px;">
                </label>
              </div>

            <!-- Submit Button -->
            <button class="btn btn-primary w-100 py-2" type="submit">Envoyer</button>
        </form>
    </main>
</div>


<div id="Starter" class="w3-container menu w3-white" style="display: none;">
        <main class="form-signin w-100 m-auto">
          @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <form method="POST" action="{{ route('reservation.store') }}" class="formulaire">
            @csrf

           <!-- Group 1: Lieu de départ, Lieu d'arrivée, Date et heure -->
           <div class="flex">
                <label>
                <span for="lieu_depart">Lieu de départ</span>

                    <input type="text" class="form-control" name="lieu_depart" placeholder="" required style="width: 200px;">
                </label>

                <label>
                <span for="lieu_arrivee">Lieu d'arrivée</span>

                    <input type="text" class="form-control" name="lieu_arrivee" placeholder="" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
                <label>
                    <span for="date_heure">Date et heure</span>
                    <input type="datetime-local" class="form-control" name="date_heure" placeholder="Date et heure" required style="width: 200px;">
                </label>

                <label>
                  <span for="date_heure">Date de retour</span>
                    <input type="datetime-local" class="form-control" name="date_retour" placeholder="Date de retour" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
                <label>
                    <span for="email">Email</span>  
                    <input type="email" class="form-control" name="email" placeholder="" required style="width: 200px;">
                </label>

                <label>
                    <span for="pax">Nombre de passagers</span>  
                    <input type="number" class="form-control" name="pax" placeholder="" required style="width: 200px;">
                </label>
              </div>

              <div class="flex">
              <label>
                  <span for="nom_prénom">Nom et prénom</span>  
                    <input type="text" class="form-control" name="nom_prenom" placeholder="" required style="width: 200px;">
                </label>
              <label>
                <span for="numero_telephone">Numéro de téléphone</span>  
                    <input type="text" class="form-control" name="numero_telephone" placeholder="" required style="width: 200px;">
                </label>
              </div>

            <!-- Submit Button -->
            <button class="btn btn-primary w-100 py-2" type="submit">Envoyer</button>
        </form>
    </main>
</div>

</div>


  <script>
    // Tabbed Menu Functionality
    function openMenu(evt, menuName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("menu");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
      }
      document.getElementById(menuName).style.display = "block";
      evt.currentTarget.className += " w3-red";
    }
    // Click to open the first tab by default
    document.getElementById("myLink").click();
  </script>

  <style>
    .menu-title {
      margin-bottom: 64px;
      text-align: center;
      font-size: 3rem;
      font-weight: bold;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .btn-primary {
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #004dff;
    }
  </style>
</section>

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
