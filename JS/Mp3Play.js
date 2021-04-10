var mainplayButton = document.querySelector('.main-play');
var playButton = document.querySelector('.play');
var mainpauseButton = document.querySelector('.main-pause');
var pauseButton = document.querySelector('.pause');
var mainpreviousButton = document.querySelector('.main-previous');
var previous = document.querySelector('.previous');
var mainskipButton = document.querySelector('.main-next');
var skipButton = document.querySelector('.next');

var currentTime = document.getElementById("main-time");
var currentTime1 = document.getElementById("time");

var progress = document.querySelector('.main-progress');
var progress1 = document.querySelector('.progress');

var durationTime = document.getElementById("main-total-time");
var durationTime1 = document.getElementById("total-time");

$_srclink = "https://data3.chiasenhac.com/downloads/2130/6/2129844-9013b480/128/Qua%20Khung%20Cua%20So%20-%20Chillies.mp3";
var audio = new Audio($_srclink);
audio.volume = 0.1;
window.onload = function() {
    setDuration();
    addProperties("Chillies","Qua Khung Cửa Sổ","images/130653.jpg");
};
function addProperties(name,song,src){
    var picture = document.querySelector('.main-img-wrapper img');
    var picture1 = document.querySelector('.img-wrapper img');
    var artistname = document.querySelector('.main-artist');
    var artistname1 = document.querySelector('.song-info .artist');
    var songname = document.querySelector('.main-song');
    var songname1 = document.querySelector('.song-info .song');
    artistname.innerHTML=name;
    artistname1.innerHTML=name;
    songname.innerHTML=song;
    songname1.innerHTML=song;
    picture.src=src;
    picture1.src=src;
}
mainplayButton.addEventListener("click",function(){
    onPlayClick();
});
playButton.addEventListener("click",function(){
    onPlayClick();
});
mainpauseButton.addEventListener("click",function(){
    onPauseClick();
});
pauseButton.addEventListener("click",function(){
    onPauseClick();
});
function onPauseClick(){
    audio.pause();
    mainplayButton.style.display = "block";
    playButton.style.display = "block";
    mainpauseButton.style.display = "none";
    pauseButton.style.display = "none";
}
function onPlayClick(){
    audio.play();
    mainpauseButton.style.display = "block";
    pauseButton.style.display = "block";
    mainplayButton.style.display = "none";
    playButton.style.display = "none";
}
audio.addEventListener('timeupdate', (event) => {
    var time = audio.currentTime;
    var minutes = Math.floor(Math.floor(time)/60);
    var minutestring,secondstring;
    if (minutes < 10){
        minutestring = "0"+minutes;
    }
    else minutestring = minutes;
    var seconds = Math.floor(time - 60*minutes);
    if (seconds < 10){
        secondstring = "0"+seconds;
    }
    else secondstring = seconds;
    currentTime.innerHTML= minutestring+":"+secondstring;
    currentTime1.innerHTML= minutestring+":"+secondstring;
    var percent = 100*audio.currentTime/audio.duration;
    progress.style.width = percent+"%";
    progress1.style.width = percent+"%";
});
function setDuration(){
    var time = audio.duration;
    var minutes = Math.floor(Math.floor(time)/60);
    var minutestring,secondstring;
    if (minutes < 10){
        minutestring = "0"+minutes;
    }
    else minutestring = minutes;
    var seconds = Math.floor(time - 60*minutes);
    if (seconds < 10){
        secondstring = "0"+seconds;
    }
    else secondstring = seconds;
    durationTime.innerHTML= minutestring+":"+secondstring;
    durationTime1.innerHTML= minutestring+":"+secondstring;
}