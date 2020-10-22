<!-- On appelle le code d'autre pages grâce au PHP avec la fonction 'include',
cela nous permet de réutiliser du code sans le copier/coller à chaque nouvelle page !-->
<?php include 'views/header.php' ?>
<!-- Un Parallax est une image qui défile plus lentement que le scroll, cela créer un effet
"smooth" lors du défilement de la page -->
<div class="parallax-container center valign-wrapper">
<!-- La classe container de Materialize permet de centrer le contenu  !-->
  <div class="container">
  <!-- La classe row indique au contenu qu'il tient sur une même ligne, si il n'y a plus de
  place le contenu passe en dessous !-->
    <div class="row">
    <!-- Les col permettent de mesurer la taille des éléments selon la page.
    La grille de Materialize va de 1 à 12 !-->
      <div class="col s12 white-text">
    <!-- Les data-aos animent l'affichage (voir AOS library) !-->
        <h1 class="white-text" data-aos="zoom-out" data-aos-duration="1500">Arras Nettoyage</h1>
        <p>Prestations exigeantes pour clients exigeants </p>
        <a class="waves-effect waves-light btn-large light-blue lighten-3" data-aos="zoom-in" data-aos-duration="2000">Nos prestations</a>
      </div>
    </div>
  </div>
      <div class="parallax center "><img src="src/assets/img/parallax_1.jpg" alt="parallax avec deux agent d'entretien sur une nasselle entrain d'effectuer une prestation de vitrerie"></div>
    </div>
    <div class="section light-blue lighten-3" data-aos="fade-down" data-aos-duration="3000" data-aos-anchor-placement="top-center">
      <div class="row container">
        <h2 class="header">Présentation</h2>
        <p class="grey-text text-darken-3 lighten-3">Artisans dans le nettoyage et la vitrerie depuis plus de 25 ans dans l’Arrageois nous mettons à votre disposition notre savoir-faire que vous soyez un particulier ou un professionnel. Vous trouverez des photos de nos prestations ci-dessous ainsi qu’une présentation de nos effectifs.</p>
      </div>
    </div>
    <div class="parallax-container" >
    
      <div class="parallax"><img src="src/assets/img/parallax_1.jpg" class="carte" alt="parallax avec deux agent d'entretien sur une nasselle entrain d'effectuer une prestation de vitrerie"></div>
    </div>
<div class="section center" data-aos="fade-down" data-aos-duration="2000">
<h2 class="center">Nos prestations</h2>
<div class="row">
    <div class="col s12 l4"data-aos="flip-left" data-aos-duration="1000">
      <div class="card">
        <div class="card-image">
        <a href="views/vitrerie.php">
          <img src="src/assets/img/card-1.jpg" alt="image représentation une prestation de vitrerie par la societé Arras Nettoyage">
          <!-- La span au lieu de p permet d'écrire "dans" l'img !-->
          <span class="card-title">Vitrerie</span>
        </a>
        </div>
      </div>
    </div>
    <div class="col s12 l4" data-aos="flip-up" data-aos-duration="1000">
      <div class="card">
        <div class="card-image">
          <a href="views/menage.php">
          <img src="src/assets/img/card-2.jpg" alt="image représentation une prestation de ménage par la societé Arras Nettoyage">
          <span class="card-title">Ménage</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col s12 l4" data-aos="flip-right" data-aos-duration="1000">
      <div class="card">
        <div class="card-image">
        <a href="views/encombrants.php">
          <img src="src/assets/img/card-3.jpg" alt="image représentation une prestation de débarassement d'encombrants par la societé Arras Nettoyage">
          <span class="card-title">Encombrants</span>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section center " data-aos="fade-down" data-aos-duration="2000">
<h2 class="center">Notre équipe</h2>
<div class="row">
        <div class="col l4 m12" data-aos="fade-down" data-aos-duration="500">
          <div class="card bg-custom z-depth-3">
            <img src="src/assets/img/card-3.jpg" class="responsive-img" alt="employé d'Arras Nettoyage Sylvain Cresson, chef d'équipe">
            <div class="card-content">
              <span class="card-title">Martin</span>
              <h6>Developer</h6>
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.
              </p>
            </div>
          </div>
        </div>
        <div class="col l4 m12" data-aos="fade-down" data-aos-duration="1000">
          <div class="card bg-custom z-depth-3">
            <img src="src/assets/img/card-3.jpg" class="responsive-img" alt="employé d'Arras Nettoyage Eric Brassart, employé">
            <div class="card-content">
              <span class="card-title">Martin</span>
              <h6>Developer</h6>
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.
              </p>
            </div>
          </div>
        </div>
        <div class="col l4 m12" data-aos="fade-down" data-aos-duration="2000">
          <div class="card bg-custom z-depth-3">
            <img src="src/assets/img/card-3.jpg" class="responsive-img" alt="employé d'Arras Nettoyage Frederic Kieffer, Gérant">
            <div class="card-content">
              <span class="card-title">Martin</span>
              <h6>Developer</h6>
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.
              </p>
            </div>
          </div>
        </div>
</div>
</div>
<div class="section center" data-aos="fade-down" data-aos-duration="2000">
<h2 class="center">Gallerie</h2>
<a href="#img1"> 
<img class="small" src="src/assets/img/card-3.jpg">
</a>
 <a href="#img2"> 
<img class="small" src="src/assets/img/card-3.jpg">
</a>
  <a href="#img3"> 
<img class="small" src="src/assets/img/card-3.jpg">
</a>
  <a href="#img4"> 
  <img class="small" src="src/assets/img/card-3.jpg">
</a>
  <a href="#img5"> 
  <img class="small" src="src/assets/img/card-3.jpg">
</a>
  <a href="#img6"> 
  <img class="small" src="src/assets/img/card-3.jpg">
</a>
  <a href="#img7"> 
  <img class="small" src="src/assets/img/card-3.jpg">
</a>
  <a href="#img8"> 
  <img class="small" src="src/assets/img/card-3.jpg">
</a>
 <!--Lightboxes-->

  <a href="#_" class="lightbox" id="img1">
    <div> 
      <img src="src/assets/img/card-3.jpg"/> 
      <p> The mighty Bear </p>
    </div>
 </a>
  <a href="#_" class="lightbox" id="img2">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The eagle</p>
    </div>
 
  </a>
  <a href="#_" class="lightbox" id="img3">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The squirrel</p>
    </div>
 
  </a>
  <a href="#_" class="lightbox" id="img4">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The Fox</p>
    </div>
 
  </a>
    <a href="#_" class="lightbox" id="img5">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The Stag</p>
    </div>
 </a>
 <a href="#_" class="lightbox" id="img6">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The Stag</p>
    </div>
 </a>
 <a href="#_" class="lightbox" id="img7">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The Stag</p>
    </div>
 </a>
 <a href="#_" class="lightbox" id="img8">
    <div> 
      <img src="src/assets/img/card-3.jpg"/>
      <p> The Stag</p>
    </div>
 </a>
  </div>


  </div>
</div>
<div class="parallax-container" >
<div data-aos="fade-up" data-aos-duration="3000">
<div class="row center" style="margin:50px">
  <div class="col s12 m8 l6 offset-m2 offset-l3 white" style="padding:30px;border-radius:5px">
    <h4 class="light-blue-text text-lighten-3" style="margin-top:0px;font-weight:300">Nous contacter</h4>
    <form action="https://formspree.io/f/xaylooda" method="POST">
      <input placeholder="Nom" class="input-field" type="text" name="name"/>
      <input placeholder="E-mail" class="input-field" type="email" name="_replyto">
        <textarea id="textarea1" class="materialize-textarea" placeholder="Votre message" name="message" data-length="500"></textarea>
      <input class="waves-effect waves-light btn light-blue lighten-3" type="submit" value="Envoyer">
    </form>
  </div>
</div>
</div>
      <div class="parallax"><img src="src/assets/img/parallax_1.jpg" class="carte"></div>
    </div>
<?php include 'views/footer.php' ?>