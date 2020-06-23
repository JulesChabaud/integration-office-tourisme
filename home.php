<?php include "header.php" ?>
<link rel="stylesheet" href="assets/css/home.css">


<div class="home-megaWrapper">

  <!--Menu-Burger-->



  <!--Carou-Head-->
  <div id="carouselExampleIndicators" class="carousel slide home-carouselHeader" data-ride="carousel">

    <ol class="carousel-indicators home-carouselIndicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active ind-active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5" class="ind-inactive"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item position-relative active">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide1">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide2">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide3">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide4">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide5">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide6">
      </div>
    </div>

  </div>

  <!--Logo-Head-->
  <div class="home-logoBan position-absolute">
    <img src="assets/images/home/Logo-beauvais.png">
  </div>
  <!--Dropdown-Langage-->
  <div class="home-langagePicker position-absolute">
    FR
  </div>

  <!--Mini-Slider-Head-->
  <div id="carouselExampleControls" class="carousel slide home-miniSliderImg position-absolute" data-ride="carousel">
    <div class="carousel-inner home-innerCarouselMiniSlider">
      <div class="carousel-item active">
        <img class="" src="assets/images/home/minislider.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="" src="assets/images/home/minislider.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="" src="assets/images/home/minislider.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev home-miniSliderControlPrev" href="#carouselExampleControls" role="button" data-slide="prev">
      <img class="" aria-hidden="true" src="assets/images/home/fleche-gauche-minislider.png" alt="First slide">
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next home-miniSliderControlNext" href="#carouselExampleControls" role="button" data-slide="next">
      <img class="" aria-hidden="true" src="assets/images/home/fleche-droite-minislider.png" alt="First slide">
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--Box-Covid-->
  <div class="container-fluid home-containerCovid d-flex justify-content-center flex-column text-white">
    <div class="home-textCovid">ATTENTION COVID - 19  -> Retrouvez la listes des hotels et restaurants ouvert  ici</div>
  </div>




  <!--Container-Agenda-->
  <div class="container-fluid home-containerAgenda position-relative">

  <!--Titre-Agenda-->
    <div class="container">
      <div class="row">
        <div class="col-8 ">
          <h2 class="home-titreAgenda">L'AGENDA DE BEAUVAIS</h2>
        </div>
      </div>
    </div>

  <!--Links-Agenda-->
    <div class="container home-catAgenda">
      <div class="row">
        <div class="col-3">
          <a href="#"class="home-listeAgenda">PROCHAINEMENT</a>
        </div>
        <div class="col-3">
          <a href="#"class="home-listeAgenda">LES SEMAINES A VENIR</a>
        </div>
        <div class="col-3">
          <a href="#"class="home-listeAgenda">LES MOIS A VENIR</a>
        </div>
        <div class="col-3">
          <a href="#"class="home-listeAgenda">CALENDRIER</a>
        </div>
      </div>
    </div>

  <!--Image-Agenda-->
    <div class="container home-containerAgendaPhoto">
      <div class="row">
        <div class="col-6">
          <img class="" src="assets/images/home/Marche-artisanal.png" alt="Third slide">
        </div>
      </div>
    </div>

  <!--Carousel-Agenda-->
    <div id="carouselExampleControls2" class="carousel slide home-agendaSlider position-absolute" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="" src="assets/images/home/LA-MALADRERIE-A-LA-LANTERNE.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="" src="assets/images/home/LA-MALADRERIE-A-LA-LANTERNE.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="" src="assets/images/home/LA-MALADRERIE-A-LA-LANTERNE.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev home-agendaSliderControlPrev position-absolute" href="#carouselExampleControls2" role="button" data-slide="prev">
        <img class="carousel-control-next-icon home-carouselControlIconAgenda" aria-hidden="true" src="assets/images/home/fleche-gauche.png" alt="First slide">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next home-agendaSliderControlnext position-absolute" href="#carouselExampleControls2" role="button" data-slide="next">
        <img class="carousel-control-next-icon home-carouselControlIconAgenda" aria-hidden="true" src="assets/images/home/fleche-droite.png" alt="First slide">
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>


  <!--Container-Visit-->
  <div class="home-containerVisite position-relative">

  <!--Categories-Visit-->
      <div class="container home-containerTitreVisite position-absolute">
        <div class="row home-visiteRow1">
          <div class="col-4">
            <img class="home-imgTitle1" src="assets/images/home/cathédrale-de-beauvais.png" alt="First slide">
          </div>
          <div class="col-4 text-white home-txtTitle">
            Horaires de visites, évènements,<br>
            tout savoir sur la cathédrale
          </div>
          <div class="col-4 d-flex justify-content-end">
            <img class="home-imgTitle2" src="assets/images/home/Paris-Beauvais.png" alt="First slide">
          </div>
        </div>
      </div>

  <!--Pseudo-Carousel-Visit-->
      <div class="container-fluid poistion-relative home-containerSlider" >
        <div class="row">
          <div class="col-3">
            <img class="home-imgSlider1" src="assets/images/home/enfant.png" alt="First slide">
          </div>
          <div class="col-6">
            <img class="home-imgSlider2" src="assets/images/home/pluie.png" alt="First slide">
          </div>
          <div class="col-3">
            <img class="home-imgSlider3" src="assets/images/home/2heures.png" alt="First slide">
          </div>
        </div>
      </div>

  </div>

  <!--pseudo-Indicator-Activités-->
  <div class="home-wrapperLogoServices">
    <div class="container home-containerLogoServices">
      <div class="row">
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/shopping-bag.png" alt="First slide">
        </div>
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/logo-enfant.png" alt="First slide">
        </div>
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/umbrella.png" alt="First slide">
        </div>
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/logo-clock.png" alt="First slide">
        </div>
      </div>
    </div>
  </div>


  <!--Pseudo-Acordeon-Forfait-->
  <img class="home-acordeonForfait" src="assets/images/home/part-forfait.png" alt="First slide">


  <!--Share-->
  <div class="home-containerShare">
    <div class="container">
      <div class="row">
        <div class="col-8 home-txtShare text-white">
          Partagez vos plus beaux clichés avec    <span class="home-htVisitBeauvais">#visitbeauvais</span>
        </div>
        <div class="col-4">
          <img class="" src="assets/images/home/logo-rs.png" alt="First slide">
        </div>
      </div>
    </div>
  </div>


  <!--Social-Wall-->
  <div class="home-containerSocialWallInsta d-flex justify-content-center">

    <img class="home-imgSocialWall" src="assets/images/home/social-wall.png" alt="First slide">

  </div>

</div class="home-megaWrapper">


<div class="home-megaWrapperMobile">

  <!--media-queries-->

  <div class="home-mobileContainerHeader">
    <img class="w-100" src="assets/images/home/mobile/image-header-mobile.png" alt="First slide">
  </div>

  <div class="home-mobileContainerCovid text-white">
    <p>INFO COVID - 19</p>
  </div>

  <div class="home-mobileContainerAgenda position-relative">
    <p class="home-mobileTextAgenda1">L'agenda de Beauvais</p>
    <p class="home-mobileTextAgenda2">Les évenements a ne pas rater sur Beauvais</p>
      <div class="d-flex justify-content-center">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/tenture-web.png" alt="First slide">
      </div>
    <p class="home-mobileAgendaDateMois">21 <span class="home-mobileAgendaDateMois">MAI</span> 2020 - 29 <span class="home-mobileAgendaDateMois">MAI</span> 2020</p>
    <p class="home-mobileAgendaSousTitre">LA TENTURE DE L'HISTOIRE<br>FABULEUSE DES GAULES</p>



        <div class="d-flex justify-content-center">
          <img class="home-mobileAgendaFlecheNext" src="assets/images/home/mobile/Fleche-gauche.png" alt="First slide">
          <img class="home-mobileAgendaFlechePrev" src="assets/images/home/mobile/fleche-droite.png" alt="First slide">
        </div>



        <div class=" d-flex justify-content-end">
          <img class="home-mobileAgendaBouton" src="assets/images/home/mobile/tout-lagenda.png" alt="First slide">
        </div>



      <div class="home-mobileContainerActivites">
        <div class="container">
          <div class="row">
            <div class="col-6 d-flex justify-content-center">
              <div class="card-trnsparent" style="width: 40px; height: auto;">
                <img class="card-img-top" src="assets/images/home/mobile/cathedrale.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-white justify-content-center">Catédrale de Beauvais</p>
              </div>
              </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
              <p>Aéroport Paris - Beauvais</p>
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/aeroport.png" alt="First slide">
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-6 d-flex justify-content-center">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/shopping-logo.png" alt="First slide">
              <p>SHOPPING</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
              <p>LES ENFANTS SONT EN VACANCES</p>
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/enfant-logo.png" alt="First slide">
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-6 d-flex justify-content-center">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/umbrella-logo.png" alt="First slide">
              <p>IL PLEUT</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
              <p>J'AI 2 HEURES</p>
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/clock-logo.png" alt="First slide">
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid home-mobileContainerForfaits1">
        <p class="text-white home-mobileTextForfaits">NOS FORFAITS GROUPES</p>
      </div>

      <div class="container-fluid home-mobileContainerForfaits2">
        <p class="text-white home-mobileTextForfaits">NOS IDEES WEEK-END</p>
      </div>

      <div class="d-flex justify-content-center home-mobileHotelImg1">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/massage.png" alt="First slide">
      </div>
      <div class="d-flex justify-content-center">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/massage.png" alt="First slide">
      </div>


      <div class="d-flex justify-content-center home-mobileHotelImg2">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/hotel-room.png" alt="First slide">
      </div>
      <div class="d-flex justify-content-center">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/massage.png" alt="First slide">
      </div>


  </div>

<?php include "footer.php" ?>
