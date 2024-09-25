<nav class="navbar navbar-expand-lg bg-body-tertiary" aria-label="Twelfth navbar example" id="header">
  <div class="container-fluid">

    <!-- Menu responsive -->
    <div class="toggle_menu">
      <img src="images/menu_h.png" height="45px" width="46px" alt="menu hamburger">
    </div>

    <div class="logo">
      <a href="{{ route('index') }}">
        <img src="images/logo2.png" style="height: 200px; width: 300px;">
      </a>
    </div>

    <!-- Icône WhatsApp -->
    <a href="https://wa.me/243901488792" target="_blank" class="whatsapp-icon">
      <img src="images/whatsapp-icon.png" height="45px" width="45px" alt="WhatsApp">
    </a>

    <a href="#" class="icon_c">
      <img src="images/compte.png" height="25px" width="25px" alt="compte">
    </a>


    <div class="menu" id="menu">
      <div class="container">
        <div class="row">
        <div class=col-md-6>
      <div class="ferme">
        <a href="#" onclick="closeMenu()" id="logs"><img src="images/fermer.png"></a>
      </div>
      <!-- <a href="{{ route('index') }}" id="logos"><img src="images/logo2.png" style="height: 200px; width: 230px;"></a> -->

      <ul>
      <li><img src="images/logo2.png" style="height: 200px; width: 300px; margin:-50px 0;"></li>
        <li class="ferme"><a href="#" onclick="closeMenu()">FERMER</a></li>
        <li><a href="{{ route('index') }}">ACCUEIL</a></li>
        <li><a href="{{ route('propos2') }}">A PROPOS</a></li>
        <li><a href="{{ route('service') }}">SERVICES</a></li>
        <li><a href="{{ route('reservation.store') }}"><div class="button" style="border-radius: 17px; background-color:#073766; padding:14px 75px; color:white; margin-top:10px; margin-bottom:30px;">Réserver ici</div></a></li>
      </ul>
      </div>

      <div class=col-md-6 id="pic">
        <img src="images/jet.jpg">
      </div>
        </div>
      </div>

    </div>

  </div> <!-- Fermeture de container-fluid -->
</nav> <!-- Fermeture du nav -->


<script>
  // Script pour fermer le menu
function closeMenu() {
  const navbarDropdown = document.querySelector(".menu");
  navbarDropdown.classList.toggle('mobile-menu');
}

// Script pour ouvrir/fermer le menu responsive
document.querySelector(".toggle_menu").addEventListener('click', () => {
  const navlinks = document.querySelector(".menu");
  navlinks.classList.toggle('mobile-menu');
});

// Script pour changer la couleur du header en fonction du scroll
window.addEventListener('scroll', function() {
  const scrollPosition = window.pageYOffset;
  const changeColorElement = document.getElementById('header');

  if (scrollPosition < 300) {
    changeColorElement.style.backgroundImage = "linear-gradient(to bottom, rgb(0, 0, 0), rgba(0, 128, 255, 0))";
    changeColorElement.style.backgroundColor = "transparent";
  } else {
    changeColorElement.style.backgroundImage = "none";
    changeColorElement.style.backgroundColor = "black";
  }
});

// Script pour réinitialiser la couleur du header lorsque la page est chargée
window.addEventListener('load', function() {
  const changeColorElement = document.getElementById('header');

  if (window.pageYOffset < 300) {
    changeColorElement.style.backgroundImage = "linear-gradient(to bottom, rgb(0, 0, 0), rgba(0, 128, 255, 0))";
    changeColorElement.style.backgroundColor = "transparent";
  } else {
    changeColorElement.style.backgroundImage = "none";
    changeColorElement.style.backgroundColor = "white";
  }
});
</script>