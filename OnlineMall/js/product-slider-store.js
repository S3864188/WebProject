let thumbnails2 = document.getElementsByClassName('thumbnail-box-2');
const slider2 = document.getElementById('slider2');
let buttonRight2 = document.getElementById('slide-right-2');
let buttonLeft2 = document.getElementById('slide-left-2');

buttonLeft2.addEventListener('click', function(){
    slider2.scrollLeft -= 125;
})

buttonRight2.addEventListener('click', function(){
    slider2.scrollLeft += 125;
})

const maxScrollLeft2 = slider2.scrollWidth - slider2.clientWidth;

//AUTO PLAY THE SLIDER 
function autoPlay2() {
    if (slider2.scrollLeft > (maxScrollLeft2 - 1)) {
        slider2.scrollLeft -= maxScrollLeft2;
    } else {
        slider2.scrollLeft += 1;
    }
}
let play2 = setInterval(autoPlay2, 50);

// PAUSE THE SLIDE ON HOVER
for (var i=0; i < thumbnails2.length; i++){

thumbnails2[i].addEventListener('mouseover', function() {
    clearInterval(play2);
});

thumbnails2[i].addEventListener('mouseout', function() {
    return play2 = setInterval(autoPlay2, 50);
});
}