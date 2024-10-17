@extends('layout')
@section('title', 'cargo')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.meta', ['description' => 'Nos services d’aviation sont axés sur la sécurité, le vol responsable et le confort.',
   'keywords' => 'vols, jets', 'cargo'])

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
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" id="bkg3" class="page-holder bg-cover">
    
        <div class="container-fluid" id="top">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 " style="margin-top: 180px;">
                <h1 class="display-2  text-light mb-2 mt-5" id="reussir"><strong><span><span style=" color:white; font-size:0.4em; font-weight:bolder;">TRANSPORT, CARGO, AERIEN</span></span></h1>
                <p class="lead mb-0" id="txt" style=" color:white; font-weight:250;">Rapide et fiable |  Securité maximal |  Couverture mondiale</p>
            </div>
            
            </div>
        </div>
    </section>

  </header>



  
  <!-- Page section example for content below the video header -->
  
  <!-- Page section example for content below the video header -->
  <section class="my-5">
    <div class="container">

        <div class="row" id="cartes">
          <div class="col-md-7">
            <img src="../images/cargo1.png"/>
          </div>
          <div class="col-md-5" id="cargs">
            <h2>Capacité et flexibilité cargo</h2>
            <p>
                L’Airbus A340-300 est conçu pour offrir une capacité de chargement impressionnante et une
                flexibilité remarquable pour le transport de marchandises. Cet appareil assure une gestion
                efficace des cargaisons variées, tout en garantissant une performance optimale. Sa conception
                robuste permet une adaptation facile à différents types de fret, répondant ainsi aux besoins
                diversifiés du secteur cargo</p>
                <a href="{{ route('contact.store') }}"><button class="custom-btn btn-2">Contacter</button></a>
          </div>


          <div class="col-md-5" id="cargs">
            <h2>Puissance et Espace</h2>
            <p>
                L’Airbus A340-600 se distingue par sa puissance impressionnante et son espace généreux,
                offrant une solution idéale pour le transport de grandes quantités de marchandises. Cet appareil
                allie une capacité de chargement exceptionnelle à une performance fiable, assurant une efficacité
                accrue pour les opérations cargo sur de longues distances            </p>
                <a href="{{ route('contact.store') }}"><button class="custom-btn btn-2">Contacter</button></a>
          </div>
          <div class="col-md-7">
            <img src="../images/cargo2.png"/>
          </div>


          <div class="row" id="cartes">
            <div class="col-md-8">
              <img src="../images/cargo3.png"/>
            </div>
            <div class="col-md-4" style="margin-top: 30px;" id="cargs">
              <h2>Excellence et
                Polyvalence</h2>
              <p>
                Le Boeing 737 se caractérise par son excellence en matière de performance et sa polyvalence
                dans le secteur du fret. Avec une capacité de chargement optimisée et une grande flexibilité
                opérationnelle, cet appareil est parfaitement adapté aux missions cargo variées. Il offre une
                solution efficace et fiable pour les besoins du transport aérien de marchandises, que ce soit pour
                des trajets régionaux ou plus étendus.
              </p>
              <a href="{{ route('contact.store') }}"><button class="custom-btn btn-2">Contacter</button></a>
              </div>
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
