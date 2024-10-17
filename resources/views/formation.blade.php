@extends('layout')
@section('title', 'formation')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.meta', ['description' => 'Nos services d’aviation sont axés sur la sécurité, le vol responsable et le confort.',
   'keywords' => 'vols, jets', 'formation'])

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
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg7" class="page-holder bg-cover">
    
        <div class="container-fluid" id="top">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 " style="margin-top: 180px;">
                <h1 class="display-2  text-light mb-2 mt-5" id="reussir"><strong><span><span style=" color:white ; font-weight:bolder; font-size:0.7em; margin-top: 160px;">Formation Cabine Crew</span></span></h1>
            </div>
            
            </div>
        </div>
    </section>

  </header>

<section>
  <div class="container">
  <div class="row" id="cartes">
            <div class="col-md-7"  id="av3" >
              <img src="images/study.jpg" class="image-to-animate"/>
            </div>
            <div class="col-md-5" style="margin-top: 30px;">
              <h2>En Savoir plus</h2>
              <p>
              Chez Omatuku Jets, nous proposons une formation complète et personnalisée à nos équipages de cabine, 
              s'appuyant sur l'expertise de professionnels chevronnés du secteur aéronautique. Nos programmes de formation 
              couvrent l'ensemble des compétences requises pour assurer un service de haute qualité à bord de nos jets privés :
               accueil des passagers, gestion des urgences, sécurité en vol, service à table et connaissance des protocoles de luxe. 
               Grâce à cette formation rigoureuse et continue, nos équipages de cabine sont en mesure de garantir et répondre des standards de sécurité 
               , de service irréprochables et aux attentes les plus exigeantes de notre clientèle internationale et d'offrir une expérience de vol inoubliable
               , faisant ainsi d'Omatuku Jets la référence en matière de transport aérien privé."
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
