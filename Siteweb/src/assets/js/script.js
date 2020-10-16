/* On appel du javascript présent dans Materialize */
document.addEventListener('DOMContentLoaded', function(options) {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  function goBack() {
    window.history.go(-1);
  }
  document.addEventListener('DOMContentLoaded', function(options) {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
  });

  AOS.init();
