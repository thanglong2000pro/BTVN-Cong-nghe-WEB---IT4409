const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const track = document.querySelector('.track');
var nut = document.querySelectorAll('.card-container');
let containerWidth = document.querySelector('.container').offsetWidth;

window.addEventListener('resize',()=>{
    containerWidth = document.querySelector('.container').offsetWidth;
});

let index = 0;
next.addEventListener("click",function(){
    index++;
    prev.classList.add('show');
    track.style.transform = `translateX(-${index * containerWidth}px)`;
    console.log(track.offsetWidth);
    console.log(containerWidth);
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
