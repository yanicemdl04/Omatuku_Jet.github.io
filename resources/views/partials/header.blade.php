<nav class="navbar navbar-expand-lg bg-body-tertiary" aria-label="Twelfth navbar example" id="header">
  <div class="container-fluid">

    <div class="logo">
      <a href="{{ route('index') }}">
        <img src="images/logo2.png" style="height: 150px; width: 180px;">
      </a>
    </div>

    <div class="menu" id="menu">
    <div class="ferme"><a href="#" onclick="closeMenu()" id="logs"><img src="images/fermer.png"></a></div>
    <a href="{{ route('index') }}" id="logos"><img src="images/logo2.png" style="height: 180px; width: 200px;"></a>

      <ul>
        <li class="ferme"><a href="#" onclick="closeMenu()">FERMER</a></li>
        <li><a href="{{ route('index') }}">ACCUEIL</a></li>

        <li><a href="{{ route('propos2') }}">A propos</a></li>
        <li><a href="{{ route('service') }}">Services</a></li>
        <li><a href="{{ route('contact') }}"><div class="button" style="border-radius: 17px; background-color:#073766; padding:14px 75px; color:white; margin-top:10px; margin-bottom:30px;">Contact</div></a></li>
      </ul>
    </div>

    <!-- Menu responsive -->
    <div class="toggle_menu">
      <img src="images/menu_h.png" height="35px" width="35px" alt="menu hamburger">
    </div>

    <script>
      // Script pour fermer le menu
      function closeMenu() {
        const navbarDropdown = document.querySelector(".menu");
        navbarDropdown.classList.toggle('mobile-menu');
      }

      // Script pour ouvrir/fermer le menu responsive
      const menu = document.querySelector(".toggle_menu");
      const navlinks = document.querySelector(".menu");

      menu.addEventListener('click', () => {
        navlinks.classList.toggle('mobile-menu');
      });

// Script pour changer la couleur du header en fonction du scroll
window.addEventListener('scroll', function() {
    var scrollPosition = window.pageYOffset;
    var changeColorElement = document.getElementById('header');

    // Change la couleur de fond en fonction de la position de défilement
    if (scrollPosition < 300) {
        changeColorElement.style.backgroundImage = "linear-gradient(to bottom, rgb(0, 0, 0), rgba(0, 128, 255, 0))";
        changeColorElement.style.backgroundColor = "transparent"; // Réinitialise la couleur de fond unie à transparent
    } else {
        changeColorElement.style.backgroundImage = "none";
        changeColorElement.style.backgroundColor = "white"; // Applique la couleur de fond blanche
    }
});

// Script pour réinitialiser la couleur du header lorsque la page est chargée (utile pour les autres pages)
window.addEventListener('load', function() {
    var changeColorElement = document.getElementById('header');

    if (window.pageYOffset < 300) {
        changeColorElement.style.backgroundImage = "linear-gradient(to bottom, rgb(0, 0, 0), rgba(0, 128, 255, 0))";
        changeColorElement.style.backgroundColor = "transparent"; // Réinitialise la couleur de fond unie à transparent
    } else {
        changeColorElement.style.backgroundImage = "none";
        changeColorElement.style.backgroundColor = "white"; // Applique la couleur de fond blanche
    }
});
    </script>

  </div> <!-- Fermeture de container-fluid -->
</nav> <!-- Fermeture du nav -->