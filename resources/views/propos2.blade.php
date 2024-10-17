@extends('layout')
@section('title', 'à propos')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.meta', ['description' => 'Nos services d’aviation sont axés sur la sécurité, le vol responsable et le confort.',
   'keywords' => 'vols, jets', 'à propos'])

   <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/other.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

</head>


<body>

@section('content')

<header style="margin-bottom: 100px;">
                <!-- cover -->
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg5" class="page-holder bg-cover">
    
        <div class="container-fluid" id="top">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 " style="margin-top: 180px;">
                <h1 class="display-2  text-light mb-2 mt-5" id="reussir"><strong><span><span style=" color:white; font-size:0.4em; font-weight:bolder;">A PROPOS</span></span></h1>
                <p class="lead mb-0" id="txt" style=" color:white; font-weight:250;">Votre partenaire de confiance</p>

            </div>            
        </div>
            
            </div>
        </div>
    </section>

  </header>

  <section>
    <div class="container">
      <div class="row">
        <div id="props">
          <h2>OMATUKU JETS</h2>
          <h1>Qui sommes-nous <span class="blinker">?</span></h1>
          <p>Omatuku Jets est basé à Kinshasa, République
                démocratique du Congo et nous offrons des services
                d’affrètement de jet privé, de transport aérien de
                marchandises et nous avons une agence de voyage haut
                de gamme pour répondre aux besoins variés de nos clients
                tout en offrant des formations specialisées pour
                équipages de cabines, renforcant ainsi notre engagement
                envers l’excellence.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section id="jumbotron">
  <div class="row">
    <div class="cv-container">
      <div class="container px-2 py-5">
        <div class="row row-cols-1 row-cols-sm-2 g-4 py-5">
          <div class="col">
            <div class="d-flex flex-column align-items-center">
              <img src="images/avion.png" width="35px" style="margin-bottom: 10px;">
              <h2 style="color: white;">Avions</h2>
              <p style="color: #1565c0; font-size:1.7em;">8</p>
            </div>
          </div>
          <div class="col">
            <div class="d-flex flex-column align-items-center">
            <img src="images/candidat.png" width="45px" style="margin-bottom: 10px;">
              <h2 style="color: white;">Salariés</h2>
              <p style="color: #1565c0; font-size:1.7em;">23</p>
            </div>
          </div>
          <div class="col">
            <div class="d-flex flex-column align-items-center">
            <img src="images/lieu.png" width="35px" style="margin-bottom: 10px;">
              <h2 style="color: white;">Locaux</h2>
              <p style="color: #1565c0; font-size:1.7em;">3</p>
            </div>
          </div>
          <div class="col">
            <div class="d-flex flex-column align-items-center">
            <img src="images/partenaires.png" width="45px" style="margin-bottom: 10px;">
              <h2 style="color: white;">Partenaires</h2>
              <p style="color: #1565c0; font-size:1.7em;">12</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <section>
    <div class="container">
      <div class="row">
        <div id="props" style="margin-bottom: 50px;">
          <h2 style="margin-top: 30px;">OMATUKU JETS</h2>
          <h1>Notre vision</h1>
          <p class="col-md-12">Révolutionner l'industrie du
                tourisme en RDC en proposant
                des expériences de voyage
                uniques et en mettant en avant
                les destinations exceptionnelles
                de notre pays à l'échelle
                mondiale. Contribuer aussi au développement
                économique de la RDC en
                stimulant les secteurs du
                tourisme et de l'aviation, en
                créant des emplois locaux et en
                favorisant les investissements
                dans les infrastructures
                aéroportuaires et touristiques
          </p>
        </div>
      </div>
    </div>
  </section>



  <section>
  <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Contact</h4>
        <form class="needs-validation" novalidate style="margin-bottom: 100px;">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <a href="{{ route('contact.store') }}"><button class="custom-btn btn-2">Contacter</button></a>
          </div>
        </form>
  </section>
  
  <!-- Page section example for content below the video header -->
  
@endsection

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
