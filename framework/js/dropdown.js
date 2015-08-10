$(document).ready(function(){
    // Dropdown menu
    var findDropdowns = document.querySelectorAll(".has-dropdown");
    var toArray = function(collection) {return [].slice.call(collection)}

    toArray(findDropdowns).forEach(function(e) {
        e.addEventListener("click", function(ev) {
            ev.preventDefault();
          
            var others = toArray(document.querySelectorAll(".show"));
            e.parentNode.children[1].classList.add("show");
            others.forEach(function(o){
                $(others).toggleClass("show");
            });
        }, false);
    });
});
