<?php include "header.php" ?>
<link rel="stylesheet" href="assets/css/text.css">

<!--SECTION NAVBAR -->
<div id="detail-burgerMenu">
  <nav class="navbar navbar-light bg-white d-flex align-items-start justify-content-between">
    <img src="assets/images/detail/burger-menu.png" alt="Burger menu" class="pl-4 pt-5" onclick="openBurgerMenu()"/>
    <div class="">
      <h1 class="text-uppercase text-h1">Aeroport Paris-Beauvais</h1>
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




<!-- SECTION BANNER -->
  <header class="text-header">
    <div class="text-imgBanner">
      <img class="text-imgBgBanner" src="assets/images/text/page_paris_beauvais.jpg" alt="image avion"/>
      <div class="container-fluid text-containerBanner">
        <div class="row">
          <div class="col-lg-6">
            <p>Situé sur la commune de Tillé, à 2km au Nord de Beauvais et à environ 70km de Paris.</p>
            <p>Avec plus de 60 destinations</p>
            <input class="text-buttonDecouvrir text-uppercase py-2" type="button" value="Découvrir">
          </div>
          <div class="col-lg-6 text-iconSocialMedia">
            <a href="#"><img src="assets/images/text/icon-facebook.png" alt="icone facebook"/></a>
            <a href="#"><img src="assets/images/text/icon-google-+.png" alt="icone google"/></a>
            <a href="#"><img src="assets/images/text/icon-twitter.png" alt="icone twitter"/></a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-breadcrumbs">
      <a href="#"><h3 class="text-uppercase text-fontOrange"><span class="font-weight-bold">A</span>ccueil ></h3></a>
      <a href="#"><h3 class="text-uppercase text-fontOrange"><span class="font-weight-bold">A</span>éroport de Paris Beauvais ></h3></a>
      <a href="#"><h3 class="text-uppercase text-fontBlack"><span class="font-weight-bold">P</span>aris Beauvais</h3></a>
    </div>
  </header>

<!-- SECTION SERVICE -->
  <section>

    <div class="text-titleServices">
      <h2 class="text-uppercase"><span class="text-fontPurple">Les services <br></span><span class="text-fontWhite">de l'aéroport</span></h2>
      <img class="text-iconRestau" src="assets/images/text/text-iconRestauServices.png" alt="icone restaurant"/>
    </div>

    <div class="container-fluid text-imgServices">
      <div class="row">
        <div class="col-lg-6 p-0">
          <img src="assets/images/text/services-sandwich.jpg" alt="image comptoir sandwich"/>
        </div>
        <div class="col-lg-6 p-0">
          <img src="assets/images/text/services-vin.jpg" alt="image magasin vin"/>
        </div>
      </div>
    </div>

    <div class="text-encadreText">
      <p>Un aéroport est une mini ville et ce n'est pas l'Aéroport de Paris-Beauvais qui vous montrera l'inverse. Chacun de ses deux terminaux vous proposera des boutiques, des restaurants, des snacks de quoi acheter des souvenirs ou combler votre faim.</p>
    </div>

    <div class="text-infoWifiAtm">
      <div class="text-wifi">
        <img class="text-servicesWifiIcon" src="assets/images/text/text-iconWifi.png" alt="icon wifi"/>
        <p>Vous n'avez pas envie de vous balader en attendant votre avion, profitez alors de ses nombreux sièges ainsi que du Wifi gratuit et illimité !</p>
      </div>
      <div class="text-atm">
        <img class="text-servicesWifiIcon" src="assets/images/text/text-iconAtm.png" alt="icon atm"/>
        <p>Votre destination est l'Angleterre, la Hongrie ou la Pologne, vous n'avez pas eu le temps de changer votre monnaie, pas de panique le distributeur automatique au terminal 2 convertira votre monnaie dans la devise étrangère souhaitée.</p>
      </div>
    </div>

    <div class="text-etInfo">
      <div class="text-symboleEt">
        <img src="assets/images/text/text-iconEt.png" alt="icone Et"/>
      </div>
      <div class="text-infoText">
        <p>Pleins d'autres services seront à votre disposition !</p>
      </div>
    </div>

  </section>

<!-- SECTION TRANSPORT -->
  <section class="text-transport">
    <div class="text-titleTransport">
      <img class="text-iconTransport" src="assets/images/text/text-iconTransport.png" alt="icone transport"/>
      <h2 class="text-uppercase font-weight-bold"><span class="text-fontPurple">Comment s'y rendre<br></span><span class="text-fontWhite">/ se déplacer ?</span></h2>
    </div>



  </section>











<?php include "footer.php" ?>
