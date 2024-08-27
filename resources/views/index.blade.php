@extends('layout')
@section('title', 'Omatuku Jet')

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
          <h1 class="display-3" id="txt">Votre Voyage commence ici, <br>
            <span style="color: rgb(16, 136, 216);">avec Omatuku Jets .</span>
          </h1>
          <p class="lead mb-0" id="txt">Réalisez vos rêves un vol à la fois .
          </p>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <div class="row">
        <div id="presentation">
          <h1>Découvrez l'excellence de <br> nos services.</h1>
          <span>____________________</span>
          <p>Omatuku Jets offre des solutions de transport de Jet rapides et fiables. Avec notre flotte moderne et <br> 
            notre expertise logistique, nous assurons la livraison sécurisée de vos marchandises où que vous en <br>
            ayez besoin, à tout moment.</p>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Page section example for content below the video header -->
  <section class="my-5">
    <div class="container">

        <div class="row" id="cartes" style="margin-top: 30px;">
          <div class="col-md-7" id="av1">
            <img src="images/avion3.jpg"/>
          </div>
          <div class="col-md-5">
            <h1>TAGLINE</h1>
            <h2>Jet <strong>Privé</strong></h2>
            <p>
            Découvrez l'élégance et le confort du voyage en jet privé avec Omatuku Jet. 
            Nos avions haut de gamme vous offrent une expérience sur mesure, alliant rapidité et luxe, 
            pour que chaque voyage soit inoubliable. Évitez les traces des aéroports traditionnels et profitez 
            de l'atterrissage sur des pistes privées, vous permettant d'accéder à des destinations exclusives. 
            Notre équipe dédiée s'assure que chaque détail de votre voyage soit parfaitement orchestré, 
            des services personnalisés à bord aux transferts VIP à votre arrivée. Avec Omatuku Jet.</p>
            <a href="{{ route('jet') }}"><button class="custom-btn btn-2">Read More</button></a>
          </div>


          <div class="col-md-5">
            <h1>TAGLINE</h1>
            <h2><strong>Agence de</strong> Voyage</h2>
            <p>
            Volez vers de nouveaux sommets avec Omatuku Jet, votre partenaire privilégié pour des voyages en jet privé inégalés. 
            Nous vous offrons une expérience de vol personnalisée, où chaque instant est conçu pour votre confort et votre satisfaction. 
            Évitez les fichiers d'attente et les contraintes des aéroports ordinaires en profitant de notre service exclusif, 
            qui vous permet de décoller et d'atterrir selon votre emploi du temps.</p>
            <button class="custom-btn btn-2">Read More</button>
          </div>
          <div class="col-md-7"  id="av2">
            <img src="https://irp.cdn-website.com/9aa7a8bc/dms3rep/multi/mobile/Design-sans-titre--286-29.png"/>
          </div>


          <div class="row" id="cartes">
            <div class="col-md-8"  id="av3">
              <img src="https://irp.cdn-website.com/9aa7a8bc/dms3rep/multi/mobile/Design-sans-titre--287-29.png"/>
            </div>
            <div class="col-md-4" style="margin-top: 30px;">
              <h1>TAGLINE</h1>
              <h2>Cargo</h2>
              <p>
              Chez Omatuku Jet, nous comprenons l'importance d'un transport rapide et fiable pour vos marchandises. 
              Notre service de jet cargo est conçu pour répondre aux besoins des entreprises, en garantissant une livraison efficace et sécurisée de vos produits à travers le monde. 
              Grâce à notre flotte spécialisée, nous pouvons transporter des cargaisons de toutes tailles, en respectant des délais serrés tout en assurant une manutention soigneuse.</p>
              <a href="{{ route('cargo') }}"><button class="custom-btn btn-2">Read More</button></a>
            </div>
        </div>

        
        <div class="col-md-4">
          <h1>TAGLINE</h1>
          <h2><strong>Formation cabine</strong> crew</h2>
          <p>
          Chez Omatuku Jet, nous proposons des formations spécialisées en transport de fret pour vous aider à maîtriser les compétences essentielles dans ce domaine crucial. 
          Nos programmes de formation sont conçus pour répondre aux besoins des professionnels du fret aérien, en abordant des sujets tels que la réglementation internationale, 
          la gestion des risques, la logistique et la sécurité des marchandises.</p>
          <a href="{{ route('formation') }}"><button class="custom-btn btn-2">Read More</button></a>
        </div>
        <div class="col-md-8"  id="av4">
          <img src="https://irp.cdn-website.com/9aa7a8bc/dms3rep/multi/mobile/Design-sans-titre--288-29.png"/>
        </div>

      </div>
    </div>
  </section>


  <section style="background-color: rgb(189, 189, 189);" id="cards">
    <div class="container">
      <h1>Taking you on the ride of a lifetime.</h1>
      <div class="row" id="images">
        <div class="col-md-6" id="img1">
          <img src="https://lirp.cdn-website.com/md/pexels/dms3rep/multi/opt/pexels-photo-236070-160w.jpeg">
        </div>

        <div class="col-md-6" id="img2">
          <img src="https://lirp.cdn-website.com/md/pexels/dms3rep/multi/opt/pexels-photo-20640947-160w.jpeg">
        </div>
      </div>
    </div>

    <div>
      <div class="cv-container" id="jumbotron">
        <h1>We fly out of Kinshasa and consider 
          <br>this our community.</h1>
          <a href="{{ route('propos') }}"> <button class="custom-btn btn-2">Read More</button></a>
      </div>
    </div>
  </section>

  <section id="proverbes">
    <div class="container">
      <div class="row">
        <div id="title_last">
          <h1>Taking you on the ride of a lifetime.</h1>
        </div>

        <diV class="row" id="citations">
          <diV class="col-md-4">
            <div><img src="https://irt-cdn.multiscreensite.com/md/dmtmpl/dms3rep/multi/mobile/young-woman-with-man-outdoors-sun.jpg" alt="image"> </div>
            
            <div id="icone">
              <img src="images/citation.png" title="citation icônes">
              <p>I wouldn't trust any other aviation company except OMATUKU JETS. 
                They have the experience to keep people safe.</p>
              <h2>Jane Faber</h2>
            </div>
          </diV>

          <diV class="col-md-4">
            <div> <img src="https://irt-cdn.multiscreensite.com/md/dmtmpl/dms3rep/multi/mobile/man-big-smile-portrait-black-white.jpg" alt="images"></div>
            <div id="icone">
              <img src="images/citation.png" title="citation icônes">
              <p>The pilots at OMATUKU JETS are truly the best in the business.</p>
              <h2>John Smith</h2>
            </div>
          </diV>

          <diV class="col-md-4">
            <div> <img src="https://irt-cdn.multiscreensite.com/md/dmtmpl/dms3rep/multi/mobile/woman-with-hat-snow.jpg" alt="images"></div>
            <div id="icone">
              <img src="images/citation.png" title="citation icônes">
              <p>We have used OMATUKU JETS repeatedly, and our experience just gets better every time.</p>
              <h2> Madelaine Taylor</h2>
            </div>
          </diV>

        </diV>
      </div>
    </div>
  </section>
  
  @endsection

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>

</body>
</html>