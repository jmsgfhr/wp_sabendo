var slideIndex = 0;
var tick;
showCaseSlides();

function currentCaseSlide(n) {
  showSlides(slideIndex = n-1);
}

function showCaseSlides() {
  clearTimeout(tick);
  var i;
  var slides = document.getElementsByClassName("caseSlide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "flex";
  tick = setTimeout(showCaseSlides, 20000); // Change image every 5 seconds
}