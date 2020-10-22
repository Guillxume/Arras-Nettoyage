<!-- Donne le type de document !-->
<!DOCTYPE html>
<!-- Balise html indique le début du code html !-->
<html>
<!-- Balise head contient les informations lues par le Navigateur !-->
<head>
<!-- UTF-8 pour les accents etc !-->
<meta charset="utf-8">
<!-- name pour "signer" le site !-->
<meta name = "author" content = "Arras Nettoyage" >
<!-- Description pour indiquer au robot de quoi parle le site !-->
<meta name = "description" content = "société de prestations nettoyage dans le secteur d'Arras" >
<!-- keywords, mots clés afin d'améliorer le référencement !-->
<meta name = "keywords" content = "entreprise nettoyage ménage vitrerie Hauts-de-France" >
<!-- viewport indique au robot que le site est responsive, ça aide également au référencement !-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- Appel de la font !-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Appel des CSS (feuilles de styles pour l'affichage)!-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="src/assets/css/style.css">
<link rel="stylesheet" href="src/assets/css/style.scss">
</head>
<body>
  <header>
<!-- FIN DU HEAD !-->
<!-- Sidenav qui réagit avec un trigger
Au clic sur l'icône, elle apparaît.!-->
  <ul id="slide-out" class="sidenav">
    <li><a href="#!">Accueil</a></li>
    <li><a href="#!"><i class="material-icons">cleaning_services</i>Nos prestations</a></li>
    <li><a href="#!">Notre Équipe</a></li>
    <li><a href="#!">Galerie</a></li>
    <li><a href="#!">Nous Contacter</a></li>
  </ul>
 
<!-- Navbar !-->
  <div class="navbar-fixed">
    <nav class="light-blue lighten-3">
      <div class=" nav-wrapper">
       <!-- Icone du trigger !-->
      <a href="#" data-target="slide-out" class="button-collapse sidenav-trigger show-on-large"><i class="text-black large material-icons">menu</i></a>
        <a href="#!" class="brand-logo"><img src="src/assets/img/logo.png" alt="logo de la societé Arras nettoyage"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">06.08.84.94.19</a></li>
          <li><a href="badges.html">arras.nettoyage@orange.fr</a></li>
      
        </ul>
      </div>
    </nav>
  </div>
</header>
