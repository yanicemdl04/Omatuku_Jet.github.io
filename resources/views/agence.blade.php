@extends('layout')
@section('title', 'agence')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.meta', ['description' => 'Nos services d’aviation sont axés sur la sécurité, le vol responsable et le confort.',
   'keywords' => 'vols, jets', 'agence'])

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
  <header>
                <!-- cover -->
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg9" class="page-holder bg-cover">
    
        <div class="container-fluid" id="top">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 " style="margin-top: 180px;">
                <h1 class="display-2  text-light mb-2 mt-5" id="reussir"><strong><span><span style=" color:white ; font-weight:bolder; font-size:0.8em;">Luxe Travel</span></span></h1>
            </div>
            
            </div>
        </div>
    </section>

  </header>

  <section>
  <div class="container">
  <div class="row" id="cartes">
    <div id="props">
      <h2 style="font-size: 2.5em;">LUXE TRAVEL by OMATUKU JETS</h2>
    </div>
            <div class="col-md-7"  id="av3" >
              <img src="images/mediumshot.jpg" class="image-to-animate"/>
            </div>
            <div class="col-md-5" style="margin-top: 30px;">
              <h2>En Savoir plus</h2>
              <p>
              Découvrez le monde du voyage aérien raffiné avec Luxe Travel , un serviceOmatuku Jets qui a pour ambition de rendre l'
              Imaginez-vous à bord de nos jets privés, où chaque détail est soigneusement pensé pour vous garantir un confort inégalé. Que ce soit pour un voyage d'affaires urgent, une escapade romantique ou une aventure familiale, nos avions sont équipés des dernières technologies.
              Avec Luxe Travel, nous mettons un point d'honneur à offrir un service impeccable, adapté à toutes les exigences de notre clientèle diversifiée. Notre équipe dévouée est disponible 24 heures sur 24 pour personnaliser votre expérience de vol, que ce soit par des options de restauration raffinées, des divertissements à la demande, ou encore des aménagements spécifiques pour répondre à vos attentes.
                
              </p>
            </div>
        </div>
  </div>
  </section> 
  <!-- Page section example for content below the video header -->
  
@endsection

<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
