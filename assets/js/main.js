import $ from 'jquery';
import runtime from 'offline-plugin/runtime';
import 'semantic-ui/dist/semantic.js';
import 'semantic-ui/dist/semantic.css';
import './jquery.sticklr.dark.css';
import './font.quicksand.css';
import './jquery.jssor.css';
import './jquery.jssor.min.js';
import './jquery.sticklr.js';
import './img/demo-2.jpg';
import './img/demo-5.jpg';

runtime.install();

$('iframe').remove();
var sliderOptions = {
  $AutoPlay: 1,
  $AutoPlaySteps: 4,
  $SlideDuration: 12000,
  $SlideWidth: 200,
  $SlideSpacing: 3,
  $Cols: 5,
  $Align: 390,
  $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$,
    $Steps: 5
  },
  $BulletNavigatorOptions: {
    $Class: $JssorBulletNavigator$
  }
};
var slider1 = new $JssorSlider$("slider-bottom", sliderOptions);
/*#region responsive code begin*/
var win_width = $(window).width();
var win_height = $(window).height();
var MAX_WIDTH = (win_height < win_width) ? win_width : win_height;

function ScaleSlider1() {
  var containerElement = slider1.$Elmt.parentNode;
  var containerWidth = containerElement.clientWidth;
  if (containerWidth) {
    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
    slider1.$ScaleWidth(expectedWidth);
  } else {
    window.setTimeout(ScaleSlider1, 30);
  }
}
ScaleSlider1();
$(window).bind("load", ScaleSlider1);
$(window).bind("resize", ScaleSlider1);
$(window).bind("orientationchange", ScaleSlider1);
/*#endregion responsive code end*/
var slideshowTransitions = [{
  $Duration: 5000,
  $Opacity: 2
}];
var options = {
  $AutoPlay: 1,
  $SlideshowOptions: {
    $Class: $JssorSlideshowRunner$,
    $Transitions: slideshowTransitions,
    $TransitionsOrder: 1
  },
  $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$
  },
  $BulletNavigatorOptions: {
    $Class: $JssorBulletNavigator$
  }
};
var slider = new $JssorSlider$("slider-top", options);
/*#region responsive code begin*/
var win_width = $(window).width();
var win_height = $(window).height();
var MAX_WIDTH = (win_height < win_width) ? win_width : win_height;

function ScaleSlider() {
  var containerElement = slider.$Elmt.parentNode;
  var containerWidth = containerElement.clientWidth;
  if (containerWidth) {
    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
    slider.$ScaleWidth(expectedWidth);
  } else {
    window.setTimeout(ScaleSlider, 30);
  }
}
ScaleSlider();
$(window).bind("load", ScaleSlider);
$(window).bind("resize", ScaleSlider);
$(window).bind("orientationchange", ScaleSlider);
/*#endregion responsive code end*/

$(".ui.embed").embed();
$('.menu .item').tab();
$('.ui.rating').rating('disable');
$('.ui.dropdown').dropdown({
  on: 'hover'
});
$('.image img').visibility({
  type: 'image',
  transition: 'fade in',
  duration: 1000
});
$('nav').sticky({
  offset: 0,
  context: '#context',
  silent: true
});
if (/Android|BlackBerry|iPhone|iPad|iPod|webOS/i.test(navigator.userAgent) === false) {
  $('#example-1').sticklr({
    showOn: 'hover',
    stickTo: 'right',
  });
} //run sticklr, not a mobile device
else {
  $('.toggle.button').click(function() {
    $('.ui.sidebar').sidebar('toggle');
  });
} //mobile device, initialise sidebar instead
