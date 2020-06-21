<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/detail.css">

<header class="detail">

  <div id="detail-burgerMenu">
    <nav class="navbar navbar-light bg-white d-flex align-items-start justify-content-between">
      <img src="assets/images/detail/burger-menu.png" alt="Burger menu" class="pl-4 pt-5" onclick="openBurgerMenu()"/>
      <div class="text-center">
        <h1>CHENAL HÔTEL</h1>
        <p class="detail-titleStar">*<span class="mx-2">*</span>*</p>
        <p class="detail-breadcrumbs text-uppercase"><a href="#">Accueil  > </a><a href="#">Séjourner > </a><a href="#">Hôtels > </a><a href="#" class="text-dark">Chenal Hotel</a></p>
      </div>
      <img src="assets/images/detail/logo.png" alt="Logo">
    </nav>
  </div>

  <div id="detail-burgerMenuDropDown">
    <img src="assets/images/detail/burger-menu-white.png" class="pt-5 pl-5" alt="Burger menu" onclick="closeBurgerMenu()"/>

    <div class="container detail-container">
      <div class="d-flex justify-content-center">
        <img src="assets/images/detail/logo-white.png" width="289px" height="294px" alt="Logo">
      </div>
      <div class="row detail-BurgerMenuDropDownDescription">

        <div class="col-lg-11">
          <h2>Séjourner</h2>
          <h2 class="pt-3">Manger</h2>
          <h2 class="pt-3">Idée Week-end</h2>
          <h2>Carte intéractive</h2>
          <h2 class="pt-3">Groupe</h2>
          <h2 class="pt-3">Pratique</h2>
          <h2 class="pt-3">Boutique en ligne</h2>
          <h2 class="pt-3">Découvrir</h2>
        </div>

        <div class="col-lg-1 d-flex align-items-center justify-content-between flex-column">
          <img src="assets/images/detail/meteo-icon.png" width="80px" alt="Icone méteo">
          <img src="assets/images/detail/location-icon.png" width="50px" alt="Icone location">
          <img src="assets/images/detail/discover-icon.png" class="pb-5" width="60px" alt="Icon à découvrir">
        </div>

      </div>
    </div>
  </div>
  <div class="detail-banner">
  </div>

</header>

<main class="detail">
  <section class="d-flex justify-content-center">
    <div id="detail-description" class="container detail-boxShadow">
      <h2 class="text-center mt-5">CHENAL HÔTEL</h2>
      <p class="detail-titleStar text-center mt-1">*<span class="mx-3">*</span>*</p>
      <p class="px-4 pt-5">L’Hôtel Le Chenal*** vous reçoit chaleureusement à Beauvais, dans le département de l’Oise.
        Idéalement situé en centre ville de Beauvais, vous disposez d’un arrêt “Navette Aéroport Beauvais-Tillé” à proximité.<br/><br/>
        Notre hôtel est composé de 28 chambres, équipées de TV grand écran LCD avec Canal Satellite, la TNT, RMC Sport,
        BBC, TVE… ainsi qu’un accès wifi offert et d’une réception, room-service 24h/24.<br/><br/>
        Vous disposez de chambres de 1, 2 et 3 personnes ainsi que des chambres familiales. Nos chambres possèdent une
        salle de bains privative avec toilettes et sèche-cheveux intégrés.<br/><br/>
        Profitez d’un petit-déjeuner, buffet continental qui sera servi dans le salon de l’hôtel au rez-de-chaussée de 6h à 10h
        et de plusieurs restaurants : Le Sesame (situé derrière l’Hôtel Chenal) qui vous accueillent dans un cadre chaleureux
        et unique à Beauvais et d’autres restaurants à proximité de l’hôtel.</p>
        <div class="text-center detail-confort pt-3">
          <h4>CONFORT</h4>
          <img src="assets/images/detail/cross-icon.png" onclick="openConfort()" id="detail-confortIconMore" width="60px" alt="Icone voir plus">
        </div>

        <div id="detail-confortMore" class="container mt-5">

          <div class="row d-flex justify-content-center">
            <div class="col-8 d-flex justify-content-between mx-5">

              <div id="detail-confortMoreWifi" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-wifi.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCircleWifi" >
              </div>

              <div id="detail-confortMoreHairdryer" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-hairdryer.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCircleHairdryer">
              </div>

              <div id="detail-confortMorePhone" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/tel.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCirclePhone">
              </div>

              <div id="detail-confortMoreTv" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-tel.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCircleTv">
              </div>

              <div id="detail-confortMoreParabole" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-parabole.png" width="30px" alt="Icone voir plus" id="detail-confortMoreCircleParabole">
              </div>

              <div id="detail-confortMoreWindows" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-windows.png" width="30px" alt="Icone voir plus" id="detail-confortMoreCircleWindows">
              </div>

            </div>
          </div>

            <div class="mx-5 pl-5 detail-ConfortMoreHoverDescription">
              <p id="detail-confortMoreDescriptionWifi">Wi-fi</p>
              <p id="detail-confortMoreDescriptionHairdryer">Sèche-cheveux</p>
              <p id="detail-confortMoreDescriptionPhone">Téléphone</p>
              <p id="detail-confortMoreDescriptionTv">Télévision</p>
              <p id="detail-confortMoreDescriptionParabole">Satellite</p>
              <p id="detail-confortMoreDescriptionWindows">Double vitrage</p>
            </div>


          </div>
        </div>
  </section>

<section class="position-relative">

  <div class="container-fluid detail-carousel">
    <div class="row">
      <div class="col-lg-11">
        <div class="carousel slide ml-5" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/detail/chambre1.jpg" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
              <img src="assets/images/detail/chambre2.jpg" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
              <img src="assets/images/detail/chambre1.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="detail-carouselDescription bg-white position-absolute detail-boxShadow">
      <h4 class="text-center pt-3">CHENAL HÔTEL</h4>
      <p>63 boulevard du Général de Gaulle<br/>
        60000 Beauvais<br/>
        France<br/>
        tel: +33.3.44.06.04.60<br/>
        hotel-chenal-beauvais.fr </p>

    <div class="detail-accecibiltyPartBgOrange position-absolute d-flex justify-content-center align-items-center">

      <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
        <div class="detail-accecibiltyPartIcon">
          <img src="assets/images/detail/adeux.png" alt="">
        </div>
      </div>


      <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
        <div class="detail-accecibiltyPartIcon">
          <img src="assets/images/detail/entreamis.png" alt="">
        </div>
      </div>

      <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
        <div class="detail-accecibiltyPartIcon">
          <img src="assets/images/detail/enfamille.png" alt="">
        </div>
      </div>

      <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
        <div class="detail-accecibiltyPartIcon">
          <img src="assets/images/detail/atous.png" alt="">
        </div>
      </div>

    </div>
  </div>


  <div class="container detail-price my-5">
    <div class="row">
      <div class="col-lg-8 detail-boxShadow">

        <div class="row mt-3">
          <div class="col-lg-8">
            <h3>CHAMBRE CONFORT</h3>
            <p>Tarif a partir de : 72 €</p>
          </div>
          <div class="col-lg-2">
            <img src="assets/images/detail/chambreconfort.jpg" alt="">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-8">
            <h3>CHAMBRE CONFORT</h3>
            <p>Tarif a partir de : 72 €</p>
          </div>
          <div class="col-lg-2">
            <img src="assets/images/detail/chambre-double.jpg" alt="">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-8">
            <h3>CHAMBRE CONFORT</h3>
            <p>Tarif a partir de : 72 €</p>
          </div>
          <div class="col-lg-2">
            <img src="assets/images/detail/chambrefamilliale.jpg" alt="">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-8">
            <h3>CHAMBRE CONFORT</h3>
            <p>Tarif a partir de : 72 €</p>
          </div>
          <div class="col-lg-2">
            <img src="assets/images/detail/chambremini1.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="container-fluid detail-map p-0">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.0450728391756!2d2.086639816068699!3d49.42696187934733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7012ca4282d53%3A0x12d0fe60af32d183!2s63%20Boulevard%20du%20G%C3%A9n%C3%A9ral%20de%20Gaulle%2C%2060000%20Beauvais!5e0!3m2!1sfr!2sfr!4v1592574094307!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<footer class="container-fluid">
  <div class="row text-white">
    <div class="col-lg-5 px-5 text-center mt-3">
        <img src="assets/images/detail/logo-white.png" width="230px" alt="Logo">
        <div class="row mt-2">
          <div class="offset-2 col-8 d-flex flex-column">
            <p class="text-left">La ville de beauvais situé au coeur de sa régon historique
              la picardie, est célèbre pour sa cathedrale gothique et ses
              illuminations. Notre ville offre de nombreux parcours de
              visite, commerces et sites a visiter.</p>
            </div>
            <div class="button-group mt-2 mx-auto col-lg-7 d-flex flex-column">
              <button type="button" class="bg-transparent text-white btn btn-outline-dark text-uppercase px-5 py-3">nos bureaux informations</button>
              <button type="button" class="bg-transparent text-white btn btn-outline-dark text-uppercase px-5 py-3 mt-5" >nous contactez</button>
            </div>
          </div>
          <p>suivez-nous</p>
    </div>
    <div class="col-lg-2 d-flex flex-column justify-content-center text-center">
      <h5 class="text-uppercase">Laissez vous guidez</h5>
      <p>Consultez nos brochures
          détaillées pour facilter la
          découverte de notre ville</p>

      <img src="assets/images/detail/couverture-flyers.jpg" width="200px" height="300px" class="mx-auto mt-5">
      <button type="button" class="bg-transparent text-white btn btn-outline-dark text-uppercase px-5 py-3 mt-5" name="button">Nos brochures</button>
    </div>
    <div class="col-lg-4 d-flex flex-column justify-content-center p-5 mr-5 mx-auto">
      <button type="button" class="bg-transparent text-white btn btn-outline-dark text-uppercase px-5 py-3 mx-auto" name="button">S'inscrire à la newletter</button>
      <img src="assets/images/detail/carte-beauvais-footer.png" width="500px" height="500px" class="mx-auto mt-5" alt="">
    </div>

  </div>



</footer>

</main>

<?php include 'footer.php' ?>
