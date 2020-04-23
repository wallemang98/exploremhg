  var slideIndex = 0;
function showSlides() {
  var slides = [
              'slide1',
              'slide2',
              'slide3',
              'slide4',
          ];
    var i;
    for(i = 0; i < slides.length; i++) {
        $("#slideshow").removeClass("slide" + (i+1));
    } //closing fore

    slideIndex++;
    if(slideIndex > slides.length) {slideIndex = 1;}
    $("#slideshow").addClass("slide" + slideIndex);

    setTimeout(showSlides, 12000); //change image every 12secs
} //closing showSlides()

function remove(z) {
    $("#slideshow").removeClass("slide" + (z+1));
}

//function fadeSlides() {
//    var i;
//    for(i = 0; i < slides.length; i++) {
//        setTimeout(remove(i), 2000);
//
//        $("#slideshow").fadeOut();
//
//        console.log("fading out slide" + (i+1) );
//    }
//
//    slideIndex++;
//
//    if(slideIndex > slides.length) {slideIndex = 1;}
//
//    setTimeout($("#slideshow").fadeIn(), 3000);
//    $("#slideshow").addClass("slide" + slideIndex);
//    console.log("fading in slide " + "slide" + slideIndex + " to slideshow");
//
//    setTimeout(fadeSlides, 12000); //change image every 10secs
//}
//functions running
showSlides();

//fadeSlides();
