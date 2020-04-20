$(document).ready(function(){

  if ($(window).width() < 768) {
     $('nav').hide();
  } else {
     $('.main-nav').show();
  }

$('.lessons-dropdown').hide();

  $('.toggle').click(function(){
    $('.main-nav').slideToggle();
  })

  $('.lessons-toggle').click(function(){
    $('.lessons-dropdown').slideToggle();
  })

  $('.lessons-toggle').focusout(function(){
    $('.lessons-dropdown').slideUp();
  })


});
