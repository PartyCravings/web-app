import $ from 'jquery';
import 'semantic-ui/dist/semantic.min.css';
import 'semantic-ui/dist/semantic.min.js';


$("img.lazy").lazyload({
  effect: "fadeIn"
});
$(".ui.embed").embed();
$('.menu .item').tab();
$('.ui.dropdown').dropdown({
  on: 'hover'
});
$('#navigation').sticky({
  offset: 0,
  context: '#context'
});
$(document).ready(function () {
  $('#example-1').sticklr({
    showOn: 'hover',
    stickTo: 'right'
  });
});