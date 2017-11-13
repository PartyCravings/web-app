/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/home.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/home.js":
/*!***************************!*\
  !*** ./assets/js/home.js ***!
  \***************************/
/*! no static exports found */
/*! all exports used */
/***/ (function(module, exports) {

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
var MAX_WIDTH = win_height < win_width ? win_width : win_height;

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
var MAX_WIDTH = win_height < win_width ? win_width : win_height;

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
$('img.lazy').visibility({
  type: 'image',
  transition: 'fade in',
  duration: 300
});
$('header').visibility({
  type: 'fixed'
});
if (/Android|BlackBerry|iPhone|iPad|iPod|webOS/i.test(navigator.userAgent) === false) {
  $('#example-1').sticklr({
    showOn: 'hover',
    stickTo: 'right'
  });
} //run sticklr, not a mobile device
else {
    $('.toggle.button').click(function () {
      $('.ui.sidebar').sidebar('toggle');
    });
  } //mobile device, initialise sidebar instead

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgZGM5YjM4ZjgzYzQ0MmU2OGE3OTciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2hvbWUuanMiXSwibmFtZXMiOlsic2xpZGVyT3B0aW9ucyIsIiRBdXRvUGxheSIsIiRBdXRvUGxheVN0ZXBzIiwiJFNsaWRlRHVyYXRpb24iLCIkU2xpZGVXaWR0aCIsIiRTbGlkZVNwYWNpbmciLCIkQ29scyIsIiRBbGlnbiIsIiRBcnJvd05hdmlnYXRvck9wdGlvbnMiLCIkQ2xhc3MiLCIkSnNzb3JBcnJvd05hdmlnYXRvciQiLCIkU3RlcHMiLCIkQnVsbGV0TmF2aWdhdG9yT3B0aW9ucyIsIiRKc3NvckJ1bGxldE5hdmlnYXRvciQiLCJzbGlkZXIxIiwiJEpzc29yU2xpZGVyJCIsIndpbl93aWR0aCIsIiQiLCJ3aW5kb3ciLCJ3aWR0aCIsIndpbl9oZWlnaHQiLCJoZWlnaHQiLCJNQVhfV0lEVEgiLCJTY2FsZVNsaWRlcjEiLCJjb250YWluZXJFbGVtZW50IiwiJEVsbXQiLCJwYXJlbnROb2RlIiwiY29udGFpbmVyV2lkdGgiLCJjbGllbnRXaWR0aCIsImV4cGVjdGVkV2lkdGgiLCJNYXRoIiwibWluIiwiJFNjYWxlV2lkdGgiLCJzZXRUaW1lb3V0IiwiYmluZCIsInNsaWRlc2hvd1RyYW5zaXRpb25zIiwiJER1cmF0aW9uIiwiJE9wYWNpdHkiLCJvcHRpb25zIiwiJFNsaWRlc2hvd09wdGlvbnMiLCIkSnNzb3JTbGlkZXNob3dSdW5uZXIkIiwiJFRyYW5zaXRpb25zIiwiJFRyYW5zaXRpb25zT3JkZXIiLCJzbGlkZXIiLCJTY2FsZVNsaWRlciIsImVtYmVkIiwidGFiIiwicmF0aW5nIiwiZHJvcGRvd24iLCJvbiIsInZpc2liaWxpdHkiLCJ0eXBlIiwidHJhbnNpdGlvbiIsImR1cmF0aW9uIiwidGVzdCIsIm5hdmlnYXRvciIsInVzZXJBZ2VudCIsInN0aWNrbHIiLCJzaG93T24iLCJzdGlja1RvIiwiY2xpY2siLCJz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VztBQUNuQzNDLFFBQUUsYUFBRixFQUFpQjRDLE9BQWpCLENBQXlCLFFBQXpCO0FBQ0QsS0FGRDtBQUdELEcsQ0FBQywyQyIsImZpbGUiOiJob21lLjdlYmE1ZDIxZDA4NTA4ZmEyMWQ0LmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiL2J1aWxkL1wiO1xuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IFwiLi9hc3NldHMvanMvaG9tZS5qc1wiKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCBkYzliMzhmODNjNDQyZTY4YTc5NyIsInZhciBzbGlkZXJPcHRpb25zID0ge1xuICAkQXV0b1BsYXk6IDEsXG4gICRBdXRvUGxheVN0ZXBzOiA0LFxuICAkU2xpZGVEdXJhdGlvbjogMTIwMDAsXG4gICRTbGlkZVdpZHRoOiAyMDAsXG4gICRTbGlkZVNwYWNpbmc6IDMsXG4gICRDb2xzOiA1LFxuICAkQWxpZ246IDM5MCxcbiAgJEFycm93TmF2aWdhdG9yT3B0aW9uczoge1xuICAgICRDbGFzczogJEpzc29yQXJyb3dOYXZpZ2F0b3IkLFxuICAgICRTdGVwczogNVxuICB9LFxuICAkQnVsbGV0TmF2aWdhdG9yT3B0aW9uczoge1xuICAgICRDbGFzczogJEpzc29yQnVsbGV0TmF2aWdhdG9yJFxuICB9XG59O1xudmFyIHNsaWRlcjEgPSBuZXcgJEpzc29yU2xpZGVyJChcInNsaWRlci1ib3R0b21cIiwgc2xpZGVyT3B0aW9ucyk7XG4vKiNyZWdpb24gcmVzcG9uc2l2ZSBjb2RlIGJlZ2luKi9cbnZhciB3aW5fd2lkdGggPSAkKHdpbmRvdykud2lkdGgoKTtcbnZhciB3aW5faGVpZ2h0ID0gJCh3aW5kb3cpLmhlaWdodCgpO1xudmFyIE1BWF9XSURUSCA9ICh3aW5faGVpZ2h0IDwgd2luX3dpZHRoKSA/IHdpbl93aWR0aCA6IHdpbl9oZWlnaHQ7XG5cbmZ1bmN0aW9uIFNjYWxlU2xpZGVyMSgpIHtcbiAgdmFyIGNvbnRhaW5lckVsZW1lbnQgPSBzbGlkZXIxLiRFbG10LnBhcmVudE5vZGU7XG4gIHZhciBjb250YWluZXJXaWR0aCA9IGNvbnRhaW5lckVsZW1lbnQuY2xpZW50V2lkdGg7XG4gIGlmIChjb250YWluZXJXaWR0aCkge1xuICAgIHZhciBleHBlY3RlZFdpZHRoID0gTWF0aC5taW4oTUFYX1dJRFRIIHx8IGNvbnRhaW5lcldpZHRoLCBjb250YWluZXJXaWR0aCk7XG4gICAgc2xpZGVyMS4kU2NhbGVXaWR0aChleHBlY3RlZFdpZHRoKTtcbiAgfSBlbHNlIHtcbiAgICB3aW5kb3cuc2V0VGltZW91dChTY2FsZVNsaWRlcjEsIDMwKTtcbiAgfVxufVxuU2NhbGVTbGlkZXIxKCk7XG4kKHdpbmRvdykuYmluZChcImxvYWRcIiwgU2NhbGVTbGlkZXIxKTtcbiQod2luZG93KS5iaW5kKFwicmVzaXplXCIsIFNjYWxlU2xpZGVyMSk7XG4kKHdpbmRvdykuYmluZChcIm9yaWVudGF0aW9uY2hhbmdlXCIsIFNjYWxlU2xpZGVyMSk7XG4vKiNlbmRyZWdpb24gcmVzcG9uc2l2ZSBjb2RlIGVuZCovXG52YXIgc2xpZGVzaG93VHJhbnNpdGlvbnMgPSBbe1xuICAkRHVyYXRpb246IDUwMDAsXG4gICRPcGFjaXR5OiAyXG59XTtcbnZhciBvcHRpb25zID0ge1xuICAkQXV0b1BsYXk6IDEsXG4gICRTbGlkZXNob3dPcHRpb25zOiB7XG4gICAgJENsYXNzOiAkSnNzb3JTbGlkZXNob3dSdW5uZXIkLFxuICAgICRUcmFuc2l0aW9uczogc2xpZGVzaG93VHJhbnNpdGlvbnMsXG4gICAgJFRyYW5zaXRpb25zT3JkZXI6IDFcbiAgfSxcbiAgJEFycm93TmF2aWdhdG9yT3B0aW9uczoge1xuICAgICRDbGFzczogJEpzc29yQXJyb3dOYXZpZ2F0b3IkXG4gIH0sXG4gICRCdWxsZXROYXZpZ2F0b3JPcHRpb25zOiB7XG4gICAgJENsYXNzOiAkSnNzb3JCdWxsZXROYXZpZ2F0b3IkXG4gIH1cbn07XG52YXIgc2xpZGVyID0gbmV3ICRKc3NvclNsaWRlciQoXCJzbGlkZXItdG9wXCIsIG9wdGlvbnMpO1xuLyojcmVnaW9uIHJlc3BvbnNpdmUgY29kZSBiZWdpbiovXG52YXIgd2luX3dpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XG52YXIgd2luX2hlaWdodCA9ICQod2luZG93KS5oZWlnaHQoKTtcbnZhciBNQVhfV0lEVEggPSAod2luX2hlaWdodCA8IHdpbl93aWR0aCkgPyB3aW5fd2lkdGggOiB3aW5faGVpZ2h0O1xuXG5mdW5jdGlvbiBTY2FsZVNsaWRlcigpIHtcbiAgdmFyIGNvbnRhaW5lckVsZW1lbnQgPSBzbGlkZXIuJEVsbXQucGFyZW50Tm9kZTtcbiAgdmFyIGNvbnRhaW5lcldpZHRoID0gY29udGFpbmVyRWxlbWVudC5jbGllbnRXaWR0aDtcbiAgaWYgKGNvbnRhaW5lcldpZHRoKSB7XG4gICAgdmFyIGV4cGVjdGVkV2lkdGggPSBNYXRoLm1pbihNQVhfV0lEVEggfHwgY29udGFpbmVyV2lkdGgsIGNvbnRhaW5lcldpZHRoKTtcbiAgICBzbGlkZXIuJFNjYWxlV2lkdGgoZXhwZWN0ZWRXaWR0aCk7XG4gIH0gZWxzZSB7XG4gICAgd2luZG93LnNldFRpbWVvdXQoU2NhbGVTbGlkZXIsIDMwKTtcbiAgfVxufVxuU2NhbGVTbGlkZXIoKTtcbiQod2luZG93KS5iaW5kKFwibG9hZFwiLCBTY2FsZVNsaWRlcik7XG4kKHdpbmRvdykuYmluZChcInJlc2l6ZVwiLCBTY2FsZVNsaWRlcik7XG4kKHdpbmRvdykuYmluZChcIm9yaWVudGF0aW9uY2hhbmdlXCIsIFNjYWxlU2xpZGVyKTtcbi8qI2VuZHJlZ2lvbiByZXNwb25zaXZlIGNvZGUgZW5kKi9cblxuJChcIi51aS5lbWJlZFwiKS5lbWJlZCgpO1xuJCgnLm1lbnUgLml0ZW0nKS50YWIoKTtcbiQoJy51aS5yYXRpbmcnKS5yYXRpbmcoJ2Rpc2FibGUnKTtcbiQoJy51aS5kcm9wZG93bicpLmRyb3Bkb3duKHtcbiAgb246ICdob3Zlcidcbn0pO1xuJCgnaW1nLmxhenknKS52aXNpYmlsaXR5KHtcbiAgdHlwZTogJ2ltYWdlJyxcbiAgdHJhbnNpdGlvbjogJ2ZhZGUgaW4nLFxuICBkdXJhdGlvbjogMzAwXG59KTtcbiQoJ2hlYWRlcicpLnZpc2liaWxpdHkoe1xuICAgICAgICB0eXBlOiAnZml4ZWQnXG4gICAgICB9KTtcbmlmICgvQW5kcm9pZHxCbGFja0JlcnJ5fGlQaG9uZXxpUGFkfGlQb2R8d2ViT1MvaS50ZXN0KG5hdmlnYXRvci51c2VyQWdlbnQpID09PSBmYWxzZSkge1xuICAkKCcjZXhhbXBsZS0xJykuc3RpY2tscih7XG4gICAgc2hvd09uOiAnaG92ZXInLFxuICAgIHN0aWNrVG86ICdyaWdodCcsXG4gIH0pO1xufSAvL3J1biBzdGlja2xyLCBub3QgYSBtb2JpbGUgZGV2aWNlXG5lbHNlIHtcbiAgJCgnLnRvZ2dsZS5idXR0b24nKS5jbGljayhmdW5jdGlvbigpIHtcbiAgICAkKCcudWkuc2lkZWJhcicpLnNpZGViYXIoJ3RvZ2dsZScpO1xuICB9KTtcbn0gLy9tb2JpbGUgZGV2aWNlLCBpbml0aWFsaXNlIHNpZGViYXIgaW5zdGVhZFxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vYXNzZXRzL2pzL2hvbWUuanMiXSwic291cmNlUm9vdCI6IiJ9