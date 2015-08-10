$(document).ready(function(){
    // Sets class for active state in nav
    setClass(["index", "docs", "type"]);
    function setClass(terms){ 
        terms.forEach(function(term){
            if(new RegExp(term, "i").test(location.href)) 
                $("." + term).addClass("active"); 
        });
    }

    // Sets body class for each page
    var urlContains = window.location;
    var urlString = urlContains.toString();
    var urlArray = ['index', 'docs', 'type', 'grid', 'buttons'];

    for(var i = 0; i < urlArray.length; i++){
        var urlMatch = urlString.indexOf(urlArray[i]);

         if(urlMatch != -1){
            $('body').addClass(urlArray[i]);
        }
    }

    // Header slider
    $('.flexslider').flexslider({
        animation: "slide"
    });
});
