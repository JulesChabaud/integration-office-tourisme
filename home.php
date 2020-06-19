<?php include "header.php" ?>
<link rel="stylesheet" href="assets/css/home.css">


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

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


<div class="home-logoBan position-absolute">
  <img src="assets/images/home/Logo-beauvais.png">
</div>

<div class="home-langagePicker position-absolute">
  FR
</div>



<div class="container-fluid container-covid d-flex justify-content-center flex-column text-white">
  <div class="home-textCovid">ATTENTION COVID - 19  -> Retrouvez la listes des hotels et restaurants ouvert  ici</div>
</div>



<div id="carouselExampleControls" class="carousel slide home-miniSliderImg position-absolute" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="" src="assets/images/home/tructruc.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="" src="assets/images/home/tructruc.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="" src="assets/images/home/tructruc.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev home-miniSliderControlPrev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next home-miniSliderControlnext" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container-fluid home-containerAgenda">

  <div class="container">
    <div class="row">
      <div class="col-8 ">
        <h2 class="home-titreAgenda">L'AGENDA DE BEAUVAIS</h2>
      </div>
    </div>
  </div>


  <div class="container home-catAgenda">
    <div class="row">
      <div class="col-3">
        <h3><span class="home-AgendaLettre1">P</span>ROCHAINEMENT</h3>
      </div>
      <div class="col-3">
        <h3><span class="home-AgendaLettre1">L</span>ES SEMAINES A VENIR</h3>
      </div>
      <div class="col-3">
        <h3><span class="home-AgendaLettre1">L</span>ES MOIS A VENIR</h3>
      </div>
      <div class="col-3">
        <h3><span class="home-AgendaLettre1">C</span>ALENDRIER</h3>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-6">
        <img class="" src="assets/images/home/Marche-artisanal.png" alt="Third slide">
      </div>
    </div>
  </div>


</div>






<?php include "footer.php" ?>
