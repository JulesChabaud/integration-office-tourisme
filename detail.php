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
  <div class="detail-banner"></div>

</header>

<main>
</main>

<?php include 'footer.php' ?>
