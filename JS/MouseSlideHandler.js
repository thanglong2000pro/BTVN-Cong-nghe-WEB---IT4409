const strack = document.querySelector('.track');
let initPosition = null;
let moving = false;
let transform = 0;

window.addEventListener('mousedown',(e)=>{
    initPosition = e.pageX;
    moving =true;
    const transformMatrix = window.getComputedStyle(strack).getPropertyValue("transform");
    if(transformMatrix !=='none'){
        transform = transformMatrix.split(',')[4].trim();
    }
});

window.addEventListener('mousemove',(e)=>{
   if(moving){
    const curPosition = e.pageX;
    const diff = curPosition - initPosition;
    console.log(strack.style.transform);
    strack.style.transform = `translateX(${diff}px`;
   }
});

window.addEventListener('mouseup',(e)=>{
    moving = false;
});