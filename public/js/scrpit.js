
document.addEventListener('DOMContentLoaded', function() {
    var images = document.querySelectorAll('.image-to-animate');
    
    window.addEventListener('scroll', function() {
      images.forEach(function(img) {
        if (isVisible(img)) {
          img.classList.add('visible');
        }
      });
    });
  
    function isVisible(element) {
      var rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  });
  