const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const track = document.querySelector('.track');
const playbutton =document.getElementsByClassName('playbutton');
var nut = document.querySelectorAll('.card-container');
let containerWidth = document.querySelector('.container').offsetWidth;
let innerWidth = document.querySelector('.inner').offsetWidth;
window.addEventListener('resize',()=>{
    containerWidth = document.querySelector('.container').offsetWidth;
    innerWidth = document.querySelector('.inner').offsetWidth;
});

console.log(playbutton);

let index = 0;
next.addEventListener("click",function(){
    index++;
    prev.classList.add('show');
    track.style.transform = `translateX(-${index * containerWidth}px)`;
    if(track.offsetWidth - (index * containerWidth)===containerWidth){
      next.classList.add('hide');
    }
});
prev.addEventListener("click",function(){
    index--;
    next.classList.remove('hide');
    if(index === 0){
        prev.classList.remove('show');
    }
    track.style.transform = `translateX(-${index * containerWidth}px)`;
});
//auto slideshow
