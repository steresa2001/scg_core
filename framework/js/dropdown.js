$(document).ready(function(){
    // Dropdown menu
    var findDropdowns = document.querySelectorAll(".has-dropdown");
    var toArray = function(collection) {return [].slice.call(collection);}
     $(document).on('click', function(e) {
        $("ul").removeClass("show");
    });
    toArray(findDropdowns).forEach(function(e) {
        e.addEventListener("click", function(ev) {
            ev.preventDefault();
            ev.stopPropagation();
            
            var others = toArray(document.querySelectorAll(".show"));
            e.parentNode.children[1].classList.add("show");
            others.forEach(function(){
                $(others).toggleClass("show");
            });
        }, false);
    });
});
