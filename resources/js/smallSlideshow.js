  var smallSlideIndex = 0;
function showSmallSlides() {

  var slides = [
              'slide1',
              'slide2',
              'slide3',
              'slide4',
          ];
    var i;
    for(i = 0; i < slides.length; i++) {
        $("#smallSlideshow").removeClass("slide" + (i+1));
    } //closing for

    smallSlideIndex++;
    if(smallSlideIndex > slides.length) {smallSlideIndex = 1;}
    $("#smallSlideshow").addClass("slide" + smallSlideIndex);
    

    setTimeout(showSmallSlides, 12000); //change image every 12secs
} //closing showSmallSlides()

showSmallSlides();
