// child: jquery object  e.g $(".active .slide-caption")
// parent: jquery object e.g $(".active.slide")
// property (string): CSS property to change depending on your CSS positioning e.g. "top", "margin-top" or "bottom"
function centerVertical(child, parent, property) {

    var parentHeight = parent.height(),
            childHeight = child.height();

    // Handle edge cases with padding or margins affecting child.height() calculation
    if (child.find("h1").length) {
            childHeight = child.find("h1").height();
    }

    // Position the child with an inline style
    child.css(property, (parentHeight - childHeight) / 2);
}


$(document).ready(function() {
//    centerVertical($(".member-info"), $("li"), "padding-top");
//    centerVertical($(".intro-statement"), $("#intro"), "margin-top");
});


/*
// Used to open a link when clicking on a div containing a link - http://css-tricks.com/snippets/jquery/make-entire-div-clickable/
$(".clickable-box").click(function(){
     window.location=$(this).find("a").attr("href");
     return false;
});
*/