let navbar = document.querySelector('.navbar');



document.querySelector('#menu-btn').onclick = () => {

    navbar.classList.toggle('active');

}



window.onscroll = () => {

    navbar.classList.remove('active');

}



let slides = document.querySelectorAll('.home .slides-container .slide');

let index = 0;



function next(){

    slides[index].classList.remove('active');

    index = (index + 1) % slides.length;

    slides[index].classList.add('active');

}



function prev(){

    slides[index].classList.remove('active');

    index = (index - 1 + slides.length) % slides.length;

    slides[index].classList.add('active');

}





// ////////////////////////////

$(document).ready(function() {

    $('.color-choose input').on('click', function() {
        var headphonesColor = $(this).attr('data-image');
  
        $('.active').removeClass('active');
        $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
        $(this).addClass('active');
    });
  
  });









//   /////////////////////search icon /////////////////////////
var selected = false;
function searchClicked(){
    if (selected){
        $(".search-result-input").css("width","50px");
        $(".search-icon").css({"border-bottom-left-radius":"50%","border-top-left-radius":"50%"});
        $(".Expandable-Search").css("width","50px");
        selected = false;
    }else{
        $(".search-result-input").css("width","100%");
        $(".search-icon").css({"border-bottom-left-radius":"0px","border-top-left-radius":"0px"});
        $(".Expandable-Search").css("width","200px");
        selected = true;
    }

}