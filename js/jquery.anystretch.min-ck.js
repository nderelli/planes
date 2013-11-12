/*
 * jQuery Anystretch
 * Version 1.2 (@jbrooksuk / me.itslimetime.com)
 * https://github.com/jbrooksuk/jquery-anystretch
 * Based on Dan Millar's Port
 * https://github.com/danmillar/jquery-anystretch
 *
 * Add a dynamically-resized background image to the body
 * of a page or any other block level element within it
 *
 * Copyright (c) 2012 Dan Millar (@danmillar / decode.uk.com)
 * Dual licensed under the MIT and GPL licenses.
 *
 * This is a fork of jQuery Backstretch (v1.2)
 * Copyright (c) 2011 Scott Robbin (srobbin.com)
*/(function(e){e.fn.anystretch=function(t,n,r){var i=this.selector.length?!1:!0;return this.each(function(s){function E(){if(t||u.length>=1){var n;i||u.css({position:l.elPosition,background:"none"});f.length==0?f=e("<div />").attr("class","anystretch").css({left:0,top:0,position:i?"fixed":"absolute",overflow:"hidden",zIndex:i?-999999:-999998,margin:0,padding:0,height:"100%",width:"100%"}):f.find("img").addClass("deleteable");n=e("<img />").css({position:"absolute",display:"none",margin:0,padding:0,border:"none",zIndex:-999999}).bind("load",function(t){var n=e(this),i,s;n.css({width:"auto",height:"auto"});i=this.width||e(t.target).width();s=this.height||e(t.target).height();p=i/s;S(function(){n.fadeIn(l.speed,function(){f.find(".deleteable").remove();typeof r=="function"&&r()})})}).appendTo(f);u.children(".anystretch").length==0&&(i?e("body").append(f):u.append(f));f.data("settings",l);var s="";if(t)s=t;else{if(!u.data(l.dataName))return;s=u.data(l.dataName)}n.attr("src",s);e(window).resize(S)}}function S(t){try{w={left:0,top:0};m=x();g=m/p;if(g>=T()){y=(g-T())/2;l.positionY=="center"||l.centeredY?e.extend(w,{top:"-"+y+"px"}):l.positionY=="bottom"&&e.extend(w,{top:"auto",bottom:"0px"})}else{g=T();m=g*p;y=(m-x())/2;l.positionX=="center"||l.centeredX?e.extend(w,{left:"-"+y+"px"}):l.positionX=="right"&&e.extend(w,{left:"auto",right:"0px"})}f.children("img:not(.deleteable)").width(m).height(g).filter("img").css(w)}catch(n){}typeof t=="function"&&t()}function x(){return i?u.width():u.innerWidth()}function T(){return i?u.height():u.innerHeight()}var o={positionX:"center",positionY:"center",speed:0,elPosition:"relative",dataName:"stretch"},u=e(this),f=i?e(".anystretch"):u.children(".anystretch"),l=f.data("settings")||o,h=f.data("settings"),p,v,m,g,y,w;n&&typeof n=="object"&&e.extend(l,n);n&&typeof n=="function"&&(r=n);e(document).ready(E);return this})};e.anystretch=function(t,n,r){var i="onorientationchange"in window?e(document):e(window);i.anystretch(t,n,r)}})(jQuery);