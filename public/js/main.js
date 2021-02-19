// function ibg(){

//     $.each($('.ibg'), function(index, val) {
//     if($(this).find('img').length>0){
//     $(this).css('background-image','url("'+$(this).find('img').attr('src')+'")');
//     }
//     });
//     }
    
// ibg();


function ibg(){
    let ibg=document.querySelectorAll(".ibg");
    for (var i = 0; i < ibg.length; i++) {
        if(ibg[i].querySelector('img')){
            ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
        }
    }
}

ibg();

//adaptive menu function
$(document).ready(function(){
    $('.menu__btn').click(function(event){
        $('.header__list').addClass('active');
        $('body').addClass('lock');
    });
    $('.close__btn').click(function(event){
        $('.header__list').removeClass('active');
        $('body').removeClass('lock');
    });
    $('.menu__item').click(function(event){
        $('.header__list').removeClass('active');
        $('body').toggleClass('lock');
    });
});
//adaptive menu function enвы



//pop-up form function
$(document).ready(function(){
    $('.header__booking').click(function(event){
        $('.header__form').addClass('pop');
    });
});
$(document).ready(function(){
    $('.form__close').click(function(event){
        $('.header__form').removeClass('pop');
    });
});
//pop-up form function




//tabs lifehack
$(document).ready(function(){
    $('.tabs__item').click(function(event){
        $('.tabs__block').removeClass('showed');
    });
   
});




//////slick
$(document).ready(function(){
    $('.tabs__slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false
    });
  });






  
