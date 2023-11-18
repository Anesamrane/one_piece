// Get references to elements
const menuToggle = document.getElementById('menu-toggle');
const offcanvas = document.getElementById('offcanvas');

// Toggle offcanvas menu
menuToggle.addEventListener('click', function() {
  offcanvas.classList.toggle('offcanvas-open');
});
