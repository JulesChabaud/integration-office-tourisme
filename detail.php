<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/detail.css">

<header>

  <div id="burgerMenu">
    <nav class="navbar navbar-light bg-white d-flex align-items-start justify-content-between">
      <img src="assets/images/detail/burger-menu.png" alt="Burger menu" class="pl-4 pt-4" onclick="openBurgerMenu()"/>
      <div class="detail-title text-center">
        <h1>CHENAL HOTEL</h1>
        <p class="detail-titleStar">***</p>
        <p><a href="#">Accueil</a> > <a href="#">Séjourner</a> > <a href="#">Hotels</a> > <a href="#">Chenal Hotel</a></p>
      </div>
      <img src="assets/images/detail/logo.png" alt="Logo">
    </nav>
  </div>

  <div id="burgerMenuDropDown">
    <img src="assets/images/detail/burger-menu-white.png" class="pt-5 pl-5" alt="Burger menu" onclick="closeBurgerMenu()"/>

    <div class="container">
      <div class="d-flex justify-content-center">
        <img src="assets/images/detail/logo-white.png" width="250px" alt="Logo">
      </div>
      <div class="row">

        <div class="col-lg-11">
          <h2>Séjourner</h2>
          <h2 class="pt-4">Manger</h2>
          <h2 class="pt-4">Idée Week-end</h2>
          <h2 class="pt-4">Carte intéractive</h2>
          <h2 class="pt-4">Groupe</h2>
          <h2 class="pt-4">Pratique</h2>
          <h2 class="pt-4">Boutique en ligne</h2>
          <h2 class="pt-4">Découvrir</h2>
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

<main>
  <div class="d-flex justify-content-center">
    <div class="container detail-description">
      <h2 class="text-center">CHENAL HOTEL</h2>
      <p class="detail-titleStar text-center mt-2">***</p>
      <p class="p-5">L’Hôtel Le Chenal*** vous reçoit chaleureusement à Beauvais, dans le département de l’Oise.
        Idéalement situé en centre ville de Beauvais, vous disposez d’un arrêt “Navette Aéroport Beauvais-Tillé” à proximité.
        Notre hôtel est composé de 28 chambres, équipées de TV grand écran LCD avec Canal Satellite, la TNT, RMC Sport,
        BBC, TVE… ainsi qu’un accès wifi offert et d’une réception, room-service 24h/24.
        Vous disposez de chambres de 1, 2 et 3 personnes ainsi que des chambres familiales. Nos chambres possèdent une
        salle de bains privative avec toilettes et sèche-cheveux intégrés.
        Profitez d’un petit-déjeuner, buffet continental qui sera servi dans le salon de l’hôtel au rez-de-chaussée de 6h à 10h
        et de plusieurs restaurants : Le Sesame (situé derrière l’Hôtel Chenal) qui vous accueillent dans un cadre chaleureux
        et unique à Beauvais et d’autres restaurants à proximité de l’hôtel.</p>
        <div class="text-center">
          <h4>CONFORT</h4>
          <img src="assets/images/detail/cross-icon.png" width="50px" alt="Icone voir plus">
        </div>
    </div>
  </div>

<div class="position-relative">

<div class="container-fluid detail-carousel">
  <div class="row">
    <div class="col-lg-11">
      <div class="carousel slide ml-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/images/detail/chambre1.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="assets/images/detail/chambre2.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="assets/images/detail/chambre1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="detail-carouselDescription bg-white position-absolute">
      <h4 class="text-center pt-3">CHENAL HOTEL</h4>
      <p class="p-5">63 boulevard du Général de Gaulle<br/>
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
</div>


  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div>
          <h3>CHAMBRE CONFORT</h3>
          <p>Tarif a partir de : 72 €</p>
          <img src="assets/images/detail/chambreconfort.jpg" alt="">
        </div>
        <div>
          <h3>CHAMBRE SUPERIEUR</h3>
          <p>Tarif a partir de : 72 €</p>
          <img src="assets/images/detail/chambreconfort.jpg" alt="">
        </div>
        <div>
          <h3>CHAMBRE FAMILIALE</h3>
          <p>Tarif a partir de : 72 €</p>
          <img src="assets/images/detail/chambrefamiliale.jpg" alt="">
        </div>
        <div>
          <h3>CHAMBRE CONFORT</h3>
          <p>Tarif a partir de : 72 €</p>
          <img src="assets/images/detail/chambreconfort.jpg" alt="">
        </div>
      </div>
    </div>
  </div>










</main>

<?php include 'footer.php' ?>
