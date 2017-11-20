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
