// child: jquery object  e.g $(".active .slide-caption")
// parent: jquery object e.g $(".active.slide")
// property (string): CSS property to change depending on your CSS positioning e.g. "top", "margin-top" or "bottom"
function centerVertical(e,t,n){var r=t.height(),i=e.height();e.find("h1").length&&(i=e.find("h1").height());e.css(n,(r-i)/2)}$(document).ready(function(){centerVertical($(".member-info"),$("li"),"padding-top")});