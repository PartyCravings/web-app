!function(t){function i(n){if(e[n])return e[n].exports;var s=e[n]={i:n,l:!1,exports:{}};return t[n].call(s.exports,s,s.exports,i),s.l=!0,s.exports}var e={};i.m=t,i.c=e,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,i){return Object.prototype.hasOwnProperty.call(t,i)},i.p="/build/",i(i.s="kil8")}({kil8:function(t,i){var e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};!function(t){t.fn.sticklr=function(i){var n={animate:!1,menuHeight:20,menuWidth:180,relativeGap:15,relativeTo:"center",showOn:"click",stickTo:"left",tabHeight:16,tabWidth:16},s={init:function(i){return this.each(function(){var e=t(this),r=t.extend({},n,i);r.animate&&t(window).height()<=320&&(r.animate=!1);var o=a.calcTop(r.animate,r.relativeTo,r.relativeGap,e.height());e.hasClass("sticklr")||e.addClass("sticklr"),"right"==r.stickTo&&e.addClass("sticklr-right"),"hover"==r.showOn&&(r.showOn="mouseenter"),e.addClass("sticklr-js").css({position:r.animate?"absolute":"fixed",top:o,width:parseInt(r.tabWidth,10)+8}).data("props",r).find('a[href="#"]').bind("click",function(t){t.preventDefault()}).end().children("li").css({height:parseInt(r.tabHeight,10)+8}).children("a").css({height:r.tabHeight,width:r.tabWidth}).bind("click",function(){s.hide()}).bind(r.showOn,function(i){if(!t(this).siblings().hasClass("sticklr-active")){s.hide();var e=t(this).siblings("ul").length?'class="sticklr-arrow" style="'+("left"===r.stickTo?"left:":"right:")+(parseInt(r.tabWidth,10)+8)+"px;top:"+parseInt(r.tabHeight,10)/2+'px"':"";t(this).append("<span "+e+"></span>").siblings().each(function(){t(this).css({"margin-left":parseInt(r.tabWidth,10)+34,"margin-right":parseInt(r.tabWidth,10)+34,opacity:0,position:"absolute",top:0}).show();var i=0,e=t(this).height()+t(this).offset().top,n=t(window).height()+t(window).scrollTop();e>n&&(i=parseInt(t(this).css("top"),10)-(e-n)),t(this).css({top:i}).animate({"margin-left":parseInt(r.tabWidth,10)+4,"margin-right":parseInt(r.tabWidth,10)+4,opacity:1},200)}).addClass("sticklr-active")}"#"===t(this).attr("href")&&i.preventDefault()});for(var c=2;c<10;c++){var h=23+c+parseInt(r.menuWidth,10)*(c-2),l="auto";"right"===r.stickTo&&(l=h,h="auto"),e.find("li").find("ul:nth-child("+c+")").each(function(){var i=parseInt(t(this).attr("data-width"),10)||r.menuWidth;t(this).css({left:h,right:l,width:i}).children("li").css("min-height",r.menuHeight).children("a").css("min-height",r.menuHeight)})}})},hide:function(){var i=t(".sticklr-active").css("margin-left"),e=t(".sticklr-active").css("margin-right");t(".sticklr-active").animate({"margin-left":parseInt(i,10)+14,"margin-right":parseInt(e,10)+14,opacity:0},200,function(){t(this).removeClass("sticklr-active").hide()}),t("span.sticklr-arrow").remove()}},a={calcTop:function(i,e,n,s){var a=t(window).scrollTop(),r=t(window).height(),o=r-s;return/top|high/i.test(e)?n+(i?a:0):/bottom|low|ground/i.test(e)?(i?a+o:o)-n:i?a+o/2:o/2},fixPos:function(){t(".sticklr").each(function(){var i=t(this).data("props").relativeTo,e=t(this).data("props").relativeGap,n=t(this).height();"absolute"===t(this).css("position")?t(this).stop().animate({top:a.calcTop(!0,i,e,n)},1e3):t(this).css({top:a.calcTop(!1,i,e,n)})})}};return t(window).bind("resize",a.fixPos),t(window).bind("scroll",a.fixPos),t(document).bind("click",function(i){t(i.target).parents().hasClass("sticklr")||s.hide()}),s[i]&&"init"!=i.toLowerCase()?s[i].apply(this,Array.prototype.slice.call(arguments,1)):"object"!==(void 0===i?"undefined":e(i))&&i?void t.error('Method "'+i+'" does not exist in Sticklr'):s.init.apply(this,arguments)}}(jQuery)}});