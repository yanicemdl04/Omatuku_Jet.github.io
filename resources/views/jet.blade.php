@extends('layout')
@section('title', 'jet privé')


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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/other.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

</head>


<body>

@section('content')
<header>
                <!-- cover -->
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg4" class="page-holder bg-cover">
        </div>
    </section>

  </header>



  
  <section>
    <div class="container">
      <div class="row">
        <div id="presentation">
          <h1>Découvrez l'excellence de <br> nos services.</h1>
          <span>____________________</span>
          <p>Omatuku Jets offre des solutions de transport de fret rapides et fiables. Avec notre flotte moderne et <br> 
            notre expertise logistique, nous assurons la livraison sécurisée de vos marchandises où que vous en <br>
            ayez besoin, à tout moment.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Page section example for content below the video header -->
  
  <!-- Page section example for content below the video header -->
  <section class="my-5" id="boutonn">
    <div class="container">

        <div class="row" id="cartes">
          <div class="col-md-4">
            <img src="../images/turbo.png"/>
            <button class="custom-btn btn-2">Reservation</button>

          </div>
          <div class="col-md-8" id="jetp">
            <img src="../images/turbo1.png"/>
            <button class="custom-btn btn-2">Reservation</button>
          </div>


          <div class="col-md-4">
            <img src="../images/turbo2.png"/>
            <button class="custom-btn btn-2">Reservation</button>
          </div>
          <div class="col-md-8" id="jetp">
            <img src="../images/turbo3.png"/>
            <button class="custom-btn btn-2">Reservation</button>
          </div>


          <div class="col-md-4">
            <img src="../images/turbo4.png"/>
            <button class="custom-btn btn-2">Reservation</button>

          </div>
          <div class="col-md-8" id="jetp">
            <img src="../images/turbo5.png"/>
            <button class="custom-btn btn-2">Reservation</button>
          </div>

      </div>
    </div>
  </section>

  <section style="text-align: center; justify-content: center; display: flex; align-items: center; font-size: 2em; margin-bottom: 30px;">
    <a href="../images/OmatukuJetsCatalogue.pdf">Voir plus</a>
  </section>


  
  <!-- Page section example for content below the video header -->
  
@endsection

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
