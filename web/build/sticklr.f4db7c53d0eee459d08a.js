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
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/jquery.sticklr.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/jquery.sticklr.js":
/*!*************************************!*\
  !*** ./assets/js/jquery.sticklr.js ***!
  \*************************************/
/*! no static exports found */
/*! all exports used */
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*
 * Sticklr.js v1.4.1
 * Sticky side panel jQuery plugin
 * https://github.com/faisalman/sticklr-js
 *
 * Copyright © 2011-2012 Faisal Salman <f@faisalman.com>
 * Dual licensed under GPLv2 & MIT
 */

(function ($) {

    $.fn.sticklr = function (method) {

        var defaults = {
            animate: false,
            menuHeight: 20,
            menuWidth: 180,
            relativeGap: 15,
            relativeTo: 'center',
            showOn: 'click',
            stickTo: 'left',
            tabHeight: 16,
            tabWidth: 16
        };

        var methods = {

            init: function init(opts) {

                return this.each(function () {

                    var $sticklr = $(this),
                        props = $.extend({}, defaults, opts);

                    if (props.animate && $(window).height() <= 320) {
                        props.animate = false;
                    }

                    var top = helpers.calcTop(props.animate, props.relativeTo, props.relativeGap, $sticklr.height());

                    if (!$sticklr.hasClass('sticklr')) {
                        $sticklr.addClass('sticklr');
                    }
                    if (props.stickTo == 'right') {
                        $sticklr.addClass('sticklr-right');
                    }
                    if (props.showOn == 'hover') {
                        props.showOn = 'mouseenter';
                    }

                    $sticklr.addClass('sticklr-js').css({
                        'position': props.animate ? 'absolute' : 'fixed',
                        'top': top,
                        'width': parseInt(props.tabWidth, 10) + 8
                    }).data('props', props).find('a[href="#"]').bind('click', function (e) {
                        e.preventDefault();
                    }).end().children('li').css({
                        'height': parseInt(props.tabHeight, 10) + 8
                    }).children('a').css({
                        'height': props.tabHeight,
                        'width': props.tabWidth
                    }).bind('click', function () {
                        methods.hide();
                    }).bind(props.showOn, function (e) {
                        if (!$(this).siblings().hasClass('sticklr-active')) {
                            methods.hide();
                            var arrowStyle = $(this).siblings('ul').length ? 'class="sticklr-arrow" style="' + (props.stickTo === 'left' ? 'left:' : 'right:') + (parseInt(props.tabWidth, 10) + 8) + 'px;top:' + parseInt(props.tabHeight, 10) / 2 + 'px"' : '';
                            $(this).append('<span ' + arrowStyle + '></span>').siblings().each(function () {
                                $(this).css({
                                    'margin-left': parseInt(props.tabWidth, 10) + 34,
                                    'margin-right': parseInt(props.tabWidth, 10) + 34,
                                    'opacity': 0,
                                    'position': 'absolute',
                                    'top': 0
                                }).show();

                                var newTop = 0,
                                    totalHeight = $(this).height() + $(this).offset().top,
                                    windowHeight = $(window).height() + $(window).scrollTop();

                                if (totalHeight > windowHeight) {
                                    newTop = parseInt($(this).css('top'), 10) - (totalHeight - windowHeight);
                                }
                                $(this).css({
                                    'top': newTop
                                }).animate({
                                    'margin-left': parseInt(props.tabWidth, 10) + 4,
                                    'margin-right': parseInt(props.tabWidth, 10) + 4,
                                    'opacity': 1.0
                                }, 200);
                            }).addClass('sticklr-active');
                        }

                        if ($(this).attr('href') === '#') {
                            e.preventDefault();
                        }
                    });

                    //if($.browser.msie || props.menuWidth != defaults.menuWidth){					    
                    for (var i = 2; i < 10; i++) {
                        var newLeft = 23 + i + parseInt(props.menuWidth, 10) * (i - 2),
                            newRight = 'auto';
                        if (props.stickTo === 'right') {
                            newRight = newLeft;
                            newLeft = 'auto';
                        }
                        $sticklr.find('li').find('ul:nth-child(' + i + ')').each(function () {
                            var menuWidth = parseInt($(this).attr('data-width'), 10) || props.menuWidth;
                            $(this).css({
                                'left': newLeft,
                                'right': newRight,
                                'width': menuWidth
                            }).children('li').css('min-height', props.menuHeight).children('a').css('min-height', props.menuHeight);
                        });
                    }
                    //}
                });
            },

            hide: function hide() {

                var mL = $('.sticklr-active').css('margin-left');
                var mR = $('.sticklr-active').css('margin-right');
                $('.sticklr-active').animate({
                    'margin-left': parseInt(mL, 10) + 14,
                    'margin-right': parseInt(mR, 10) + 14,
                    'opacity': 0
                }, 200, function () {
                    $(this).removeClass('sticklr-active').hide();
                });
                $('span.sticklr-arrow').remove();
            }
        };

        var helpers = {

            calcTop: function calcTop(absl, pos, gap, panelHeight) {
                var winTop = $(window).scrollTop(),
                    winHeight = $(window).height(),
                    diff = winHeight - panelHeight;

                if (/top|high/i.test(pos)) {
                    return gap + (absl ? winTop : 0);
                } else if (/bottom|low|ground/i.test(pos)) {
                    return (absl ? winTop + diff : diff) - gap;
                } else {
                    return absl ? winTop + diff / 2 : diff / 2;
                }
            },

            fixPos: function fixPos() {
                $('.sticklr').each(function () {
                    var pos = $(this).data('props').relativeTo,
                        gap = $(this).data('props').relativeGap,
                        panelHeight = $(this).height();
                    if ($(this).css('position') === 'absolute') {
                        $(this).stop().animate({
                            'top': helpers.calcTop(true, pos, gap, panelHeight)
                        }, 1000);
                    } else {
                        $(this).css({
                            'top': helpers.calcTop(false, pos, gap, panelHeight)
                        });
                    }
                });
            }
        };

        $(window).bind('resize', helpers.fixPos);
        $(window).bind('scroll', helpers.fixPos);
        $(document).bind('click', function (e) {
            if (!$(e.target).parents().hasClass('sticklr')) {
                methods.hide();
            }
        });

        if (methods[method] && method.toLowerCase() != 'init') {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if ((typeof method === 'undefined' ? 'undefined' : _typeof(method)) === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method "' + method + '" does not exist in Sticklr');
        }
    };
})(jQuery);

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgZGM5YjM4ZjgzYzQ0MmU2OGE3OTciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2pxdWVyeS5zdGlja2xyLmpzIl0sIm5hbWVzIjpbIiQiLCJmbiIsInN0aWNrbHIiLCJtZXRob2QiLCJkZWZhdWx0cyIsImFuaW1hdGUiLCJtZW51SGVpZ2h0IiwibWVudVdpZHRoIiwicmVsYXRpdmVHYXAiLCJyZWxhdGl2ZVRvIiwic2hvd09uIiwic3RpY2tUbyIsInRhYkhlaWdodCIsInRhYldpZHRoIiwibWV0aG9kcyIsImluaXQiLCJvcHRzIiwiZWFjaCIsIiRzdGlja2xyIiwicHJvcHMiLCJleHRlbmQiLCJ3aW5kb3ciLCJoZWlnaHQiLCJ0b3AiLCJoZWxwZXJzIiwiY2FsY1RvcCIsImhhc0NsYXNzIiwiYWRkQ2xhc3MiLCJjc3MiLCJwYXJzZUludCIsImRhdGEiLCJmaW5kIiwiYmluZCIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImVuZCIsImNoaWxkcmVuIiwiaGlkZSIsInNpYmxpbmdzIiwiYXJyb3dTdHlsZSIsImxlbmd0aCIsImFwcGVuZCIsInNob3ciLCJuZXdUb3AiLCJ0b3RhbEhlaWdodCIsIm9mZnNldCIsIndpbmRvd0hlaWdodCIsInNjcm9sbFRvcCIsImF0dHIiLCJpIiwibmV3TGVmdCIsIm5ld1JpZ2h0IiwibUwiLCJtUiIsInJlbW92ZUNsYXNzIiwicmVtb3ZlIiwiYWJzbCIsInBvcyIsImdhcCIsInBhbmVsSGVpZ2h0Iiwid2luVG9wIiwid2luSGVpZ2h0IiwiZGlmZiIsInRlc3QiLCJmaXhQb3MiLCJzdG9wIiwiZG9jdW1lbnQiLCJ0YXJnZXQiLCJwYXJlbnRzIiwidG9Mb3dlckNhc2UiLCJhcHBseSIsIkFycmF5IiwicHJvdG90eXBlIiwic2xpY2UiLCJjYWxsIiwiYXJndW1lbnRzIiwiZXJyb3IiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiI7QUFBQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsYUFBSztBQUNMO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsbUNBQTJCLDBCQUEwQixFQUFFO0FBQ3ZELHlDQUFpQyxlQUFlO0FBQ2hEO0FBQ0E7QUFDQTs7QUFFQTtBQUNBLDhEQUFzRCwrREFBK0Q7O0FBRXJIO0FBQ0E7O0FBRUE7QUFDQTs7Ozs7Ozs7Ozs7Ozs7O0FDN0RBOzs7Ozs7Ozs7QUFTQSxDQUFDLFVBQVNBLENBQVQsRUFBVzs7QUFFUkEsTUFBRUMsRUFBRixDQUFLQyxPQUFMLEdBQWUsVUFBU0MsTUFBVCxFQUFnQjs7QUFFM0IsWUFBSUMsV0FBVztBQUNYQyxxQkFBa0IsS0FEUDtBQUVYQyx3QkFBa0IsRUFGUDtBQUdYQyx1QkFBa0IsR0FIUDtBQUlYQyx5QkFBa0IsRUFKUDtBQUtYQyx3QkFBa0IsUUFMUDtBQU1YQyxvQkFBYyxPQU5IO0FBT1hDLHFCQUFrQixNQVBQO0FBUVhDLHVCQUFrQixFQVJQO0FBU1hDLHNCQUFrQjtBQVRQLFNBQWY7O0FBWUEsWUFBSUMsVUFBVTs7QUFFVkMsa0JBQU8sY0FBU0MsSUFBVCxFQUFjOztBQUVqQix1QkFBTyxLQUFLQyxJQUFMLENBQVUsWUFBVTs7QUFFdkIsd0JBQUlDLFdBQWNsQixFQUFFLElBQUYsQ0FBbEI7QUFBQSx3QkFDSW1CLFFBQWNuQixFQUFFb0IsTUFBRixDQUFTLEVBQVQsRUFBYWhCLFFBQWIsRUFBdUJZLElBQXZCLENBRGxCOztBQUdBLHdCQUFHRyxNQUFNZCxPQUFOLElBQWlCTCxFQUFFcUIsTUFBRixFQUFVQyxNQUFWLE1BQXNCLEdBQTFDLEVBQ0E7QUFDSUgsOEJBQU1kLE9BQU4sR0FBZ0IsS0FBaEI7QUFDSDs7QUFFRCx3QkFBSWtCLE1BQU1DLFFBQVFDLE9BQVIsQ0FBZ0JOLE1BQU1kLE9BQXRCLEVBQStCYyxNQUFNVixVQUFyQyxFQUFpRFUsTUFBTVgsV0FBdkQsRUFBb0VVLFNBQVNJLE1BQVQsRUFBcEUsQ0FBVjs7QUFFQSx3QkFBRyxDQUFDSixTQUFTUSxRQUFULENBQWtCLFNBQWxCLENBQUosRUFDQTtBQUNJUixpQ0FBU1MsUUFBVCxDQUFrQixTQUFsQjtBQUNIO0FBQ0Qsd0JBQUdSLE1BQU1SLE9BQU4sSUFBaUIsT0FBcEIsRUFDQTtBQUNJTyxpQ0FBU1MsUUFBVCxDQUFrQixlQUFsQjtBQUNIO0FBQ0Qsd0JBQUdSLE1BQU1ULE1BQU4sSUFBZ0IsT0FBbkIsRUFDQTtBQUNJUyw4QkFBTVQsTUFBTixHQUFlLFlBQWY7QUFDSDs7QUFFRFEsNkJBQ0tTLFFBREwsQ0FDYyxZQURkLEVBRUtDLEdBRkwsQ0FFUztBQUNELG9DQUFlVCxNQUFNZCxPQUFOLEdBQWdCLFVBQWhCLEdBQTZCLE9BRDNDO0FBRUQsK0JBQWNrQixHQUZiO0FBR0QsaUNBQWNNLFNBQVNWLE1BQU1OLFFBQWYsRUFBeUIsRUFBekIsSUFBK0I7QUFINUMscUJBRlQsRUFPS2lCLElBUEwsQ0FPVSxPQVBWLEVBT21CWCxLQVBuQixFQVFWWSxJQVJVLENBUUwsYUFSSyxFQVNOQyxJQVRNLENBU0QsT0FUQyxFQVNRLFVBQVNDLENBQVQsRUFBVztBQUN6QkEsMEJBQUVDLGNBQUY7QUFDQSxxQkFYTSxFQVlOQyxHQVpNLEdBYVZDLFFBYlUsQ0FhRCxJQWJDLEVBY05SLEdBZE0sQ0FjRjtBQUNELGtDQUFXQyxTQUFTVixNQUFNUCxTQUFmLEVBQTBCLEVBQTFCLElBQWdDO0FBRDFDLHFCQWRFLEVBaUJOd0IsUUFqQk0sQ0FpQkcsR0FqQkgsRUFrQkZSLEdBbEJFLENBa0JFO0FBQ0Qsa0NBQWNULE1BQU1QLFNBRG5CO0FBRUQsaUNBQWNPLE1BQU1OO0FBRm5CLHFCQWxCRixFQXNCRm1CLElBdEJFLENBc0JHLE9BdEJILEVBc0JZLFlBQVU7QUFDckJsQixnQ0FBUXVCLElBQVI7QUFDSCxxQkF4QkUsRUF5QkZMLElBekJFLENBeUJHYixNQUFNVCxNQXpCVCxFQXlCaUIsVUFBU3VCLENBQVQsRUFBVztBQUMzQiw0QkFBRyxDQUFDakMsRUFBRSxJQUFGLEVBQVFzQyxRQUFSLEdBQW1CWixRQUFuQixDQUE0QixnQkFBNUIsQ0FBSixFQUFrRDtBQUMvQlosb0NBQVF1QixJQUFSO0FBQ0EsZ0NBQUlFLGFBQWF2QyxFQUFFLElBQUYsRUFBUXNDLFFBQVIsQ0FBaUIsSUFBakIsRUFBdUJFLE1BQXZCLEdBRUcsbUNBQ0lyQixNQUFNUixPQUFOLEtBQWtCLE1BQW5CLEdBQTZCLE9BQTdCLEdBQXVDLFFBRDFDLEtBRUdrQixTQUFTVixNQUFNTixRQUFmLEVBQXlCLEVBQXpCLElBQStCLENBRmxDLElBRXVDLFNBRnZDLEdBRW9EZ0IsU0FBU1YsTUFBTVAsU0FBZixFQUEwQixFQUExQixJQUFnQyxDQUZwRixHQUV5RixLQUo1RixHQU1DLEVBTmxCO0FBT0FaLDhCQUFFLElBQUYsRUFDS3lDLE1BREwsQ0FDWSxXQUFXRixVQUFYLEdBQXdCLFVBRHBDLEVBRUtELFFBRkwsR0FHU3JCLElBSFQsQ0FHYyxZQUFVO0FBQ1pqQixrQ0FBRSxJQUFGLEVBQ0s0QixHQURMLENBQ1M7QUFDRCxtREFBa0JDLFNBQVNWLE1BQU1OLFFBQWYsRUFBeUIsRUFBekIsSUFBK0IsRUFEaEQ7QUFFRCxvREFBa0JnQixTQUFTVixNQUFNTixRQUFmLEVBQXlCLEVBQXpCLElBQStCLEVBRmhEO0FBR0QsK0NBQWtCLENBSGpCO0FBSUQsZ0RBQWtCLFVBSmpCO0FBS0QsMkNBQWtCO0FBTGpCLGlDQURULEVBUUs2QixJQVJMOztBQVVBLG9DQUFJQyxTQUFrQixDQUF0QjtBQUFBLG9DQUNJQyxjQUFrQjVDLEVBQUUsSUFBRixFQUFRc0IsTUFBUixLQUFtQnRCLEVBQUUsSUFBRixFQUFRNkMsTUFBUixHQUFpQnRCLEdBRDFEO0FBQUEsb0NBRUl1QixlQUFrQjlDLEVBQUVxQixNQUFGLEVBQVVDLE1BQVYsS0FBcUJ0QixFQUFFcUIsTUFBRixFQUFVMEIsU0FBVixFQUYzQzs7QUFJQSxvQ0FBR0gsY0FBY0UsWUFBakIsRUFDQTtBQUNJSCw2Q0FBU2QsU0FBUzdCLEVBQUUsSUFBRixFQUFRNEIsR0FBUixDQUFZLEtBQVosQ0FBVCxFQUE2QixFQUE3QixLQUFvQ2dCLGNBQWFFLFlBQWpELENBQVQ7QUFDSDtBQUNEOUMsa0NBQUUsSUFBRixFQUNLNEIsR0FETCxDQUNTO0FBQ0QsMkNBQWtCZTtBQURqQixpQ0FEVCxFQUlLdEMsT0FKTCxDQUlhO0FBQ0wsbURBQWtCd0IsU0FBU1YsTUFBTU4sUUFBZixFQUF5QixFQUF6QixJQUErQixDQUQ1QztBQUVMLG9EQUFrQmdCLFNBQVNWLE1BQU1OLFFBQWYsRUFBeUIsRUFBekIsSUFBK0IsQ0FGNUM7QUFHTCwrQ0FBa0I7QUFIYixpQ0FKYixFQVFPLEdBUlA7QUFTSCw2QkEvQlQsRUFnQ1NjLFFBaENULENBZ0NrQixnQkFoQ2xCO0FBaUNIOztBQUVELDRCQUFHM0IsRUFBRSxJQUFGLEVBQVFnRCxJQUFSLENBQWEsTUFBYixNQUF5QixHQUE1QixFQUNBO0FBQ0lmLDhCQUFFQyxjQUFGO0FBQ0g7QUFDM0IscUJBMUVVOztBQTRFWjtBQUNDLHlCQUFJLElBQUllLElBQUksQ0FBWixFQUFlQSxJQUFJLEVBQW5CLEVBQXVCQSxHQUF2QixFQUEyQjtBQUNSLDRCQUFJQyxVQUFjLEtBQUtELENBQUwsR0FBVXBCLFNBQVNWLE1BQU1aLFNBQWYsRUFBMEIsRUFBMUIsS0FBaUMwQyxJQUFJLENBQXJDLENBQTVCO0FBQUEsNEJBQ0lFLFdBQWMsTUFEbEI7QUFFQSw0QkFBR2hDLE1BQU1SLE9BQU4sS0FBa0IsT0FBckIsRUFBNkI7QUFDekJ3Qyx1Q0FBY0QsT0FBZDtBQUNBQSxzQ0FBYyxNQUFkO0FBQ0g7QUFDbkJoQyxpQ0FDS2EsSUFETCxDQUNVLElBRFYsRUFFU0EsSUFGVCxDQUVjLGtCQUFrQmtCLENBQWxCLEdBQXNCLEdBRnBDLEVBR2FoQyxJQUhiLENBR2tCLFlBQVU7QUFDWixnQ0FBSVYsWUFBWXNCLFNBQVM3QixFQUFFLElBQUYsRUFBUWdELElBQVIsQ0FBYSxZQUFiLENBQVQsRUFBcUMsRUFBckMsS0FBNEM3QixNQUFNWixTQUFsRTtBQUNBUCw4QkFBRSxJQUFGLEVBQ0s0QixHQURMLENBQ1M7QUFDSix3Q0FBU3NCLE9BREw7QUFFSix5Q0FBVUMsUUFGTjtBQUdKLHlDQUFVNUM7QUFITiw2QkFEVCxFQU1LNkIsUUFOTCxDQU1jLElBTmQsRUFPU1IsR0FQVCxDQU9hLFlBUGIsRUFPMkJULE1BQU1iLFVBUGpDLEVBUVM4QixRQVJULENBUWtCLEdBUmxCLEVBU2FSLEdBVGIsQ0FTaUIsWUFUakIsRUFTK0JULE1BQU1iLFVBVHJDO0FBVUgseUJBZmI7QUFnQkE7QUFDRjtBQUNTLGlCQS9ITSxDQUFQO0FBZ0lILGFBcElTOztBQXNJVitCLGtCQUFNLGdCQUFVOztBQUVaLG9CQUFJZSxLQUFLcEQsRUFBRSxpQkFBRixFQUFxQjRCLEdBQXJCLENBQXlCLGFBQXpCLENBQVQ7QUFDQSxvQkFBSXlCLEtBQUtyRCxFQUFFLGlCQUFGLEVBQXFCNEIsR0FBckIsQ0FBeUIsY0FBekIsQ0FBVDtBQUNBNUIsa0JBQUUsaUJBQUYsRUFBcUJLLE9BQXJCLENBQTZCO0FBQ3JCLG1DQUFrQndCLFNBQVN1QixFQUFULEVBQWEsRUFBYixJQUFtQixFQURoQjtBQUVyQixvQ0FBa0J2QixTQUFTd0IsRUFBVCxFQUFhLEVBQWIsSUFBbUIsRUFGaEI7QUFHckIsK0JBQWtCO0FBSEcsaUJBQTdCLEVBSU8sR0FKUCxFQUlZLFlBQVU7QUFDZHJELHNCQUFFLElBQUYsRUFDS3NELFdBREwsQ0FDaUIsZ0JBRGpCLEVBRUtqQixJQUZMO0FBR1AsaUJBUkQ7QUFTQXJDLGtCQUFFLG9CQUFGLEVBQXdCdUQsTUFBeEI7QUFDSDtBQXBKUyxTQUFkOztBQXVKQSxZQUFJL0IsVUFBVTs7QUFFVkMscUJBQVUsaUJBQVMrQixJQUFULEVBQWVDLEdBQWYsRUFBb0JDLEdBQXBCLEVBQXlCQyxXQUF6QixFQUFxQztBQUMzQyxvQkFBSUMsU0FBYzVELEVBQUVxQixNQUFGLEVBQVUwQixTQUFWLEVBQWxCO0FBQUEsb0JBQ0ljLFlBQWM3RCxFQUFFcUIsTUFBRixFQUFVQyxNQUFWLEVBRGxCO0FBQUEsb0JBRUl3QyxPQUFjRCxZQUFZRixXQUY5Qjs7QUFJQSxvQkFBRyxZQUFZSSxJQUFaLENBQWlCTixHQUFqQixDQUFILEVBQ0E7QUFDSSwyQkFBT0MsT0FBT0YsT0FBT0ksTUFBUCxHQUFnQixDQUF2QixDQUFQO0FBQ0gsaUJBSEQsTUFJSyxJQUFHLHFCQUFxQkcsSUFBckIsQ0FBMEJOLEdBQTFCLENBQUgsRUFDTDtBQUNJLDJCQUFPLENBQUNELE9BQVFJLFNBQVNFLElBQWpCLEdBQXlCQSxJQUExQixJQUFrQ0osR0FBekM7QUFDSCxpQkFISSxNQUtMO0FBQ0ksMkJBQU9GLE9BQVFJLFNBQVVFLE9BQU8sQ0FBekIsR0FBZ0NBLE9BQU8sQ0FBOUM7QUFDSDtBQUNKLGFBbkJTOztBQXFCVkUsb0JBQVEsa0JBQVU7QUFDZGhFLGtCQUFFLFVBQUYsRUFBY2lCLElBQWQsQ0FBbUIsWUFBVTtBQUN6Qix3QkFBSXdDLE1BQWN6RCxFQUFFLElBQUYsRUFBUThCLElBQVIsQ0FBYSxPQUFiLEVBQXNCckIsVUFBeEM7QUFBQSx3QkFDSWlELE1BQWMxRCxFQUFFLElBQUYsRUFBUThCLElBQVIsQ0FBYSxPQUFiLEVBQXNCdEIsV0FEeEM7QUFBQSx3QkFFSW1ELGNBQWMzRCxFQUFFLElBQUYsRUFBUXNCLE1BQVIsRUFGbEI7QUFHQSx3QkFBR3RCLEVBQUUsSUFBRixFQUFRNEIsR0FBUixDQUFZLFVBQVosTUFBNEIsVUFBL0IsRUFBMEM7QUFDdEM1QiwwQkFBRSxJQUFGLEVBQVFpRSxJQUFSLEdBQWU1RCxPQUFmLENBQXVCO0FBQ25CLG1DQUFVbUIsUUFBUUMsT0FBUixDQUFnQixJQUFoQixFQUFzQmdDLEdBQXRCLEVBQTJCQyxHQUEzQixFQUFnQ0MsV0FBaEM7QUFEUyx5QkFBdkIsRUFFRyxJQUZIO0FBR0gscUJBSkQsTUFJTztBQUNIM0QsMEJBQUUsSUFBRixFQUFRNEIsR0FBUixDQUFZO0FBQ1IsbUNBQVVKLFFBQVFDLE9BQVIsQ0FBZ0IsS0FBaEIsRUFBdUJnQyxHQUF2QixFQUE0QkMsR0FBNUIsRUFBaUNDLFdBQWpDO0FBREYseUJBQVo7QUFHSDtBQUNKLGlCQWJEO0FBY0g7QUFwQ1MsU0FBZDs7QUF1Q0EzRCxVQUFFcUIsTUFBRixFQUFVVyxJQUFWLENBQWUsUUFBZixFQUF5QlIsUUFBUXdDLE1BQWpDO0FBQ0FoRSxVQUFFcUIsTUFBRixFQUFVVyxJQUFWLENBQWUsUUFBZixFQUF5QlIsUUFBUXdDLE1BQWpDO0FBQ0FoRSxVQUFFa0UsUUFBRixFQUFZbEMsSUFBWixDQUFpQixPQUFqQixFQUEwQixVQUFTQyxDQUFULEVBQVc7QUFDakMsZ0JBQUcsQ0FBQ2pDLEVBQUVpQyxFQUFFa0MsTUFBSixFQUFZQyxPQUFaLEdBQXNCMUMsUUFBdEIsQ0FBK0IsU0FBL0IsQ0FBSixFQUNBO0FBQ0laLHdCQUFRdUIsSUFBUjtBQUNIO0FBQ0osU0FMRDs7QUFPQSxZQUFJdkIsUUFBUVgsTUFBUixLQUFtQkEsT0FBT2tFLFdBQVAsTUFBd0IsTUFBL0MsRUFBc0Q7QUFDbEQsbUJBQU92RCxRQUFRWCxNQUFSLEVBQWdCbUUsS0FBaEIsQ0FBc0IsSUFBdEIsRUFBNEJDLE1BQU1DLFNBQU4sQ0FBZ0JDLEtBQWhCLENBQXNCQyxJQUF0QixDQUEyQkMsU0FBM0IsRUFBc0MsQ0FBdEMsQ0FBNUIsQ0FBUDtBQUNILFNBRkQsTUFFTyxJQUFJLFFBQU94RSxNQUFQLHlDQUFPQSxNQUFQLE9BQWtCLFFBQWxCLElBQThCLENBQUNBLE1BQW5DLEVBQTBDO0FBQzdDLG1CQUFPVyxRQUFRQyxJQUFSLENBQWF1RCxLQUFiLENBQW1CLElBQW5CLEVBQXlCSyxTQUF6QixDQUFQO0FBQ0gsU0FGTSxNQUVBO0FBQ0gzRSxjQUFFNEUsS0FBRixDQUFRLGFBQWN6RSxNQUFkLEdBQXVCLDZCQUEvQjtBQUNIO0FBQ0osS0E1TkQ7QUE2TkgsQ0EvTkQsRUErTkcwRSxNQS9OSCxFIiwiZmlsZSI6InN0aWNrbHIuZjRkYjdjNTNkMGVlZTQ1OWQwOGEuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCIvYnVpbGQvXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gXCIuL2Fzc2V0cy9qcy9qcXVlcnkuc3RpY2tsci5qc1wiKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCBkYzliMzhmODNjNDQyZTY4YTc5NyIsIi8qXG4gKiBTdGlja2xyLmpzIHYxLjQuMVxuICogU3RpY2t5IHNpZGUgcGFuZWwgalF1ZXJ5IHBsdWdpblxuICogaHR0cHM6Ly9naXRodWIuY29tL2ZhaXNhbG1hbi9zdGlja2xyLWpzXG4gKlxuICogQ29weXJpZ2h0IMKpIDIwMTEtMjAxMiBGYWlzYWwgU2FsbWFuIDxmQGZhaXNhbG1hbi5jb20+XG4gKiBEdWFsIGxpY2Vuc2VkIHVuZGVyIEdQTHYyICYgTUlUXG4gKi9cbiBcbihmdW5jdGlvbigkKXtcblxuICAgICQuZm4uc3RpY2tsciA9IGZ1bmN0aW9uKG1ldGhvZCl7XG5cbiAgICAgICAgdmFyIGRlZmF1bHRzID0ge1xuICAgICAgICAgICAgYW5pbWF0ZSAgICAgICAgIDogZmFsc2UsXG4gICAgICAgICAgICBtZW51SGVpZ2h0ICAgICAgOiAyMCxcbiAgICAgICAgICAgIG1lbnVXaWR0aCAgICAgICA6IDE4MCxcbiAgICAgICAgICAgIHJlbGF0aXZlR2FwICAgICA6IDE1LFxuICAgICAgICAgICAgcmVsYXRpdmVUbyAgICAgIDogJ2NlbnRlcicsXG4gICAgICAgICAgICBzaG93T25cdFx0ICAgIDogJ2NsaWNrJyxcbiAgICAgICAgICAgIHN0aWNrVG8gICAgICAgICA6ICdsZWZ0JyxcbiAgICAgICAgICAgIHRhYkhlaWdodCAgICAgICA6IDE2LFxuICAgICAgICAgICAgdGFiV2lkdGggICAgICAgIDogMTZcbiAgICAgICAgfTtcbiAgICAgICAgICAgICAgIFxuICAgICAgICB2YXIgbWV0aG9kcyA9IHtcbiAgICAgICAgXG4gICAgICAgICAgICBpbml0IDogZnVuY3Rpb24ob3B0cyl7XG5cbiAgICAgICAgICAgICAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgIHZhciAkc3RpY2tsciAgICA9ICQodGhpcyksXG4gICAgICAgICAgICAgICAgICAgICAgICBwcm9wcyAgICAgICA9ICQuZXh0ZW5kKHt9LCBkZWZhdWx0cywgb3B0cyk7XG4gICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICBpZihwcm9wcy5hbmltYXRlICYmICQod2luZG93KS5oZWlnaHQoKSA8PSAzMjApXG4gICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHByb3BzLmFuaW1hdGUgPSBmYWxzZTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICB2YXIgdG9wID0gaGVscGVycy5jYWxjVG9wKHByb3BzLmFuaW1hdGUsIHByb3BzLnJlbGF0aXZlVG8sIHByb3BzLnJlbGF0aXZlR2FwLCAkc3RpY2tsci5oZWlnaHQoKSk7XG4gICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICBpZighJHN0aWNrbHIuaGFzQ2xhc3MoJ3N0aWNrbHInKSlcbiAgICAgICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICAgICAgJHN0aWNrbHIuYWRkQ2xhc3MoJ3N0aWNrbHInKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBpZihwcm9wcy5zdGlja1RvID09ICdyaWdodCcpXG4gICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICRzdGlja2xyLmFkZENsYXNzKCdzdGlja2xyLXJpZ2h0Jyk7XG4gICAgICAgICAgICAgICAgICAgIH0gICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgaWYocHJvcHMuc2hvd09uID09ICdob3ZlcicpXG4gICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHByb3BzLnNob3dPbiA9ICdtb3VzZWVudGVyJztcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgJHN0aWNrbHJcbiAgICAgICAgICAgICAgICAgICAgICAgIC5hZGRDbGFzcygnc3RpY2tsci1qcycpXG4gICAgICAgICAgICAgICAgICAgICAgICAuY3NzKHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAncG9zaXRpb24nICA6IChwcm9wcy5hbmltYXRlID8gJ2Fic29sdXRlJyA6ICdmaXhlZCcpLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0b3AnICAgICAgIDogdG9wLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd3aWR0aCcgICAgIDogcGFyc2VJbnQocHJvcHMudGFiV2lkdGgsIDEwKSArIDhcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICAuZGF0YSgncHJvcHMnLCBwcm9wcylcblx0XHRcdFx0XHQgICAgLmZpbmQoJ2FbaHJlZj1cIiNcIl0nKVxuXHRcdFx0XHRcdCAgICAgICAgLmJpbmQoJ2NsaWNrJywgZnVuY3Rpb24oZSl7XG5cdFx0XHRcdFx0XHQgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0XHQgICAgICAgIH0pXG5cdFx0XHRcdFx0ICAgICAgICAuZW5kKClcblx0XHRcdFx0XHQgICAgLmNoaWxkcmVuKCdsaScpXG5cdFx0XHRcdFx0ICAgICAgICAuY3NzKHtcblx0XHRcdFx0XHQgICAgICAgICAgICAnaGVpZ2h0JyA6IHBhcnNlSW50KHByb3BzLnRhYkhlaWdodCwgMTApICsgOFxuXHRcdFx0XHRcdCAgICAgICAgfSlcblx0XHRcdFx0XHQgICAgICAgIC5jaGlsZHJlbignYScpXG5cdFx0XHRcdFx0ICAgICAgICAgICAgLmNzcyh7XG5cdFx0XHRcdFx0ICAgICAgICAgICAgICAgICdoZWlnaHQnICAgIDogcHJvcHMudGFiSGVpZ2h0LFxuXHRcdFx0XHRcdCAgICAgICAgICAgICAgICAnd2lkdGgnICAgICA6IHByb3BzLnRhYldpZHRoXG5cdFx0XHRcdFx0ICAgICAgICAgICAgfSlcblx0XHRcdFx0XHQgICAgICAgICAgICAuYmluZCgnY2xpY2snLCBmdW5jdGlvbigpe1xuXHRcdFx0XHRcdCAgICAgICAgICAgICAgICBtZXRob2RzLmhpZGUoKTtcblx0XHRcdFx0XHQgICAgICAgICAgICB9KVx0XHRcdFx0XHQgICAgICAgICAgICBcblx0XHRcdFx0XHQgICAgICAgICAgICAuYmluZChwcm9wcy5zaG93T24sIGZ1bmN0aW9uKGUpe1xuXHRcdFx0XHRcdCAgICAgICAgICAgICAgICBpZighJCh0aGlzKS5zaWJsaW5ncygpLmhhc0NsYXNzKCdzdGlja2xyLWFjdGl2ZScpKXtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXRob2RzLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgYXJyb3dTdHlsZSA9ICQodGhpcykuc2libGluZ3MoJ3VsJykubGVuZ3RoID9cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2NsYXNzPVwic3RpY2tsci1hcnJvd1wiIHN0eWxlPVwiJyBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICsgKChwcm9wcy5zdGlja1RvID09PSAnbGVmdCcpID8gJ2xlZnQ6JyA6ICdyaWdodDonKSBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICsgKHBhcnNlSW50KHByb3BzLnRhYldpZHRoLCAxMCkgKyA4KSArICdweDt0b3A6JyArIChwYXJzZUludChwcm9wcy50YWJIZWlnaHQsIDEwKSAvIDIpICsgJ3B4XCInXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgOiAnJztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5hcHBlbmQoJzxzcGFuICcgKyBhcnJvd1N0eWxlICsgJz48L3NwYW4+JylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLnNpYmxpbmdzKClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5lYWNoKGZ1bmN0aW9uKCl7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5jc3Moe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ21hcmdpbi1sZWZ0JyAgIDogcGFyc2VJbnQocHJvcHMudGFiV2lkdGgsIDEwKSArIDM0LFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ21hcmdpbi1yaWdodCcgIDogcGFyc2VJbnQocHJvcHMudGFiV2lkdGgsIDEwKSArIDM0LFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ29wYWNpdHknICAgICAgIDogMCxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdwb3NpdGlvbicgICAgICA6ICdhYnNvbHV0ZScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAndG9wJyAgICAgICAgICAgOiAwXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5zaG93KCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG5ld1RvcCAgICAgICAgICA9IDAsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRvdGFsSGVpZ2h0ICAgICA9ICQodGhpcykuaGVpZ2h0KCkgKyAkKHRoaXMpLm9mZnNldCgpLnRvcCxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93SGVpZ2h0ICAgID0gJCh3aW5kb3cpLmhlaWdodCgpICsgJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmKHRvdGFsSGVpZ2h0ID4gd2luZG93SGVpZ2h0KVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3VG9wID0gcGFyc2VJbnQoJCh0aGlzKS5jc3MoJ3RvcCcpLCAxMCkgLSAodG90YWxIZWlnaHQgLXdpbmRvd0hlaWdodCk7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICQodGhpcylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLmNzcyh7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAndG9wJyAgICAgICAgICAgOiBuZXdUb3BcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLmFuaW1hdGUoe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ21hcmdpbi1sZWZ0JyAgIDogcGFyc2VJbnQocHJvcHMudGFiV2lkdGgsIDEwKSArIDQsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAnbWFyZ2luLXJpZ2h0JyAgOiBwYXJzZUludChwcm9wcy50YWJXaWR0aCwgMTApICsgNCxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdvcGFjaXR5JyAgICAgICA6IDEuMFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LCAyMDApO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5hZGRDbGFzcygnc3RpY2tsci1hY3RpdmUnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYoJCh0aGlzKS5hdHRyKCdocmVmJykgPT09ICcjJylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cdFx0XHRcdFx0ICAgIH0pO1xuXHRcdFx0XHRcblx0XHRcdFx0ICAgIC8vaWYoJC5icm93c2VyLm1zaWUgfHwgcHJvcHMubWVudVdpZHRoICE9IGRlZmF1bHRzLm1lbnVXaWR0aCl7XHRcdFx0XHRcdCAgICBcblx0XHRcdFx0XHQgICAgZm9yKHZhciBpID0gMjsgaSA8IDEwOyBpKyspeyAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgbmV3TGVmdCAgICAgPSAyMyArIGkgKyAocGFyc2VJbnQocHJvcHMubWVudVdpZHRoLCAxMCkgKiAoaSAtIDIpKSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3UmlnaHQgICAgPSAnYXV0byc7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYocHJvcHMuc3RpY2tUbyA9PT0gJ3JpZ2h0Jyl7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5ld1JpZ2h0ICAgID0gbmV3TGVmdDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3TGVmdCAgICAgPSAnYXV0byc7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSAgICAgICAgICAgICAgICAgICAgICAgICAgICBcblx0XHRcdFx0XHRcdCAgICAkc3RpY2tsclxuXHRcdFx0XHRcdFx0ICAgICAgICAuZmluZCgnbGknKVxuXHRcdFx0XHRcdFx0ICAgICAgICAgICAgLmZpbmQoJ3VsOm50aC1jaGlsZCgnICsgaSArICcpJylcblx0XHRcdFx0XHRcdCAgICAgICAgICAgICAgICAuZWFjaChmdW5jdGlvbigpe1xuXHRcdFx0XHRcdFx0ICAgICAgICAgICAgICAgICAgICB2YXIgbWVudVdpZHRoID0gcGFyc2VJbnQoJCh0aGlzKS5hdHRyKCdkYXRhLXdpZHRoJyksIDEwKSB8fCBwcm9wcy5tZW51V2lkdGg7XG5cdFx0XHRcdFx0XHQgICAgICAgICAgICAgICAgICAgICQodGhpcylcblx0XHRcdFx0XHRcdCAgICAgICAgICAgICAgICAgICAgICAgIC5jc3Moe1xuXHRcdFx0XHRcdFx0XHQgICAgICAgICAgICAgICAgICAgICAgICAnbGVmdCdcdDogbmV3TGVmdCxcblx0XHRcdFx0XHRcdFx0ICAgICAgICAgICAgICAgICAgICAgICAgJ3JpZ2h0JyA6IG5ld1JpZ2h0LFxuXHRcdFx0XHRcdFx0XHQgICAgICAgICAgICAgICAgICAgICAgICAnd2lkdGgnXHQ6IG1lbnVXaWR0aFxuXHRcdFx0XHRcdFx0ICAgICAgICAgICAgICAgICAgICAgICAgfSlcblx0XHRcdFx0XHRcdCAgICAgICAgICAgICAgICAgICAgICAgIC5jaGlsZHJlbignbGknKVxuXHRcdFx0XHRcdFx0ICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5jc3MoJ21pbi1oZWlnaHQnLCBwcm9wcy5tZW51SGVpZ2h0KVxuXHRcdFx0XHRcdFx0ICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5jaGlsZHJlbignYScpXG5cdFx0XHRcdFx0XHQgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5jc3MoJ21pbi1oZWlnaHQnLCBwcm9wcy5tZW51SGVpZ2h0KTtcblx0XHRcdFx0XHRcdCAgICAgICAgICAgICAgICB9KTtcblx0XHRcdFx0XHQgICAgfVxuXHRcdFx0XHQgICAgLy99XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9LFxuICAgICAgICBcbiAgICAgICAgICAgIGhpZGU6IGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICBcbiAgICAgICAgICAgICAgICB2YXIgbUwgPSAkKCcuc3RpY2tsci1hY3RpdmUnKS5jc3MoJ21hcmdpbi1sZWZ0Jyk7XG4gICAgICAgICAgICAgICAgdmFyIG1SID0gJCgnLnN0aWNrbHItYWN0aXZlJykuY3NzKCdtYXJnaW4tcmlnaHQnKTsgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAkKCcuc3RpY2tsci1hY3RpdmUnKS5hbmltYXRlKHtcbiAgICAgICAgICAgICAgICAgICAgICAgICdtYXJnaW4tbGVmdCcgICA6IHBhcnNlSW50KG1MLCAxMCkgKyAxNCxcbiAgICAgICAgICAgICAgICAgICAgICAgICdtYXJnaW4tcmlnaHQnICA6IHBhcnNlSW50KG1SLCAxMCkgKyAxNCxcbiAgICAgICAgICAgICAgICAgICAgICAgICdvcGFjaXR5JyAgICAgICA6IDBcbiAgICAgICAgICAgICAgICAgICAgfSwgMjAwLCBmdW5jdGlvbigpe1xuICAgICAgICAgICAgICAgICAgICAgICAgJCh0aGlzKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcygnc3RpY2tsci1hY3RpdmUnKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC5oaWRlKCk7XG4gICAgICAgICAgICAgICAgfSk7ICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgJCgnc3Bhbi5zdGlja2xyLWFycm93JykucmVtb3ZlKCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIGhlbHBlcnMgPSB7XG4gICAgICAgIFxuICAgICAgICAgICAgY2FsY1RvcCA6IGZ1bmN0aW9uKGFic2wsIHBvcywgZ2FwLCBwYW5lbEhlaWdodCl7XG4gICAgICAgICAgICAgICAgdmFyIHdpblRvcCAgICAgID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpLFxuICAgICAgICAgICAgICAgICAgICB3aW5IZWlnaHQgICA9ICQod2luZG93KS5oZWlnaHQoKSxcbiAgICAgICAgICAgICAgICAgICAgZGlmZiAgICAgICAgPSB3aW5IZWlnaHQgLSBwYW5lbEhlaWdodDtcbiAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgaWYoL3RvcHxoaWdoL2kudGVzdChwb3MpKVxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGdhcCArIChhYnNsID8gd2luVG9wIDogMCk7ICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIH0gXG4gICAgICAgICAgICAgICAgZWxzZSBpZigvYm90dG9tfGxvd3xncm91bmQvaS50ZXN0KHBvcykpXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gKGFic2wgPyAod2luVG9wICsgZGlmZikgOiBkaWZmKSAtIGdhcDtcbiAgICAgICAgICAgICAgICB9IFxuICAgICAgICAgICAgICAgIGVsc2UgXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gYWJzbCA/ICh3aW5Ub3AgKyAoZGlmZiAvIDIpKSA6IChkaWZmIC8gMik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgZml4UG9zOiBmdW5jdGlvbigpe1xuICAgICAgICAgICAgICAgICQoJy5zdGlja2xyJykuZWFjaChmdW5jdGlvbigpe1xuICAgICAgICAgICAgICAgICAgICB2YXIgcG9zICAgICAgICAgPSAkKHRoaXMpLmRhdGEoJ3Byb3BzJykucmVsYXRpdmVUbyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGdhcCAgICAgICAgID0gJCh0aGlzKS5kYXRhKCdwcm9wcycpLnJlbGF0aXZlR2FwLFxuICAgICAgICAgICAgICAgICAgICAgICAgcGFuZWxIZWlnaHQgPSAkKHRoaXMpLmhlaWdodCgpO1xuICAgICAgICAgICAgICAgICAgICBpZigkKHRoaXMpLmNzcygncG9zaXRpb24nKSA9PT0gJ2Fic29sdXRlJyl7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpLnN0b3AoKS5hbmltYXRlKHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndG9wJyAgIDogaGVscGVycy5jYWxjVG9wKHRydWUsIHBvcywgZ2FwLCBwYW5lbEhlaWdodClcbiAgICAgICAgICAgICAgICAgICAgICAgIH0sIDEwMDApO1xuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgJCh0aGlzKS5jc3Moe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0b3AnICAgOiBoZWxwZXJzLmNhbGNUb3AoZmFsc2UsIHBvcywgZ2FwLCBwYW5lbEhlaWdodClcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH07XG4gICAgICAgIFxuICAgICAgICAkKHdpbmRvdykuYmluZCgncmVzaXplJywgaGVscGVycy5maXhQb3MpO1xuICAgICAgICAkKHdpbmRvdykuYmluZCgnc2Nyb2xsJywgaGVscGVycy5maXhQb3MpO1xuICAgICAgICAkKGRvY3VtZW50KS5iaW5kKCdjbGljaycsIGZ1bmN0aW9uKGUpe1xuICAgICAgICAgICAgaWYoISQoZS50YXJnZXQpLnBhcmVudHMoKS5oYXNDbGFzcygnc3RpY2tscicpKVxuICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIG1ldGhvZHMuaGlkZSgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgXG4gICAgICAgIGlmIChtZXRob2RzW21ldGhvZF0gJiYgbWV0aG9kLnRvTG93ZXJDYXNlKCkgIT0gJ2luaXQnKXtcbiAgICAgICAgICAgIHJldHVybiBtZXRob2RzW21ldGhvZF0uYXBwbHkodGhpcywgQXJyYXkucHJvdG90eXBlLnNsaWNlLmNhbGwoYXJndW1lbnRzLCAxKSk7XG4gICAgICAgIH0gZWxzZSBpZiAodHlwZW9mIG1ldGhvZCA9PT0gJ29iamVjdCcgfHwgIW1ldGhvZCl7XG4gICAgICAgICAgICByZXR1cm4gbWV0aG9kcy5pbml0LmFwcGx5KHRoaXMsIGFyZ3VtZW50cyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkLmVycm9yKCdNZXRob2QgXCInICsgIG1ldGhvZCArICdcIiBkb2VzIG5vdCBleGlzdCBpbiBTdGlja2xyJyk7XG4gICAgICAgIH0gICAgIFxuICAgIH1cbn0pKGpRdWVyeSk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9hc3NldHMvanMvanF1ZXJ5LnN0aWNrbHIuanMiXSwic291cmNlUm9vdCI6IiJ9