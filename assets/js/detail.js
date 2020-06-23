
function openBurgerMenu() {
  document.getElementById('detail-burgerMenu').style.display = 'none';
  document.getElementById('detail-burgerMenuDropDown').style.display = 'block';
}

function closeBurgerMenu() {
  document.getElementById('detail-burgerMenu').style.display = 'block';
  document.getElementById('detail-burgerMenuDropDown').style.display = 'none';
}

function openConfort() {
  document.getElementById('detail-confortMoreDropDown').style.display = 'block';
  document.getElementById('detail-confortIconMore').style.display = 'none';
  document.getElementById('detail-description').style.height = '900px';
}

/* WIFI */
document.getElementById('detail-confortMoreWifi').addEventListener("mouseover", function( event ) {
  document.getElementById('detail-confortMoreCircleWifi').style.display = "none";
  document.getElementById('detail-confortMoreDescriptionWifi').style.display = "block";

});
document.getElementById('detail-confortMoreWifi').addEventListener("mouseleave", function( event ) {
  document.getElementById('detail-confortMoreCircleWifi').style.display = "block";
  document.getElementById('detail-confortMoreDescriptionWifi').style.display = "none";
});


/* HAIRDRYER */
document.getElementById('detail-confortMoreHairdryer').addEventListener("mouseover", function( event ) {
  document.getElementById('detail-confortMoreCircleHairdryer').style.display = "none";
  document.getElementById('detail-confortMoreDescriptionHairdryer').style.display = "block";

});
document.getElementById('detail-confortMoreHairdryer').addEventListener("mouseleave", function( event ) {
  document.getElementById('detail-confortMoreCircleHairdryer').style.display = "block";
  document.getElementById('detail-confortMoreDescriptionHairdryer').style.display = "none";
});

/* PHONE */
document.getElementById('detail-confortMorePhone').addEventListener("mouseover", function( event ) {
  document.getElementById('detail-confortMoreCirclePhone').style.display = "none";
  document.getElementById('detail-confortMoreDescriptionPhone').style.display = "block";

});
document.getElementById('detail-confortMorePhone').addEventListener("mouseleave", function( event ) {
  document.getElementById('detail-confortMoreCirclePhone').style.display = "block";
  document.getElementById('detail-confortMoreDescriptionPhone').style.display = "none";
});

/* TV */
document.getElementById('detail-confortMoreTv').addEventListener("mouseover", function( event ) {
  document.getElementById('detail-confortMoreCircleTv').style.display = "none";
  document.getElementById('detail-confortMoreDescriptionTv').style.display = "block";

});
document.getElementById('detail-confortMoreTv').addEventListener("mouseleave", function( event ) {
  document.getElementById('detail-confortMoreCircleTv').style.display = "block";
  document.getElementById('detail-confortMoreDescriptionTv').style.display = "none";
});

/* PARABOLE */
document.getElementById('detail-confortMoreParabole').addEventListener("mouseover", function( event ) {
  document.getElementById('detail-confortMoreCircleParabole').style.display = "none";
  document.getElementById('detail-confortMoreDescriptionParabole').style.display = "block";

});
document.getElementById('detail-confortMoreParabole').addEventListener("mouseleave", function( event ) {
  document.getElementById('detail-confortMoreCircleParabole').style.display = "block";
  document.getElementById('detail-confortMoreDescriptionParabole').style.display = "none";
});

/* WINDOWS */
document.getElementById('detail-confortMoreWindows').addEventListener("mouseover", function( event ) {
  document.getElementById('detail-confortMoreCircleWindows').style.display = "none";
  document.getElementById('detail-confortMoreDescriptionWindows').style.display = "block";

});
document.getElementById('detail-confortMoreWindows').addEventListener("mouseleave", function( event ) {
  document.getElementById('detail-confortMoreCircleWindows').style.display = "block";
  document.getElementById('detail-confortMoreDescriptionWindows').style.display = "none";
});

$(document).ready(function(){
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("detail-banner");
  var modalImg = document.getElementById("img01");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
});
