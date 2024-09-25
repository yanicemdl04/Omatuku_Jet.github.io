@extends('layout')
@section('title', 'Omatuku Jets')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.meta', ['description' => 'Votre Voyage commence ici, avec Omatuku Jets.
    Réalisez vos rêves un vol à la fois.', 'keywords' => 'vols, jets'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="https : //fonts.googleapis.com/css2?family= Quicksand :wght@300 & display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    

</head>


<body>

@section('content')
  <header>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline autoplay muted loop>
      <source src="video/avion.mp4" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100" id="heading">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <div id="reussir">
            <span><span><h1 class="display-3" id="txt">Votre Voyage commence ici, <br>
            <span style="color: rgb(16, 136, 216);">avec Omatuku Jets.</span>
            </h1></span></span>
          </div>
          <p class="lead mb-0" id="txt">Réalisez vos rêves un vol à la fois.
          <div class="col-md-3 text-center align-items-center" style="margin-left:38%;" id="btn-center">
            <a href="{{ route('reservation.store') }}" style="color:white;"><div class="button">Réserver ici</div></a>
          </div>
          </p>
        </div>
      </div>
    </div>
  </header>

  <section id="press">
    <div class="container">
      <div class="row">
        <div id="presentation">
          <h1>Des services pensés pour répondre <br> à toutes vos attentes.</h1>
          <span>____________________</span>
          <p>Omatuku Jets veut moderniser l'aviation en RDC, en montrant qu'il est possible de proposer des services de qualité à des prix arbordables.</p>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Page section example for content below the video header -->
  <section class="my-5">
    <div class="container">

        <div class="row" id="cartes" style="margin-top: 25px;">
          <div class="col-md-9" id="av1">
            <img src="https://lirp.cdn-website.com/md/pexels/dms3rep/multi/opt/pexels-photo-20640947-1920w.jpeg" class="image-to-animate"/>
          </div>
          <div class="col-md-3">
            <h2>Jet Privé</h2>
            <p>
            Profitez d'une expérience de vol sur mesure avec Omatuku Jets, alliant luxe, confort et confidentialité. Nos jets privés 
            sont à votre disposition pour des voyages exclusifs, offrant un service impeccable pour une clientèle exigeante.
            </p>
            <a href="{{ route('jet') }}"><button class="custom-btn btn-2">Read More</button></a>
          </div>


          <div class="col-md-5">
            <h2 style="padding-top: 55px;">Agence de Voyage</h2>
            <p>
            Omatuku Jets transforme vos envies de voyage en expériences inoubliables grâce à une approche sur mesure. 
            En collaboration avec des partenaires de renom, nous organisons vos déplacements dans les moindres détails, 
            du choix de l’hébergement à la sélection d’activités exclusives.</p>
            <a href="{{ route('agence') }}"><button class="custom-btn btn-2">Read More</button></a>
          </div>
          <div class="col-md-7"  id="av2">
            <img src="images/jetluxe.png" class="image-to-animate"/>
          </div>


          <div class="row" id="cartes">
            <div class="col-md-8"  id="av3">
              <img src="https://irp.cdn-website.com/9aa7a8bc/dms3rep/multi/mobile/Design-sans-titre--287-29.png" class="image-to-animate"/>
            </div>
            <div class="col-md-4" style="margin-top: 30px;">
              <h2>Cargo</h2>
              <p class="">
              Omatuku Jets offre des solutions de transport cargo sûres et efficaces, adaptées aux besoins spécifiques de chaque client. Nos services couvrent une large gamme de marchandises, des colis sensibles aux cargaisons volumineuses, avec une priorité sur Grâce à notre réseau logistique fiable, 
              nous assurons des livraisons rapides et en toute transparence. <br>
              <a href="{{ route('cargo') }}"><button class="custom-btn btn-2">Read More</button></a>
            </div>
        </div>

        
        <div class="col-md-4">
          <h2>Formation cabine crew</h2>
          <p>
          Omatuku Jets forme les futurs talents de l’aviation avec des programmes de formation cabine crew axés sur 
            l’excellence et le professionnalisme. Nos formations couvrent tous les aspects du métier, de la sécurité en vol au service client haut de gamme, avec des instructeurs expérimentés du secteur. 
            Les participants bénéficient d’un apprentissage pratique et théorique pour développer des compétences solides et se préparer aux exigences de l’aviation moderne. 
           </p>
         <a href="{{ route('formation') }}"><button class="custom-btn btn-2">Read More</button></a>
        </div>
        <div class="col-md-8"  id="av4">
          <img src="https://irp.cdn-website.com/9aa7a8bc/dms3rep/multi/mobile/Design-sans-titre--288-29.png" class="image-to-animate"/>
        </div>

      </div>
    </div>
  </section>


  <section style="background-color: rgb(189, 189, 189);" id="cards">

    <div>
      <div class="cv-container" id="jumbotron">
        <h1>La transparence et l'innovation sont au cœur de notre entreprise, 
          <br>reflétant une volonté d'être une structure authentique</h1>
          <a href="{{ route('propos') }}"> <button class="custom-btn btn-2">Read More</button></a>
      </div>
    </div>
  </section>

  
  @endsection

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>

</body>
</html>