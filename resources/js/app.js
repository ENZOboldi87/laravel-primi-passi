require('./bootstrap');
import 'bootstrap';

var $ = require('jquery');


$(document).ready(function() {

  $(document).on('click', '.faq_question.left', function() {
    $(this).toggleClass('active');
    $(this).find('#icon').toggleClass('fa-plus fa-minus');
    $(this).find('.answer').toggleClass('selected');
    $('.faq_question.right').removeClass('active');
    $('.faq_question.right').find('.answer').removeClass('selected');
    if ($('.faq_question.left').hasClass('active')) {
      $(this).siblings().removeClass('active');
      $(this).siblings().find('.answer').removeClass('selected');
      $(this).siblings().find('#icon').removeClass('fa-minus');
      $(this).siblings().find('#icon').addClass('fa-plus');
      $('.faq_question.right').find('#icon').removeClass('fa-minus');
      $('.faq_question.right').find('#icon').addClass('fa-plus');
    }
  });

  $(document).on('click', '.faq_question.right', function() {
      $(this).toggleClass('active');
      $(this).find('#icon').toggleClass('fa-plus fa-minus');
      $(this).find('.answer').toggleClass('selected');
      $('.faq_question.left').removeClass('active');
      $('.faq_question.left').find('.answer').removeClass('selected');
      if ($('.faq_question.right').hasClass('active')) {
        $(this).siblings().removeClass('active');
        $(this).siblings().find('.answer').removeClass('selected');
        $(this).siblings().find('#icon').removeClass('fa-minus');
        $(this).siblings().find('#icon').addClass('fa-plus');
        $('.faq_question.left').find('#icon').removeClass('fa-minus');
        $('.faq_question.left').find('#icon').addClass('fa-plus');
      }



  });

});


$('.navbar-nav .nav-item').click(function() {
  $('.navbar-nav .nav-item.active').removeClass('active');
});
