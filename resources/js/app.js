require('./bootstrap');
import 'bootstrap';

var $ = require('jquery');
var answer = $('.answer');

$(document).ready(function() {
  answer.hide();

  $(".fa-plus").on("toggleClass", function(){
  answer.show();
});

});
