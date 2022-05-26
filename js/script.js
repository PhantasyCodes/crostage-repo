// document.body.style.overflowY = 'hidden';

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}


var animation = bodymovin.loadAnimation({
    container: document.getElementById('anim'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'js/data.json'
})

var opacity = 0;
var interval = 0;



var loader = document.getElementById("anim");


animation.onComplete = function() {
    fadeOut();
    document.body.style.overflowY = 'visible';

    function fadeOut(){
        interval = setInterval(hide,20);
    }
    
    function hide(){
        opacity = Number(window.getComputedStyle(loader).getPropertyValue("opacity"));

        if (opacity > 0) {
            opacity = opacity-0.02;
            console.log(opacity)
            loader.style.opacity = opacity;
        }
        
        else {
            loader.style.display = 'none';
        }
    }
}


const nextIcon = "<img src='./images/right.png' alt='right'></img>";
const prevIcon = "<img src='./images/left.png' alt='prev'></img>";

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        nav: true,
        dots: false,
        navText: [prevIcon, nextIcon],
        slideBy: 1,
        margin: 10,
        items: 1,
        autoplay: true,
        loop: true
    });
});