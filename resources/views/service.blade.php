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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/other.css') }}">



</head>
@section('content')
<body>
  <header>
                <!-- cover -->
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg8" class="page-holder bg-cover">
    
        <div class="container-fluid" id="top">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 " style="margin-top: 180px;">
                <h1 class="display-2  text-light mb-2 mt-5" id="reussir"><strong><span><span style=" color:white; font-size:0.4em; font-weight:bolder;">Nos services</span></span></h1>
                <p class="lead  text-light mb-5" id="reussir"><span><span>
                Nous proposons une large gamme de services professionnels pour répondre à vos besoins. 
                Nous nous engageons à fournir chaque service avec le sourire et à votre plus haut niveau de satisfaction.</span></span></p>      
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
          <div class="col-md-5" id="serve">
            <h2>Formation cabine crew</h2>
            <p>
            Omatuku Jets s'engage activement auprès des anciens futurs talents de l'aviation en proposant des programmes de formation pour le personnel de cabine qui sont axés sur l'excellence et le professionnalisme. Nos formations exhaustives couvrent tous les aspects essentiels du métier, allant de la sécurité en vol, qui est primordiale, au service client haut de gamme, qui fait la réputation des compagnies aériennes. Nous disposons d'instructeurs expérimentés issus du secteur, qui apportent une richesse de connaissances et d'expertise à chaque session. Les participants à nos programmes bénéficient d'un apprentissage à la fois pratique et théorique, ce qui leur permet de développer des compétences solides et variées.             </p>
          </div>

          <div class="col-md-5">
            <h2>Jet privé</h2>
            <p>
            Profitez d'une expérience de vol sur mesure et inégalée avec Omatuku Jets, qui allie harmonieusement luxe, confort et confidentialité. Nos jets privés, méticuleusement entretenus et équipés des dernières technologies, sont à votre entière disposition pour des voyages exclusifs, que ce soit pour des déplacements d'affaires ou des escapades personnelles. Nous nous engageons à offrir un service impeccable, répondant aux plus hautes attentes de notre clientèle exigeante. Chaque détail est soigneusement pensé pour garantir un voyage agréable et mémorable, que ce soit à travers des aménagements somptueux, une gastronomie raffinée ou un personnel attentif et professionnel, toujours prêt à anticiper vos besoins.             </p>
          </div>
          <div class="col-md-7">
            <img src="images/privatejet.jpg"/>
          </div>


          <div class="row" id="cartes">
            <div class="col-md-8">
              <img src="images/airplane2.jpg"/>
            </div>
            <div class="col-md-4" style="margin-top: 30px;" id="serve">
              <h2>Cargo</h2>
              <p>
              Omatuku Jets se spécialise dans l'offre de solutions de transport de marchandises à la fois sûres et extrêmement efficaces, soigneusement conçues pour répondre aux besoins spécifiques et variés de chaque client. 
              Nous comprenons que chaque expédition est unique, c'est pourquoi nos services englobent une vaste gamme de marchandises, allant des colis sensibles qui nécessiteront une manipulation 
              délicate aux cargaisons volumineuses qui nécessitent une attention particulière. </p>
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
                        <a href="{{ route('contact.store') }}"><button class="custom-btn btn-2">Contacter</button></a>
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