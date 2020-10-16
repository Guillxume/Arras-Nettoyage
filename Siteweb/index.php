<!-- On appelle le code d'autre pages grâce au PHP avec la fonction 'include',
cela nous permet de réutiliser du code sans le copier/coller à chaque nouvelle page !-->
<?php include 'views/header.php' ?>
<!-- Un Parallax est une image qui défile plus lentement que le scroll, cela créer un effet
"smooth" lors du défilement de la page -->
<div class="parallax-container center valign-wrapper">
<!-- La classe container de Materialize permet de centrer le contenu !-->
  <div class="container">
  <!-- La classe row indique au contenu qu'il tient sur une même ligne, si il n'y a plus de
  place le contenu passe en dessous !-->
    <div class="row">
    <!-- Les col permettent de mesurer la taille des éléments selon la page.
    La grille de Materialize va de 1 à 12 !-->
      <div class="col s12 white-text">
        <h1 class="white-text" data-aos="zoom-out" data-aos-duration="1500">Arras Nettoyage</h1>
        <p>Prestations exigeantes pour clients exigeants </p>
        <a class="waves-effect waves-light btn-large light-blue lighten-3" data-aos="zoom-in" data-aos-duration="2000">Nos prestations</a>
      </div>
    </div>
  </div>
      <div class="parallax center "><img src="src/assets/img/parallax_1.jpg"></div>
    </div>
    <div class="section light-blue lighten-3" data-aos="fade-down" data-aos-duration="3000" data-aos-anchor-placement="top-center">
      <div class="row container">
        <h2 class="header">Présentation</h2>
        <p class="grey-text text-darken-3 lighten-3">Artisans dans le nettoyage et la vitrerie depuis plus de 25 ans dans l’Arrageois nous mettons à votre disposition notre savoir-faire que vous soyez un particulier ou un professionnel. Vous trouverez des photos de nos prestations ci-dessous ainsi qu’une présentation de nos effectifs.</p>
      </div>
    </div>
    <div class="parallax-container" >
    
      <div class="parallax"><img src="src/assets/img/parallax_1.jpg" class="carte"></div>
    </div>
<div class="section center " data-aos="fade-down" data-aos-duration="2000">
<h2 class="center">Nos prestations</h2>
<div class="row">
    <div class="col s12 l4"data-aos="flip-left" data-aos-duration="1000">
      <div class="card">
        <div class="card-image">
        <a href="views/vitrerie.php">
          <img src="src/assets/img/card-1.jpg">
          <span class="card-title">Vitrerie</span>
        </a>
        </div>
      </div>
    </div>
    <div class="col s12 l4" data-aos="flip-up" data-aos-duration="1000">
      <div class="card">
        <div class="card-image">
          <a href="views/menage.php">
          <img src="src/assets/img/card-2.jpg">
          <span class="card-title">Ménage</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col s12 l4" data-aos="flip-right" data-aos-duration="1000">
      <div class="card">
        <div class="card-image">
        <a href="views/encombrants.php">
          <img src="src/assets/img/card-3.jpg">
          <span class="card-title">Encombrants</span>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'views/footer.php' ?>