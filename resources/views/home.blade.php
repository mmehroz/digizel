@extends('layouts.app')


@section('content')
  <section id="hero-sec">
        <div class="row">
            <div class="col-xl-6 hero-left-sec">
                <h2>Create a Positive Impact & Image Online: Digizel help you in rising as a brand in the competitive industry!! </h2>
                <div class="hero-sec-btn">
                    <div class="updated-btnn">
                <a href="https://digizel.com/pricing"  class="btn-3 yellow greenbtn"><span>View Packages</span></a>
                    </div>
                 
                <div class="updated-btnn">
               <a href="tel:(866) 313-1877"  class="btn-3 blue-border greenbtn"><span>Schedule a Call</span></a>
               </div> 
                 
                 
                  <!-- <a href="https://digizel.com/pricing" class="header-btn hero-pkg-btn site-button site-angle"><p>View Packages
                  &nbsp; <img src="{{asset('public/assets/img/imgpshblue.png')}}" alt="icon"  loading="lazy">
                   </p></a> -->
                  
                   <!-- <a href="tel:2812-010-313" class=" header-btn site-button site-angle"><p>Schedule a Call &nbsp; <img
                                src="{{asset('public/assets/img/imgpshblue.png')}}" alt="icon" loading="lazy">
                        </p></a>-->
                </div>

                <div class="hero-sec-tech">
                    <img src="{{asset('public/assets/img/technologies.svg')}}" class="img-fluid" alt="technologies" loading="lazy">
                </div>

            </div>

            <div class="col-xl-6 hero-right-sec">

                <div>
    </div>
                
            </div>
        </div>
    </section>

<div id="player-overlay">
  <video   id="backgroundd-video" autoplay muted >
    <source src="{{asset('public/assets/img/home.m4v')}}" type="video/mp4"/ loading="lazy">
  </video>    
</div>



    <section id="scrool-arrow">
        <a href="#second-sec"> <img src="{{asset('public/assets/img/arrow down.png')}}" class="img-fluid" alt="arrow"> </a>
    </section>
  
  
  <section id="second-sec">
        <div class="row">
            <div class="col-lg-6 second-left-col">
                <h2>
                    We Make the Best Websites For Your brand at the most affordable price
                </h2>
                <p>We facilitate our customers with the most effective foot forward in their niche market. We tend to
                    carve styles that represent your complete brand in the best manner. With us,
                    you will get distinctive style which will create your complete stand except for many different
                    similar brands.</p>

             <form action="{{route('website.form')}}" method="post" id="website-form">

                    @csrf

                    <div class="row">

                        <div class="col-md-8 form-text-filed">

                            @if(session()->has('website_message'))
                                <div class="alert alert-success success_message">
                                    {{ session()->get('website_message') }}
                                </div>
                            @endif
                            <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success d-none" id="pop_msg_div">
                                    <span id="pop_res_message"></span>
                                </div>
                            </div>
                        </div>
                            <input type="text" name="website_name" class="footer-form-field homs-tp m-t-2"
                                   placeholder="Enter your website" required>

                                <br><br>

                            @error('website_name')
                            <div class="alert alert-danger m-t-2">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-md-4 home-tips">
                          <div class="updated-btnn hometop-form">
      <button   id="" type="submit" class="btn-3 blue greenbtn"><span>Send Me a Quote</span></button>
      </div>
                    </div>
                </div>
                </form>
      

 


            </div>
            <div class="col-lg-6 second-right-col sec-col-img-bg">
    <svg id="eQ5WT9uwl871" loading="lazy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 667 420" shape-rendering="geometricPrecision" text-rendering="geometricPrecision"><circle id="eQ5WT9uwl872" style="mix-blend-mode:darken;isolation:isolate" r="210" transform="matrix(1 0 0 1 210 210)" fill="rgb(0,255,132)" stroke="none" stroke-width="1"></circle><circle id="eQ5WT9uwl873" r="159" transform="matrix(1 0 0 1 389 222.310837)" fill="none" stroke="rgb(0,76,255)" stroke-width="2" stroke-dasharray="15,17"></circle><circle id="eQ5WT9uwl874" r="139" transform="matrix(1 0 0 1 528 210)" fill="none" stroke="rgb(165,165,165)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1,10"></circle><g id="eQ5WT9uwl875" transform="matrix(1 0 0 1 -968 -1010)"><text id="eQ5WT9uwl876" dx="0" dy="0" font-family="&quot;Lato&quot;" font-size="24" transform="matrix(1 0 0 1 1405 1230)" fill="rgb(0,0,0)" stroke="none" stroke-width="1"><tspan id="eQ5WT9uwl877" x="0" y="0" font-family="Lato" font-size="24" fill="rgb(0,0,0)" stroke="none" stroke-width="1">Development</tspan></text><text id="eQ5WT9uwl878" dx="0" dy="0" font-family="&quot;Lato&quot;" font-size="24" transform="matrix(1 0 0 1 1226 1230)" fill="rgb(0,0,0)" stroke="none" stroke-width="0"><tspan id="eQ5WT9uwl879" x="0" y="0" font-family="Lato" font-size="24" fill="rgb(0,0,0)" stroke="none" stroke-width="1">Design</tspan></text><text id="eQ5WT9uwl8710" dx="0" dy="0" font-family="&quot;Lato&quot;" font-size="24" transform="matrix(1 0 0 1 1018 1230)" fill="rgb(0,0,0)" stroke="none" stroke-width="1"><tspan id="eQ5WT9uwl8711" x="0" y="0" font-family="Lato" font-size="24" fill="rgb(0,0,0)" stroke="none" stroke-width="1">Strategize</tspan></text></g><script>!function(t,n){"object"==typeof exports&amp;&amp;"undefined"!=typeof module?module.exports=n():"function"==typeof define&amp;&amp;define.amd?define(n):(t="undefined"!=typeof globalThis?globalThis:t||self).__SVGATOR_PLAYER__=n()}(this,(function(){"use strict";function t(n){return(t="function"==typeof Symbol&amp;&amp;"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&amp;&amp;"function"==typeof Symbol&amp;&amp;t.constructor===Symbol&amp;&amp;t!==Symbol.prototype?"symbol":typeof t})(n)}function n(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}function r(t,n){for(var r=0;r&lt;n.length;r++){var e=n[r];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&amp;&amp;(e.writable=!0),Object.defineProperty(t,e.key,e)}}function e(t,n,e){return n&amp;&amp;r(t.prototype,n),e&amp;&amp;r(t,e),t}function i(t){return(i=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function o(t,n){return(o=Object.setPrototypeOf||function(t,n){return t.__proto__=n,t})(t,n)}function u(t,n){return!n||"object"!=typeof n&amp;&amp;"function"!=typeof n?function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t):n}function a(t){var n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,e=i(t);if(n){var o=i(this).constructor;r=Reflect.construct(e,arguments,o)}else r=e.apply(this,arguments);return u(this,r)}}function l(t,n,r){return(l="undefined"!=typeof Reflect&amp;&amp;Reflect.get?Reflect.get:function(t,n,r){var e=function(t,n){for(;!Object.prototype.hasOwnProperty.call(t,n)&amp;&amp;null!==(t=i(t)););return t}(t,n);if(e){var o=Object.getOwnPropertyDescriptor(e,n);return o.get?o.get.call(r):o.value}})(t,n,r||t)}var f=s(Math.pow(10,-6));function s(t){var n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:6;if(Number.isInteger(t))return t;var r=Math.pow(10,n);return Math.round((+t+Number.EPSILON)*r)/r}function c(t,n){var r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:f;return Math.abs(t-n)&lt;r}var h=Math.PI/180;function v(t){return t}function y(t,n,r){var e=1-r;return 3*r*e*(t*e+n*r)+r*r*r}function d(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:0,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:0,r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:1,e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]?arguments[3]:1;return t&lt;0||t&gt;1||r&lt;0||r&gt;1?null:c(t,n)&amp;&amp;c(r,e)?v:function(i){if(i&lt;=0)return t&gt;0?i*n/t:0===n&amp;&amp;r&gt;0?i*e/r:0;if(i&gt;=1)return r&lt;1?1+(i-1)*(e-1)/(r-1):1===r&amp;&amp;t&lt;1?1+(i-1)*(n-1)/(t-1):1;for(var o,u=0,a=1;u&lt;a;){var l=y(t,r,o=(u+a)/2);if(c(i,l))break;l&lt;i?u=o:a=o}return y(n,e,o)}}function g(){return 1}function p(t){return 1===t?1:0}function m(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:1,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:0;if(1===t){if(0===n)return p;if(1===n)return g}var r=1/t;return function(t){return t&gt;=1?1:(t+=n*r)-t%r}}function b(t,n,r){return t&gt;=.5?r:n}function w(t,n,r){return 0===t||n===r?n:t*(r-n)+n}function x(t,n,r){var e=w(t,n,r);return e&lt;=0?0:e}function k(t,n,r){return 0===t?n:1===t?r:{x:w(t,n.x,r.x),y:w(t,n.y,r.y)}}function A(t,n,r){var e=function(t,n,r){return Math.round(w(t,n,r))}(t,n,r);return e&lt;=0?0:e&gt;=255?255:e}function S(t,n,r){return 0===t?n:1===t?r:{r:A(t,n.r,r.r),g:A(t,n.g,r.g),b:A(t,n.b,r.b),a:w(t,null==n.a?1:n.a,null==r.a?1:r.a)}}function _(t,n,r){if(0===t)return n;if(1===t)return r;var e=n.length;if(e!==r.length)return b(t,n,r);for(var i=[],o=0;o&lt;e;o++)i.push(S(t,n[o],r[o]));return i}function O(t,n){for(var r=[],e=0;e&lt;t;e++)r.push(n);return r}function M(t,n){if(--n&lt;=0)return t;var r=(t=Object.assign([],t)).length;do{for(var e=0;e&lt;r;e++)t.push(t[e])}while(--n&gt;0);return t}var j,P=function(){function t(r){n(this,t),this.list=r,this.length=r.length}return e(t,[{key:"setAttribute",value:function(t,n){for(var r=this.list,e=0;e&lt;this.length;e++)r[e].setAttribute(t,n)}},{key:"removeAttribute",value:function(t){for(var n=this.list,r=0;r&lt;this.length;r++)n[r].removeAttribute(t)}},{key:"style",value:function(t,n){for(var r=this.list,e=0;e&lt;this.length;e++)r[e].style[t]=n}}]),t}(),I=/-./g,E=function(t,n){return n.toUpperCase()};function F(t){return"function"==typeof t?t:b}function N(t){return t?"function"==typeof t?t:Array.isArray(t)?function(t){var n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:v;if(!Array.isArray(t))return n;switch(t.length){case 1:return m(t[0])||n;case 2:return m(t[0],t[1])||n;case 4:return d(t[0],t[1],t[2],t[3])||n}return n}(t,null):function(t,n){var r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:v;switch(t){case"linear":return v;case"steps":return m(n.steps||1,n.jump||0)||r;case"bezier":case"cubic-bezier":return d(n.x1||0,n.y1||0,n.x2||0,n.y2||0)||r}return r}(t.type,t.value,null):null}function B(t,n,r){var e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]&amp;&amp;arguments[3],i=n.length-1;if(t&lt;=n[0].t)return e?[0,0,n[0].v]:n[0].v;if(t&gt;=n[i].t)return e?[i,1,n[i].v]:n[i].v;var o,u=n[0],a=null;for(o=1;o&lt;=i;o++){if(!(t&gt;n[o].t)){a=n[o];break}u=n[o]}return null==a?e?[i,1,n[i].v]:n[i].v:u.t===a.t?e?[o,1,a.v]:a.v:(t=(t-u.t)/(a.t-u.t),u.e&amp;&amp;(t=u.e(t)),e?[o,t,r(t,u.v,a.v)]:r(t,u.v,a.v))}function R(t,n){var r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:null;return t&amp;&amp;t.length?"function"!=typeof n?null:("function"!=typeof r&amp;&amp;(r=null),function(e){var i=B(e,t,n);return null!=i&amp;&amp;r&amp;&amp;(i=r(i)),i}):null}function q(t,n){return t.t-n.t}function T(n,r,e,i,o){var u,a="@"===e[0],l="#"===e[0],f=j[e],s=b;switch(a?(u=e.substr(1),e=u.replace(I,E)):l&amp;&amp;(e=e.substr(1)),t(f)){case"function":if(s=f(i,o,B,N,e,a,r,n),l)return s;break;case"string":s=R(i,F(f));break;case"object":if((s=R(i,F(f.i),f.f))&amp;&amp;"function"==typeof f.u)return f.u(r,s,e,a,n)}return s?function(t,n,r){var e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]&amp;&amp;arguments[3];if(e)return t instanceof P?function(e){return t.style(n,r(e))}:function(e){return t.style[n]=r(e)};if(Array.isArray(n)){var i=n.length;return function(e){var o=r(e);if(null==o)for(var u=0;u&lt;i;u++)t[u].removeAttribute(n);else for(var a=0;a&lt;i;a++)t[a].setAttribute(n,o)}}return function(e){var i=r(e);null==i?t.removeAttribute(n):t.setAttribute(n,i)}}(r,e,s,a):null}function L(n,r,e,i){if(!i||"object"!==t(i))return null;var o=null,u=null;return Array.isArray(i)?u=function(t){if(!t||!t.length)return null;for(var n=0;n&lt;t.length;n++)t[n].e&amp;&amp;(t[n].e=N(t[n].e));return t.sort(q)}(i):(u=i.keys,o=i.data||null),u?T(n,r,e,u,o):null}function C(t,n,r){if(!r)return null;var e=[];for(var i in r)if(r.hasOwnProperty(i)){var o=L(t,n,i,r[i]);o&amp;&amp;e.push(o)}return e.length?e:null}function z(t,n){if(!n.duration||n.duration&lt;0)return null;var r=function(t,n){if(!n)return null;var r=[];if(Array.isArray(n))for(var e=n.length,i=0;i&lt;e;i++){var o=n[i];if(2===o.length){var u=null;if("string"==typeof o[0])u=t.getElementById(o[0]);else if(Array.isArray(o[0])){u=[];for(var a=0;a&lt;o[0].length;a++)if("string"==typeof o[0][a]){var l=t.getElementById(o[0][a]);l&amp;&amp;u.push(l)}u=u.length?1===u.length?u[0]:new P(u):null}if(u){var f=C(t,u,o[1]);f&amp;&amp;(r=r.concat(f))}}}else for(var s in n)if(n.hasOwnProperty(s)){var c=t.getElementById(s);if(c){var h=C(t,c,n[s]);h&amp;&amp;(r=r.concat(h))}}return r.length?r:null}(t,n.elements);return r?function(t,n){var r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:1/0,e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]?arguments[3]:1,i=arguments.length&gt;4&amp;&amp;void 0!==arguments[4]&amp;&amp;arguments[4],o=arguments.length&gt;5&amp;&amp;void 0!==arguments[5]?arguments[5]:1,u=t.length,a=e&gt;0?n:0;i&amp;&amp;r%2==0&amp;&amp;(a=n-a);var l=null;return function(f,s){var c=f%n,h=1+(f-c)/n;s*=e,i&amp;&amp;h%2==0&amp;&amp;(s=-s);var v=!1;if(h&gt;r)c=a,v=!0,-1===o&amp;&amp;(c=e&gt;0?0:n);else if(s&lt;0&amp;&amp;(c=n-c),c===l)return!1;l=c;for(var y=0;y&lt;u;y++)t[y](c);return v}}(r,n.duration,n.iterations||1/0,n.direction||1,!!n.alternate,n.fill||1):null}Number.isInteger||(Number.isInteger=function(t){return"number"==typeof t&amp;&amp;isFinite(t)&amp;&amp;Math.floor(t)===t}),Number.EPSILON||(Number.EPSILON=2220446049250313e-31);var D=function(){function t(r,e){var i=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:{};n(this,t),this._id=0,this._running=!1,this._rollingBack=!1,this._animations=r,this.duration=e.duration,this.alternate=e.alternate,this.fill=e.fill,this.iterations=e.iterations,this.direction=i.direction||1,this.speed=i.speed||1,this.fps=i.fps||100,this.offset=i.offset||0,this.rollbackStartOffset=0}return e(t,[{key:"_rollback",value:function(){var t=this,n=1/0,r=null;this.rollbackStartOffset=this.offset,this._rollingBack||(this._rollingBack=!0,this._running=!0);this._id=window.requestAnimationFrame((function e(i){if(t._rollingBack){null==r&amp;&amp;(r=i);var o=i-r,u=t.rollbackStartOffset-o,a=Math.round(u*t.speed);if(a&gt;t.duration&amp;&amp;n!=1/0){var l=!!t.alternate&amp;&amp;a/t.duration%2&gt;1,f=a%t.duration;a=(f+=l?t.duration:0)||t.duration}var s=t.fps?1e3/t.fps:0,c=Math.max(0,a);if(c&lt;n-s){t.offset=c,n=c;for(var h=t._animations,v=h.length,y=0;y&lt;v;y++)h[y](c,t.direction)}var d=!1;if(t.iterations&gt;0&amp;&amp;-1===t.fill){var g=t.iterations*t.duration,p=g==a;a=p?0:a,t.offset=p?0:t.offset,d=a&gt;g}a&gt;0&amp;&amp;t.offset&gt;=a&amp;&amp;!d?t._id=window.requestAnimationFrame(e):t.stop()}}))}},{key:"_start",value:function(){var t=this,n=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:0,r=-1/0,e=null,i={},o=function o(u){t._running=!0,null==e&amp;&amp;(e=u);var a=Math.round((u-e+n)*t.speed),l=t.fps?1e3/t.fps:0;if(a&gt;r+l&amp;&amp;!t._rollingBack){t.offset=a,r=a;for(var f=t._animations,s=f.length,c=0,h=0;h&lt;s;h++)i[h]?c++:(i[h]=f[h](a,t.direction),i[h]&amp;&amp;c++);if(c===s)return void t._stop()}t._id=window.requestAnimationFrame(o)};this._id=window.requestAnimationFrame(o)}},{key:"_stop",value:function(){this._id&amp;&amp;window.cancelAnimationFrame(this._id),this._running=!1,this._rollingBack=!1}},{key:"play",value:function(){!this._rollingBack&amp;&amp;this._running||(this._rollingBack=!1,this.rollbackStartOffset&gt;this.duration&amp;&amp;(this.offset=this.rollbackStartOffset-(this.rollbackStartOffset-this.offset)%this.duration,this.rollbackStartOffset=0),this._start(this.offset))}},{key:"stop",value:function(){this._stop(),this.offset=0,this.rollbackStartOffset=0;var t=this.direction,n=this._animations;window.requestAnimationFrame((function(){for(var r=0;r&lt;n.length;r++)n[r](0,t)}))}},{key:"reachedToEnd",value:function(){return this.iterations&gt;0&amp;&amp;this.offset&gt;=this.iterations*this.duration}},{key:"restart",value:function(){this._stop(),this.offset=0,this._start()}},{key:"pause",value:function(){this._stop()}},{key:"reverse",value:function(){this.direction=-this.direction}}],[{key:"build",value:function(n,r){return(n=function(t,n){if(j=n,!t||!t.root||!Array.isArray(t.animations))return null;for(var r=document.getElementsByTagName("svg"),e=!1,i=0;i&lt;r.length;i++)if(r[i].id===t.root&amp;&amp;!r[i].svgatorAnimation){(e=r[i]).svgatorAnimation=!0;break}if(!e)return null;var o=t.animations.map((function(t){return z(e,t)})).filter((function(t){return!!t}));return o.length?{element:e,animations:o,animationSettings:t.animationSettings,options:t.options||void 0}:null}(n,r))?{el:n.element,options:n.options||{},player:new t(n.animations,n.animationSettings,n.options)}:null}}]),t}();function Q(t){return s(t)+""}function U(t){var n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:" ";return t&amp;&amp;t.length?t.map(Q).join(n):""}function V(t){return t?null==t.a||t.a&gt;=1?"rgb("+t.r+","+t.g+","+t.b+")":"rgba("+t.r+","+t.g+","+t.b+","+t.a+")":"transparent"}!function(){for(var t=0,n=["ms","moz","webkit","o"],r=0;r&lt;n.length&amp;&amp;!window.requestAnimationFrame;++r)window.requestAnimationFrame=window[n[r]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[n[r]+"CancelAnimationFrame"]||window[n[r]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(n){var r=Date.now(),e=Math.max(0,16-(r-t)),i=window.setTimeout((function(){n(r+e)}),e);return t=r+e,i},window.cancelAnimationFrame=window.clearTimeout)}();var G={f:null,i:function(t,n,r){return 0===t?n:1===t?r:{x:x(t,n.x,r.x),y:x(t,n.y,r.y)}},u:function(t,n){return function(r){var e=n(r);t.setAttribute("rx",Q(e.x)),t.setAttribute("ry",Q(e.y))}}},H={f:null,i:function(t,n,r){return 0===t?n:1===t?r:{width:x(t,n.width,r.width),height:x(t,n.height,r.height)}},u:function(t,n){return function(r){var e=n(r);t.setAttribute("width",Q(e.width)),t.setAttribute("height",Q(e.height))}}},Y=Math.sin,Z=Math.cos,J=Math.acos,K=Math.asin,W=Math.tan,X=Math.atan2,$=Math.PI/180,tt=180/Math.PI,nt=Math.sqrt,rt=function(){function t(){var r=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:1,e=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:0,i=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:0,o=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]?arguments[3]:1,u=arguments.length&gt;4&amp;&amp;void 0!==arguments[4]?arguments[4]:0,a=arguments.length&gt;5&amp;&amp;void 0!==arguments[5]?arguments[5]:0;n(this,t),this.m=[r,e,i,o,u,a],this.i=null,this.w=null,this.s=null}return e(t,[{key:"determinant",get:function(){var t=this.m;return t[0]*t[3]-t[1]*t[2]}},{key:"isIdentity",get:function(){if(null===this.i){var t=this.m;this.i=1===t[0]&amp;&amp;0===t[1]&amp;&amp;0===t[2]&amp;&amp;1===t[3]&amp;&amp;0===t[4]&amp;&amp;0===t[5]}return this.i}},{key:"point",value:function(t,n){var r=this.m;return{x:r[0]*t+r[2]*n+r[4],y:r[1]*t+r[3]*n+r[5]}}},{key:"translateSelf",value:function(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:0,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:0;if(!t&amp;&amp;!n)return this;var r=this.m;return r[4]+=r[0]*t+r[2]*n,r[5]+=r[1]*t+r[3]*n,this.w=this.s=this.i=null,this}},{key:"rotateSelf",value:function(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:0;if(t%=360){var n=Y(t*=$),r=Z(t),e=this.m,i=e[0],o=e[1];e[0]=i*r+e[2]*n,e[1]=o*r+e[3]*n,e[2]=e[2]*r-i*n,e[3]=e[3]*r-o*n,this.w=this.s=this.i=null}return this}},{key:"scaleSelf",value:function(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:1,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:1;if(1!==t||1!==n){var r=this.m;r[0]*=t,r[1]*=t,r[2]*=n,r[3]*=n,this.w=this.s=this.i=null}return this}},{key:"skewSelf",value:function(t,n){if(n%=360,(t%=360)||n){var r=this.m,e=r[0],i=r[1],o=r[2],u=r[3];t&amp;&amp;(t=W(t*$),r[2]+=e*t,r[3]+=i*t),n&amp;&amp;(n=W(n*$),r[0]+=o*n,r[1]+=u*n),this.w=this.s=this.i=null}return this}},{key:"resetSelf",value:function(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:1,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:0,r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:0,e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]?arguments[3]:1,i=arguments.length&gt;4&amp;&amp;void 0!==arguments[4]?arguments[4]:0,o=arguments.length&gt;5&amp;&amp;void 0!==arguments[5]?arguments[5]:0,u=this.m;return u[0]=t,u[1]=n,u[2]=r,u[3]=e,u[4]=i,u[5]=o,this.w=this.s=this.i=null,this}},{key:"recomposeSelf",value:function(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:null,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:null,r=arguments.length&gt;2&amp;&amp;void 0!==arguments[2]?arguments[2]:null,e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]?arguments[3]:null,i=arguments.length&gt;4&amp;&amp;void 0!==arguments[4]?arguments[4]:null;return this.isIdentity||this.resetSelf(),t&amp;&amp;(t.x||t.y)&amp;&amp;this.translateSelf(t.x,t.y),n&amp;&amp;this.rotateSelf(n),r&amp;&amp;(r.x&amp;&amp;this.skewSelf(r.x,0),r.y&amp;&amp;this.skewSelf(0,r.y)),!e||1===e.x&amp;&amp;1===e.y||this.scaleSelf(e.x,e.y),i&amp;&amp;(i.x||i.y)&amp;&amp;this.translateSelf(i.x,i.y),this}},{key:"decompose",value:function(){var t=arguments.length&gt;0&amp;&amp;void 0!==arguments[0]?arguments[0]:0,n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:0,r=this.m,e=r[0]*r[0]+r[1]*r[1],i=[[r[0],r[1]],[r[2],r[3]]],o=nt(e);if(0===o)return{origin:{x:s(r[4]),y:s(r[5])},translate:{x:s(t),y:s(n)},scale:{x:0,y:0},skew:{x:0,y:0},rotate:0};i[0][0]/=o,i[0][1]/=o;var u=r[0]*r[3]-r[1]*r[2]&lt;0;u&amp;&amp;(o=-o);var a=i[0][0]*i[1][0]+i[0][1]*i[1][1];i[1][0]-=i[0][0]*a,i[1][1]-=i[0][1]*a;var l=nt(i[1][0]*i[1][0]+i[1][1]*i[1][1]);if(0===l)return{origin:{x:s(r[4]),y:s(r[5])},translate:{x:s(t),y:s(n)},scale:{x:s(o),y:0},skew:{x:0,y:0},rotate:0};i[1][0]/=l,i[1][1]/=l,a/=l;var f=0;return i[1][1]&lt;0?(f=J(i[1][1])*tt,i[0][1]&lt;0&amp;&amp;(f=360-f)):f=K(i[0][1])*tt,u&amp;&amp;(f=-f),a=X(a,nt(i[0][0]*i[0][0]+i[0][1]*i[0][1]))*tt,u&amp;&amp;(a=-a),{origin:{x:s(r[4]),y:s(r[5])},translate:{x:s(t),y:s(n)},scale:{x:s(o),y:s(l)},skew:{x:s(a),y:0},rotate:s(f)}}},{key:"toString",value:function(){return null===this.s&amp;&amp;(this.s="matrix("+this.m.map((function(t){return s(t)})).join(" ")+")"),this.s}}]),t}();Object.freeze({M:2,L:2,Z:0,H:1,V:1,C:6,Q:4,T:2,S:4,A:7});var et={},it=null;function ot(n){var r=function(){if(it)return it;if("object"!==("undefined"==typeof document?"undefined":t(document))||!document.createElementNS)return{};var n=document.createElementNS("http://www.w3.org/2000/svg","svg");return n&amp;&amp;n.style?(n.style.position="absolute",n.style.opacity="0.01",n.style.zIndex="-9999",n.style.left="-9999px",n.style.width="1px",n.style.height="1px",it={svg:n}):{}}().svg;if(!r)return function(t){return null};var e=document.createElementNS(r.namespaceURI,"path");e.setAttributeNS(null,"d",n),e.setAttributeNS(null,"fill","none"),e.setAttributeNS(null,"stroke","none"),r.appendChild(e);var i=e.getTotalLength();return function(t){var n=e.getPointAtLength(i*t);return{x:n.x,y:n.y}}}function ut(t){return et[t]?et[t]:et[t]=ot(t)}function at(t,n,r,e){if(!t||!e)return!1;var i=["M",t.x,t.y];if(n&amp;&amp;r&amp;&amp;(i.push("C"),i.push(n.x),i.push(n.y),i.push(r.x),i.push(r.y)),n?!r:r){var o=n||r;i.push("Q"),i.push(o.x),i.push(o.y)}return n||r||i.push("L"),i.push(e.x),i.push(e.y),i.join(" ")}function lt(t,n,r,e){var i=arguments.length&gt;4&amp;&amp;void 0!==arguments[4]?arguments[4]:1,o=at(t,n,r,e),u=ut(o);try{return u(i)}catch(t){return null}}function ft(t,n,r,e){var i=1-e;return i*i*t+2*i*e*n+e*e*r}function st(t,n,r,e){return 2*(1-e)*(n-t)+2*e*(r-n)}function ct(t,n,r,e){var i=arguments.length&gt;4&amp;&amp;void 0!==arguments[4]&amp;&amp;arguments[4],o=lt(t,n,null,r,e);return o||(o={x:ft(t.x,n.x,r.x,e),y:ft(t.y,n.y,r.y,e)}),i&amp;&amp;(o.a=ht(t,n,r,e)),o}function ht(t,n,r,e){return Math.atan2(st(t.y,n.y,r.y,e),st(t.x,n.x,r.x,e))}function vt(t,n,r,e,i){var o=i*i;return i*o*(e-t+3*(n-r))+3*o*(t+r-2*n)+3*i*(n-t)+t}function yt(t,n,r,e,i){var o=1-i;return 3*(o*o*(n-t)+2*o*i*(r-n)+i*i*(e-r))}function dt(t,n,r,e,i){var o=arguments.length&gt;5&amp;&amp;void 0!==arguments[5]&amp;&amp;arguments[5],u=lt(t,n,r,e,i);return u||(u={x:vt(t.x,n.x,r.x,e.x,i),y:vt(t.y,n.y,r.y,e.y,i)}),o&amp;&amp;(u.a=gt(t,n,r,e,i)),u}function gt(t,n,r,e,i){return Math.atan2(yt(t.y,n.y,r.y,e.y,i),yt(t.x,n.x,r.x,e.x,i))}function pt(t,n,r){return t+(n-t)*r}function mt(t,n,r){var e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]&amp;&amp;arguments[3],i={x:pt(t.x,n.x,r),y:pt(t.y,n.y,r)};return e&amp;&amp;(i.a=bt(t,n)),i}function bt(t,n){return Math.atan2(n.y-t.y,n.x-t.x)}function wt(t,n,r){var e=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]&amp;&amp;arguments[3];if(kt(n)){if(At(r))return ct(n,r.start,r,t,e)}else if(kt(r)){if(n.end)return ct(n,n.end,r,t,e)}else{if(n.end)return r.start?dt(n,n.end,r.start,r,t,e):ct(n,n.end,r,t,e);if(r.start)return ct(n,r.start,r,t,e)}return mt(n,r,t,e)}function xt(t,n,r){var e=wt(t,n,r,!0);return e.a=function(t){var n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]&amp;&amp;arguments[1];return n?t+Math.PI:t}(e.a)/h,e}function kt(t){return!t.type||"corner"===t.type}function At(t){return null!=t.start&amp;&amp;!kt(t)}var St=new rt;var _t={f:Q,i:w},Ot={f:Q,i:function(t,n,r){var e=w(t,n,r);return e&lt;=0?0:e&gt;=1?1:e}};function Mt(t,n,r,e,i,o,u,a){return n=function(t,n,r){for(var e,i,o,u=t.length-1,a={},l=0;l&lt;=u;l++)(e=t[l]).e&amp;&amp;(e.e=n(e.e)),e.v&amp;&amp;"g"===(i=e.v).t&amp;&amp;i.r&amp;&amp;(o=r.getElementById(i.r))&amp;&amp;(a[i.r]=o.querySelectorAll("stop"));return a}(t,e,a),function(e){var i,o=r(e,t,jt);return o?"c"===o.t?V(o.v):"g"===o.t?(n[o.r]&amp;&amp;function(t,n){for(var r=0,e=t.length;r&lt;e;r++)t[r].setAttribute("stop-color",V(n[r]))}(n[o.r],o.v),(i=o.r)?"url(#"+i+")":"none"):"none":"none"}}function jt(t,n,r){if(0===t)return n;if(1===t)return r;if(n&amp;&amp;r){var e=n.t;if(e===r.t)switch(n.t){case"c":return{t:e,v:S(t,n.v,r.v)};case"g":if(n.r===r.r)return{t:e,v:_(t,n.v,r.v),r:n.r}}}return b(t,n,r)}var Pt={fill:Mt,"fill-opacity":Ot,stroke:Mt,"stroke-opacity":Ot,"stroke-width":_t,"stroke-dashoffset":{f:Q,i:w},"stroke-dasharray":{f:function(t){var n=arguments.length&gt;1&amp;&amp;void 0!==arguments[1]?arguments[1]:" ";return t&amp;&amp;t.length&gt;0&amp;&amp;(t=t.map((function(t){return s(t,4)}))),U(t,n)},i:function(t,n,r){var e,i,o,u=n.length,a=r.length;if(u!==a)if(0===u)n=O(u=a,0);else if(0===a)a=u,r=O(u,0);else{var l=(o=(e=u)*(i=a)/function(t,n){for(var r;n;)r=n,n=t%n,t=r;return t||1}(e,i))&lt;0?-o:o;n=M(n,Math.floor(l/u)),r=M(r,Math.floor(l/a)),u=a=l}for(var f=[],c=0;c&lt;u;c++)f.push(s(x(t,n[c],r[c])));return f}},opacity:Ot,transform:function(n,r,e,i){if(!(n=function(n,r){if(!n||"object"!==t(n))return null;var e=!1;for(var i in n)n.hasOwnProperty(i)&amp;&amp;(n[i]&amp;&amp;n[i].length?(n[i].forEach((function(t){t.e&amp;&amp;(t.e=r(t.e))})),e=!0):delete n[i]);return e?n:null}(n,i)))return null;var o=function(t,i,o){var u=arguments.length&gt;3&amp;&amp;void 0!==arguments[3]?arguments[3]:null;return n[t]?e(i,n[t],o):r&amp;&amp;r[t]?r[t]:u};return r&amp;&amp;r.a&amp;&amp;n.o?function(t){var r=e(t,n.o,xt);return St.recomposeSelf(r,o("r",t,w,0)+r.a,o("k",t,k),o("s",t,k),o("t",t,k)).toString()}:function(t){return St.recomposeSelf(o("o",t,wt,null),o("r",t,w,0),o("k",t,k),o("s",t,k),o("t",t,k)).toString()}},r:_t,"#size":H,"#radius":G,_:function(t,n){if(Array.isArray(t))for(var r=0;r&lt;t.length;r++)this[t[r]]=n;else this[t]=n}};return function(t){!function(t,n){if("function"!=typeof n&amp;&amp;null!==n)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(n&amp;&amp;n.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),n&amp;&amp;o(t,n)}(u,t);var r=a(u);function u(){return n(this,u),r.apply(this,arguments)}return e(u,null,[{key:"build",value:function(t){var n=l(i(u),"build",this).call(this,t,Pt);if(!n)return null;n.el,n.options;var r=n.player;return function(t,n,r){t.play()}(r),r}}]),u}(D)}));
__SVGATOR_PLAYER__.build({"root":"eQ5WT9uwl871","animations":[{"duration":3000,"direction":1,"iterations":1,"fill":1,"alternate":false,"speed":1,"elements":{"eQ5WT9uwl872":{"transform":{"data":{"t":{"x":210,"y":210}},"keys":{"o":[{"t":0,"v":{"x":123.5,"y":0,"type":"corner"},"e":[0.42,0,0.58,1]},{"t":1000,"v":{"x":0,"y":0,"type":"corner"}}]}}},"eQ5WT9uwl873":{"transform":{"keys":{"o":[{"t":0,"v":{"x":333.5,"y":222.310837,"type":"corner"},"e":[0.42,0,0.58,1]},{"t":1000,"v":{"x":389,"y":222.310837,"type":"corner"}}]}}},"eQ5WT9uwl874":{"transform":{"keys":{"o":[{"t":0,"v":{"x":333.5,"y":210,"type":"corner"},"e":[0.42,0,0.58,1]},{"t":1000,"v":{"x":528,"y":210,"type":"corner"}}]}}},"eQ5WT9uwl876":{"transform":{"keys":{"o":[{"t":0,"v":{"x":1229.945313,"y":1230,"type":"corner"},"e":[0.42,0,0.58,1]},{"t":1000,"v":{"x":1405,"y":1230,"type":"corner"}}]}}},"eQ5WT9uwl878":{"transform":{"keys":{"o":[{"t":0,"v":{"x":1265.101563,"y":1230,"type":"corner"},"e":[0.42,0,0.58,1]},{"t":1000,"v":{"x":1226,"y":1230,"type":"corner"}}]}}},"eQ5WT9uwl8710":{"transform":{"keys":{"o":[{"t":0,"v":{"x":1248.101563,"y":1230,"type":"corner"},"e":[0.42,0,0.58,1]},{"t":1000,"v":{"x":1018,"y":1230,"type":"corner"}}]}}}}}],"options":{"start":"load","hover":null,"click":null,"scroll":null,"font":"embed","exportedIds":"unique","svgFormat":"animated","title":"Group 545"},"animationSettings":{"duration":3000,"direction":1,"iterations":1,"fill":1,"alternate":false,"speed":1}})</script><style>@font-face {  font-family: 'Lato';  font-style: normal;  font-weight: 400;  src: url(data:font/ttf;charset=utf-8;base64,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) format('truetype');}</style></svg>
            </div>
        </div>
    </section>


    <section id="clients">
        <div class="clients-sec">

            <h2>Our Services</h2>
            <p class="clients-p">Consistently we take on significant business challenges that increase enterprise value.</p>
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="clients-col">
                        <a href="https://digizel.com/services/branding-design">Branding &nbsp; &nbsp; &nbsp; &nbsp;  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
  <g id="ICO" transform="translate(-384 -1660)">
    <circle id="Ellipse_41" data-name="Ellipse 41" cx="15" cy="15" r="15" transform="translate(384 1660)" fill="#ff0"/>
    <path id="Path_37018" data-name="Path 37018" d="M-1.328-14.883l.9-.859a.9.9,0,0,1,.664-.273.9.9,0,0,1,.664.273L8.477-8.164A.9.9,0,0,1,8.75-7.5a.9.9,0,0,1-.273.664L.9.742a.9.9,0,0,1-.664.273A.9.9,0,0,1-.43.742l-.9-.859a.84.84,0,0,1-.254-.664.977.977,0,0,1,.293-.664L3.4-5.937H-7.812a.9.9,0,0,1-.664-.273.9.9,0,0,1-.273-.664v-1.25a.9.9,0,0,1,.273-.664.9.9,0,0,1,.664-.273H3.4l-4.687-4.492a.977.977,0,0,1-.293-.664A.84.84,0,0,1-1.328-14.883Z" transform="translate(393 1683)" fill="#004cff"/>
  </g>
</svg>
  </a>
                        <h3>Brand personality is vital to any product being dispatched. It incorporates everything from your logo, brand identity, brand theme, corporate writing material, content writing, and website designing with us.</h3>
                        <img src="{{asset('public/assets/img/Branding Design.png')}}" class="clents-img" alt="logo" loading="lazy">
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="clients-col">
                        <a href="https://digizel.com/services/web-design-development">Web Design and Development &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
  <g id="ICO" transform="translate(-384 -1660)">
    <circle id="Ellipse_41" data-name="Ellipse 41" cx="15" cy="15" r="15" transform="translate(384 1660)" fill="#ff0"/>
    <path id="Path_37018" data-name="Path 37018" d="M-1.328-14.883l.9-.859a.9.9,0,0,1,.664-.273.9.9,0,0,1,.664.273L8.477-8.164A.9.9,0,0,1,8.75-7.5a.9.9,0,0,1-.273.664L.9.742a.9.9,0,0,1-.664.273A.9.9,0,0,1-.43.742l-.9-.859a.84.84,0,0,1-.254-.664.977.977,0,0,1,.293-.664L3.4-5.937H-7.812a.9.9,0,0,1-.664-.273.9.9,0,0,1-.273-.664v-1.25a.9.9,0,0,1,.273-.664.9.9,0,0,1,.664-.273H3.4l-4.687-4.492a.977.977,0,0,1-.293-.664A.84.84,0,0,1-1.328-14.883Z" transform="translate(393 1683)" fill="#004cff"/>
  </g>
</svg> </a>
                        <h3>Website Design and Development benefits that do something amazing, get top of the line custom sites designed and developed to suit your business needs and increase user engagement successfully.</h3>
                        <img src="{{asset('public/assets/img/[ICO] Web Design & Development4.png')}}" class="clents-img" alt="logo" loading="lazy">
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="clients-col">
                        <a href="https://digizel.com/services/mobile-application-development">Mobile App Development &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
  <g id="ICO" transform="translate(-384 -1660)">
    <circle id="Ellipse_41" data-name="Ellipse 41" cx="15" cy="15" r="15" transform="translate(384 1660)" fill="#ff0"/>
    <path id="Path_37018" data-name="Path 37018" d="M-1.328-14.883l.9-.859a.9.9,0,0,1,.664-.273.9.9,0,0,1,.664.273L8.477-8.164A.9.9,0,0,1,8.75-7.5a.9.9,0,0,1-.273.664L.9.742a.9.9,0,0,1-.664.273A.9.9,0,0,1-.43.742l-.9-.859a.84.84,0,0,1-.254-.664.977.977,0,0,1,.293-.664L3.4-5.937H-7.812a.9.9,0,0,1-.664-.273.9.9,0,0,1-.273-.664v-1.25a.9.9,0,0,1,.273-.664.9.9,0,0,1,.664-.273H3.4l-4.687-4.492a.977.977,0,0,1-.293-.664A.84.84,0,0,1-1.328-14.883Z" transform="translate(393 1683)" fill="#004cff"/>
  </g>
</svg></a>
                        <h3>Digizel has consistently been on the cutting edge with regards to tolerating new innovation and adjusting it to help your business with mobile application development and design. </h3>
                        <img src="{{asset('public/assets/img/[ICO] Mobile Solutions3.png')}}" class="clents-img" alt="logo" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 ">
                    <div class="clients-col">
                        <a href="https://digizel.com/services/ecommerce-solutions">E-commerce &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
  <g id="ICO" transform="translate(-384 -1660)">
    <circle id="Ellipse_41" data-name="Ellipse 41" cx="15" cy="15" r="15" transform="translate(384 1660)" fill="#ff0"/>
    <path id="Path_37018" data-name="Path 37018" d="M-1.328-14.883l.9-.859a.9.9,0,0,1,.664-.273.9.9,0,0,1,.664.273L8.477-8.164A.9.9,0,0,1,8.75-7.5a.9.9,0,0,1-.273.664L.9.742a.9.9,0,0,1-.664.273A.9.9,0,0,1-.43.742l-.9-.859a.84.84,0,0,1-.254-.664.977.977,0,0,1,.293-.664L3.4-5.937H-7.812a.9.9,0,0,1-.664-.273.9.9,0,0,1-.273-.664v-1.25a.9.9,0,0,1,.273-.664.9.9,0,0,1,.664-.273H3.4l-4.687-4.492a.977.977,0,0,1-.293-.664A.84.84,0,0,1-1.328-14.883Z" transform="translate(393 1683)" fill="#004cff"/>
  </g>
</svg> </a>
                        <h3>We spend significant time in making online stores, from WordPress to Magento and Shopify to Custom eCommerce functionality to streamline your business.</h3>
                        <img src="{{asset('public/assets/img/[ICO] Ecommerce Solutions2.png')}}" class="clents-img" alt="logo" loading="lazy">
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="clients-col">
                        <a href="https://digizel.com/services/digital-marketing">Digital Marketing  &nbsp; &nbsp; &nbsp; &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
  <g id="ICO" transform="translate(-384 -1660)">
    <circle id="Ellipse_41" data-name="Ellipse 41" cx="15" cy="15" r="15" transform="translate(384 1660)" fill="#ff0"/>
    <path id="Path_37018" data-name="Path 37018" d="M-1.328-14.883l.9-.859a.9.9,0,0,1,.664-.273.9.9,0,0,1,.664.273L8.477-8.164A.9.9,0,0,1,8.75-7.5a.9.9,0,0,1-.273.664L.9.742a.9.9,0,0,1-.664.273A.9.9,0,0,1-.43.742l-.9-.859a.84.84,0,0,1-.254-.664.977.977,0,0,1,.293-.664L3.4-5.937H-7.812a.9.9,0,0,1-.664-.273.9.9,0,0,1-.273-.664v-1.25a.9.9,0,0,1,.273-.664.9.9,0,0,1,.664-.273H3.4l-4.687-4.492a.977.977,0,0,1-.293-.664A.84.84,0,0,1-1.328-14.883Z" transform="translate(393 1683)" fill="#004cff"/>
  </g>
</svg> </a>
                        <h3>Without a doubt a dedication to every aspect, we foster digital marketing solutions just as strong feeling of communication with our customers. </h3>
                        <img src="{{asset('public/assets/img/[ICO] Digital Marketing1.png')}}" class="clents-img" alt="logo" loading="lazy">
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="clients-col clients-col-yellow">
                        <div class="client-blue-bg">
                            <p>We never underestimate the power of online advertising and how it could drastically improve your business’ income.</p>
                            <a href="tel:(866) 313-1877"> <img src="{{asset('public/assets/img/ICO.svg')}}" class="number" alt="logo">
                            (866) 313-1877 </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<section id="portfolio-tabs" >

 <h2>Our Portfolio</h2>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @forelse(App\Portfolio::select('category')->distinct()->get() as $portfolio)
                <li class="nav-item" role="presentation">
                    <button class="nav-link @if($loop->first) active @endif" data-bs-toggle="pill"
                            data-bs-target="#pills-{{Str::slug($portfolio->category)}}" type="button" role="tab">
                        {{$portfolio->category}}
                    </button>
                </li>
            @empty
            @endforelse
        </ul>

        <div class="">
            <div class="tab-content" id="pills-tabContent">
                @forelse(App\Portfolio::select('category')->distinct()->get() as $portfolio)
                    <div class="tab-pane fade show @if($loop->first) active @endif"
                         id="pills-{{Str::slug($portfolio->category)}}" role="tabpanel">

                <div class="portfolio-slider">
                            @foreach(App\Portfolio::where('category',$portfolio->category)->get() as $port)
                                <div class="portfolio-scrool-img">
                                    <img src="{{Voyager::image($port->image)}}" class="img-fluid" alt="{{$port->title}}" loading="lazy">
                                </div>
                            @endforeach
                </div>

                    </div>
                @empty
                @endforelse
            </div>
        </div>
        
     <div class="Portfolio-btn">
        <div class="updated-btnn port-btns">
        <a href="https://digizel.com/portfolio" class="btn-3 blue-border greenbtn"><span>View Our Portfolio</span></a>
        <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn-3 blue greenbtn"><span>Send Me a Quote</span></a>
        
             
      </div>
        
  
        

        </div>       
        
</section>

<section id="portfolio-tabs" class="pricing-sec">
        <div class="price-section price-section-home">
            <h2>Pricing</h2>
            <p class="price-sec-p">We have some affordable pricing for your design and development need!</p>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab3" data-bs-toggle="pill"
                            data-bs-target="#pills-home3" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Web design & development
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab4" data-bs-toggle="pill"
                            data-bs-target="#pills-profile4" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Mobile app development
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab5" data-bs-toggle="pill"
                            data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Branding Design
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab6" data-bs-toggle="pill"
                            data-bs-target="#pills-contact6" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Logo Design
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @include('common.packages_pricing')
            <div class="packeges">
                <h2>customize your package</h2>
                <p>Wish to get a customized package? Start building one now</p>


                @include('forms.customize_form')

            </div>

            <div class="pck-guaranteed">
                <div class="text-center guaranteed">
                    <img src="{{asset('public/assets/img/Group1.png')}}" alt="icons" loading="lazy">
                    <p>100% Satisfaction <br>
                        Guaranteed</p>
                </div>

                <div class="text-center guaranteed">
                    <img src="{{asset('public/assets/img/Group2.png')}}" alt="icons" loading="lazy">
                    <p>Money Back <br>
                        Guarantee</p>
                </div>

                <div class="text-center guaranteed">
                    <img src="{{asset('public/assets/img/Group3.png')}}" alt="icons" loading="lazy">
                    <p>24/7 Customer <br>
                        Support</p>
                </div>

                <div class="text-center guaranteed">
                    <img src="{{asset('public/assets/img/Group4.png')}}" alt="icons" loading="lazy">
                    <p>Industry Specific <br>
                        Designers</p>
                </div>

            </div>

        </div>
    </section>

    <div id ='modals'></div>
    <section id="carasoul" class="g-10">
        <h2>Trusted by businesses</h2>
        <div class="clients">
            <div class="clients-slider">
                <div><img src="{{asset('public/assets/img/logo01.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo02.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo03.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo04.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo05.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo06.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo01.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo02.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo03.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                <div><img src="{{asset('public/assets/img/logo04.png')}}" alt="" class="img-fluid" loading="lazy"></div>
            </div>
        </div>
    </section>



    @include('common.footer_form')

@endsection
