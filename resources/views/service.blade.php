@extends('layout')
@section('title', 'services')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.meta', ['description' => 'Nous offrons une large gamme de services professionnels pour répondre à vos besoins. Nous nous engageons à vous fournir chaque service avec le sourire et à votre plus haut niveau de satisfaction.',
   'keywords' => 'vols, jets', 'services'])


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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


</head>
@section('content')
<body>
  <header>
                <!-- cover -->
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg" class="page-holder bg-cover">
    
        <div class="container-fluid" id="top">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 " style="margin-top: 120px;">
                <h1 class="display-2  text-light mb-2 mt-5" id="reussir"><strong><span><span style=" color:white ;">Our services</span></span></h1>
                <p class="lead  text-light mb-5" id="reussir"><span><span>We provide a wide range of professional services to meet your needs. 
                  We promise to provide every service with a smile, and to your highest level of satisfaction.</span></span></p>      
            </div>
            
            </div>
        </div>
    </section>

  </header>



  
  <!-- Page section example for content below the video header -->
  <section class="my-5">
    <div class="container">

        <div class="row" id="cartes" style="margin-top: 30px;">
          <div class="col-md-7">
            <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/mobile/jason-goodman-nF0nQuqBsrI-unsplash.jpg"/>
          </div>
          <div class="col-md-5">
            <h2 style="  margin-top: 120px;">Espace de coworking ouvert</h2>
            <p>
            Découvrez notre espace de coworking ouvert, un lieu dynamique et inspirant où la collaboration et la créativité s'épanouissent. Conçu pour les professionnels, entrepreneurs et freelances, cet espace convivial offre une atmosphère propice à l'échange d'idées et à l'innovation.
            </p>
            <button class="custom-btn btn-2">Read More</button>
          </div>


          <div class="col-md-5">
            <h2 style="  margin-top: 120px;">Meeting rooms</h2>
            <p>
            Notre salle de réunion est un espace parfaitement aménagé pour favoriser des échanges productifs et des collaborations fructueuses. Équipée des dernières technologies audiovisuelles, elle permet des présentations fluides et des visioconférences de haute qualité, garantissant que chaque participant soit impliqué, qu'il soit présent sur place ou à distance. 
            </p>
            <button class="custom-btn btn-2">Read More</button>
          </div>
          <div class="col-md-7">
            <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/mobile/elena-baidak-pz69kY0UQuQ-unsplash.jpg"/>
          </div>


          <div class="row" id="cartes">
            <div class="col-md-8">
              <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/mobile/austin-distel-KWsKzLGmmzQ-unsplash.jpg"/>
            </div>
            <div class="col-md-4" style="margin-top: 30px;">
              <h2 style="  margin-top: 120px;">Event spaces</h2>
              <p>
              Notre équipe dévouée est là pour vous accompagner dans l'organisation de votre événement, en vous offrant des solutions sur mesure qui répondent à vos besoins spécifiques. Profitez également de services complémentaires tels que la restauration, le Wi-Fi gratuit et des espaces de détente
              </p>
              <button class="custom-btn btn-2">Read More</button>
            </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
        <div id="partenaires">
            <div id="titles">
                <h1>Our clients</h1>
            </div>
            <div class="row row-cols-2 row-cols-md-4 align-items-stretch">
                <div class="col-6 col-md-3">
                    <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/thumbnail/CNN-logo.svg">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/mobile/Conan.svg">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/mobile/Spotify-logo.svg">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://irp.cdn-website.com/md/dmtmpl/f3744e48-0dcf-45c2-8f56-f828fa68d2b6/dms3rep/multi/mobile/Slack-logo.svg">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid black-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin-top: 100px; margin-bottom: 100px;">
                    <h1>Interested in our services? <br> We’re here to help!</h1>
                </div>
                <div class="col-md-5" style="margin-top: 100px;">
                    <p>We want to know your needs exactly so that we can provide the perfect solution. 
                        Let us know what you want and we’ll do our best to help.</p>
                        <button class="custom-btn btn-2" style="width: 250px;">Book an appointment</button>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>

</body>
</html>