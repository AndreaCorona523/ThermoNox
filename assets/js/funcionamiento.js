// Set slide index to one and shows first paragraph
var slideIndex = 1;
showSlides(slideIndex);

// Set slide index to one and shows first paragraph
var textIndex = 0;
showText(textIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

//Shows current slide when dot is clicked
function currentSlide(n) {
  showSlides(slideIndex = n);
}

//Shows current slide
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("characteristic_slide"); //Gets the slide container
  var dots = document.getElementsByClassName("dot"); //Gets the dot component
  if (n > slides.length) {slideIndex = 1} //If the index is greater than the total number of slides, the index is reset to one
    if (n < 1) {slideIndex = slides.length} //If the index is smaller than 1, the index is set to the last slide
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; //Hiddes all slides except image corresponding to current index
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", ""); //Changes dot color depending on the index
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


//Shows current text
function showText(n) {
  	var j;
  	var texts = document.getElementsByClassName("characteristics_functioning_table_text"); //Gets the texts of the table
  	var buttons = document.getElementsByClassName("characteristics_functioning_td"); //Gets the td containers of the buttons of the tables
  	
	for (j = 0; j < texts.length; j++) {
		//if the index of the element is the same as the number received, it shows the text and adds the class corresponding to a selected button
		//it hides the other texts and removes the class corresponding to a selected button
		if (j == n){
			texts[j].style.display = "block"; 
			buttons[j].className = buttons[j].className.replace("characteristics_functioning_td", "characteristics_functioning_td characteristics_functioning_selected_td");
		}else{
			texts[j].style.display = "none";
			buttons[j].className = buttons[j].className.replace("characteristics_functioning_td characteristics_functioning_selected_td", "characteristics_functioning_td");
			
		}
	}
}

