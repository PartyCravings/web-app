var __wpo = {"assets":{"main":[],"additional":["/","https://fonts.googleapis.com/css?family=Quicksand:400,700,400italic,700italic&subset=latin"],"optional":[]},"externals":["/","https://fonts.googleapis.com/css?family=Quicksand:400,700,400italic,700italic&subset=latin"],"hashesMap":{},"navigateFallbackURL":"/","navigateFallbackForRedirects":false,"strategy":"changed","responseStrategy":"cache-first","version":"2017-11-25 22:51:56","name":"webpack-offline:partycravings","pluginVersion":"4.8.4","relativePaths":false};

!function(n){function e(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return n[r].call(i.exports,i,i.exports,e),i.l=!0,i.exports}var t={};e.m=n,e.c=t,e.d=function(n,t,r){e.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:r})},e.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(t,"a",t),t},e.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},e.p="https://assets.partycravings.com/build/",e(e.s="fMJ2")}({fMJ2:function(n,e,t){"use strict";function r(n,e){return caches.match(n,{cacheName:e}).then(function(t){return a()?t:c(t).then(function(t){return caches.open(e).then(function(e){return e.put(n,t)}).then(function(){return t})})}).catch(function(){})}function i(n,e){return n+(-1!==n.indexOf("?")?"&":"?")+"__uncache="+encodeURIComponent(e)}function o(n){return"navigate"===n.mode||n.headers.get("Upgrade-Insecure-Requests")||-1!==(n.headers.get("Accept")||"").indexOf("text/html")}function a(n){return!n||!n.redirected||!n.ok||"opaqueredirect"===n.type}function c(n){return a(n)?Promise.resolve(n):("body"in n?Promise.resolve(n.body):n.blob()).then(function(e){return new Response(e,{headers:n.headers,status:n.status})})}function u(n){return Object.keys(n).reduce(function(e,t){return e[t]=n[t],e},{})}function s(n,e){e.forEach(function(n){})}if(function(){var n=ExtendableEvent.prototype.waitUntil,e=FetchEvent.prototype.respondWith,t=new WeakMap;ExtendableEvent.prototype.waitUntil=function(e){var r=this,i=t.get(r);return i?void i.push(Promise.resolve(e)):(i=[Promise.resolve(e)],t.set(r,i),n.call(r,Promise.resolve().then(function n(){var e=i.length;return Promise.all(i.map(function(n){return n.catch(function(){})})).then(function(){return i.length!=e?n():(t.delete(r),Promise.all(i))})})))},FetchEvent.prototype.respondWith=function(n){return this.waitUntil(n),e.call(this,n)}}(),void 0===f)var f=!1;!function(n,e){function t(){if(!P.additional.length)return Promise.resolve();var n=void 0;return n="changed"===b?f("additional"):a("additional"),n.catch(function(n){})}function a(e){var t=P[e];return caches.open(S).then(function(e){return g(e,t,{bust:n.version,request:n.prefetchRequest})}).then(function(){s("Cached assets: "+e,t)}).catch(function(n){throw n})}function f(e){return h().then(function(t){if(!t)return a(e);var r=t[0],i=t[1],o=t[2],c=o.hashmap,u=o.version;if(!o.hashmap||u===n.version)return a(e);var f=Object.keys(c).map(function(n){return c[n]}),l=i.map(function(n){var e=new URL(n.url);return e.search="",e.hash="",e.toString()}),h=P[e],d=[],p=h.filter(function(n){return-1===l.indexOf(n)||-1===f.indexOf(n)});Object.keys(U).forEach(function(n){var e=U[n];if(-1!==h.indexOf(e)&&-1===p.indexOf(e)&&-1===d.indexOf(e)){var t=c[n];t&&-1!==l.indexOf(t)?d.push([t,e]):p.push(e)}}),s("Changed assets: "+e,p),s("Moved assets: "+e,d);var v=Promise.all(d.map(function(n){return r.match(n[0]).then(function(e){return[n[1],e]})}));return caches.open(S).then(function(e){var t=v.then(function(n){return Promise.all(n.map(function(n){return e.put(n[0],n[1])}))});return Promise.all([t,g(e,p,{bust:n.version,request:n.prefetchRequest})])})})}function l(){return caches.keys().then(function(n){var e=n.map(function(n){if(0===n.indexOf(L)&&0!==n.indexOf(S))return caches.delete(n)});return Promise.all(e)})}function h(){return caches.keys().then(function(n){for(var e=n.length,t=void 0;e--&&(t=n[e],0!==t.indexOf(L)););if(t){var r=void 0;return caches.open(t).then(function(n){return r=n,n.match(new URL(W,location).toString())}).then(function(n){if(n)return Promise.all([r,r.keys(),n.json()])})}})}function d(){return caches.open(S).then(function(e){var t=new Response(JSON.stringify({version:n.version,hashmap:U}));return e.put(new URL(W,location).toString(),t)})}function p(n,e,t){return r(t,S).then(function(r){return r||fetch(n.request).then(function(r){return r.ok?(t===e&&function(){var t=r.clone(),i=caches.open(S).then(function(n){return n.put(e,t)}).then(function(){});n.waitUntil(i)}(),r):r})})}function v(n,e,t){return fetch(n.request).then(function(n){if(n.ok)return n;throw new Error("Response is not ok")}).catch(function(){return r(t,S)})}function m(n){return n.catch(function(){}).then(function(n){var e=n&&n.ok,t=n&&"opaqueredirect"===n.type;return e||t&&!M?n:r(_,S)})}function g(n,e,t){var r=!1!==t.allowLoaders,o=t&&t.bust,a=t.request||{credentials:"omit",mode:"cors"};return Promise.all(e.map(function(n){return o&&(n=i(n,o)),fetch(n,a).then(c)})).then(function(i){if(i.some(function(n){return!n.ok}))return Promise.reject(new Error("Wrong response status"));var o=[],a=i.map(function(t,i){return r&&o.push(w(e[i],t)),n.put(e[i],t)});return o.length?function(){var r=u(t);r.allowLoaders=!1;var i=a;a=Promise.all(o).then(function(t){var o=[].concat.apply([],t);return e.length&&(i=i.concat(g(n,o,r))),Promise.all(i)})}():a=Promise.all(a),a})}function w(n,e){var t=Object.keys(E).map(function(t){if(-1!==E[t].indexOf(n)&&x[t])return x[t](e.clone())}).filter(function(n){return!!n});return Promise.all(t).then(function(n){return[].concat.apply([],n)})}function y(n){var e=n.url,t=new URL(e),r=void 0;r="navigate"===n.mode?"navigate":t.origin===location.origin?"same-origin":"cross-origin";for(var i=0;i<O.length;i++){var o=O[i];if(o&&(!o.requestTypes||-1!==o.requestTypes.indexOf(r))){var a=void 0;if((a="function"==typeof o.match?o.match(t,n):e.replace(o.match,o.to))&&a!==e)return a}}}var x=e.loaders,O=e.cacheMaps,b=n.strategy,k=n.responseStrategy,P=n.assets,E=n.loaders||{},U=n.hashesMap,q=n.externals,L=n.name,R=n.version,S=L+":"+R,W="__offline_webpack__data";!function(){Object.keys(P).forEach(function(n){P[n]=P[n].map(function(n){var e=new URL(n,location);return e.hash="",-1===q.indexOf(n)&&(e.search=""),e.toString()})}),Object.keys(E).forEach(function(n){E[n]=E[n].map(function(n){var e=new URL(n,location);return e.hash="",-1===q.indexOf(n)&&(e.search=""),e.toString()})}),U=Object.keys(U).reduce(function(n,e){var t=new URL(U[e],location);return t.search="",t.hash="",n[e]=t.toString(),n},{}),q=q.map(function(n){var e=new URL(n,location);return e.hash="",e.toString()})}();var j=[].concat(P.main,P.additional,P.optional),_=n.navigateFallbackURL,M=n.navigateFallbackForRedirects;self.addEventListener("install",function(n){var e=void 0;e="changed"===b?f("main"):a("main"),n.waitUntil(e)}),self.addEventListener("activate",function(n){var e=t();e=e.then(d),e=e.then(l),e=e.then(function(){if(self.clients&&self.clients.claim)return self.clients.claim()}),n.waitUntil(e)}),self.addEventListener("fetch",function(n){var e=new URL(n.request.url);e.hash="";var t=e.toString();-1===q.indexOf(t)&&(e.search="",t=e.toString());var r="GET"===n.request.method,i=-1!==j.indexOf(t),a=t;if(!i){var c=y(n.request);c&&(a=c,i=!0)}if(!i&&r&&_&&o(n.request))return void n.respondWith(m(fetch(n.request)));if(!i||!r)return void(e.origin!==location.origin&&-1!==navigator.userAgent.indexOf("Firefox/44.")&&n.respondWith(fetch(n.request)));var u=void 0;u="network-first"===k?v(n,t,a):p(n,t,a),_&&o(n.request)&&(u=m(u)),n.respondWith(u)}),self.addEventListener("message",function(n){var e=n.data;if(e)switch(e.action){case"skipWaiting":self.skipWaiting&&self.skipWaiting()}})}(__wpo,{loaders:{},cacheMaps:[]}),n.exports=t("t3S7")},t3S7:function(n,e){self.addEventListener("install",function(){self.skipWaiting()}),self.addEventListener("push",function(n){var e=n.data?n.data.text():"no payload";e=JSON.parse(e);var t=e.title,r=e.body,i=e.icon,o=e.tag;n.waitUntil(self.registration.showNotification(t,{body:r,icon:i,tag:o}))}),self.addEventListener("notificationclick",function(n){n.waitUntil(clients.matchAll({type:"window"}).then(function(e){for(var t=0;t<e.length;t++){var r=e[t];if("focus"in r)return r.focus()}if(0===e.length&&clients.openWindow)return clients.openWindow(n.url)})),n.notification.close()})}});