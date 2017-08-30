import $ from 'jquery';
import 'semantic-ui/dist/semantic.js';
import 'semantic-ui/dist/semantic.css';
import './jquery.sticklr.dark.css';
import './font.quicksand.css';
import './jquery.jssor.css';
import './jquery.lazyload.js';
import './jquery.jssor.min.js';
import './jquery.sticklr.js';

$(document).ready( function() { $('iframe').remove(); });
$(document).ready(function($) {

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

    var slider = new $JssorSlider$("slider-bottom", sliderOptions);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1920;

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
});
$(document).ready(function($) {

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

    var MAX_WIDTH = 1920;

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
});

$("img.lazy").lazyload({
    effect: "fadeIn"
});
$(".ui.embed").embed();
$('.menu .item').tab();
$('.ui.dropdown').dropdown({
    on: 'hover'
});
$('.ui.checkbox')
           .checkbox();
$('#navigation')
    .sticky({
        offset: 0,
        context: '#context'
    });
$(document).ready(function() {
    $('#example-1').sticklr({
        showOn: 'hover',
        stickTo: 'right',
    });
});