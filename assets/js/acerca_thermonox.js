// Set slide index to one and shows first image
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

//Shows current image
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slideshow_image_container"); //Gets the  slides of the image container
  if (n > slides.length) {slideIndex = 1} //If the index is greater than the total number of slides, the index is reset to one
  if (n < 1) {slideIndex = slides.length} //If the index is smaller than 1, the index is set to the last slide
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; //Hiddes all images except image corresponding to current index
  }

  slides[slideIndex-1].style.display = "block";

}

//Set the timer for autoplay
window.onload= function () {
  setInterval(function(){ 
      plusSlides(1);
  }, 3000);
}