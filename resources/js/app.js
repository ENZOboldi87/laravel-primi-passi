require('./bootstrap');
import 'bootstrap';

var $ = require('jquery');
var answer = $('.answer');

$(document).ready(function() {

  $(document).on('click', '.faq_question', function() {
    $(this).find("#icon").toggleClass("fa-minus");

    $(this).find('.answer').toggleClass('d-block');

  });


});
