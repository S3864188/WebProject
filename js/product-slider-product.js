let thumbnails1 = document.getElementsByClassName('thumbnail-box-1');
const slider1 = document.getElementById('slider1');
let buttonRight1 = document.getElementById('slide-right-1');
let buttonLeft1 = document.getElementById('slide-left-1');

buttonLeft1.addEventListener('click', function(){
    slider1.scrollLeft -= 125;
})

buttonRight1.addEventListener('click', function(){
    slider1.scrollLeft += 125;
})

const maxScrollLeft1 = slider1.scrollWidth - slider1.clientWidth;

//AUTO PLAY THE SLIDER 
function autoPlay1() {
    if (slider1.scrollLeft > (maxScrollLeft1 - 1)) {
        slider1.scrollLeft -= maxScrollLeft1;
    } else {
        slider1.scrollLeft += 1;
    }
}
let play1 = setInterval(autoPlay1, 50);

// PAUSE THE SLIDE ON HOVER
for (var i=0; i < thumbnails1.length; i++){

thumbnails1[i].addEventListener('mouseover', function() {
    clearInterval(play1);
});

thumbnails1[i].addEventListener('mouseout', function() {
    return play1 = setInterval(autoPlay1, 50);
});
}