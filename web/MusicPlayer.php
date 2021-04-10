<link rel="stylesheet" href = "css/audio-player.css"/>
<div id="music-player"> <!-- The full black bar -->
  <div class="inner"> <!-- Keeping everything centered -->
    
   <!-- The controls -->
   <div class="controls">
    <a class="previous" href="#">
        <span class="material-icons">
            skip_previous
        </span>
    </a>
    <a class="play" href="#">
        <span class="material-icons">
            play_circle
        </span>
    </a>
    <a class="pause" href="#" style="display:none;">
        <span class="material-icons">
            pause
        </span>
    </a>
    <a class="next" href="#">
        <span class="material-icons">
            skip_next
        </span>
    </a>
   </div>
   
   <!-- The play bar -->
   <div class="play-bar">
    <span id="time">00:00</span>
    <div class="bar-bg">
     <div class="progress"></div>
    </div>
    <span id="total-time">00:00</span>
   </div>
   <div class="song-content"> <!-- The songs meta -->
    <div class="user-info">
     <!-- The song cover -->
     <div class="img-wrapper">
      <img src="images/BigCityBoy.jpg">
     </div>
     <!-- The artist name and song title -->
     <div class="song-info">
      <span class="artist">Artist Name</span>
      <span class="song">Song Name</span>
     </div>
    </div>
    <!-- Comment counter -->
    <div class="comment-icon">
     <a href="#">
        <span class="material-icons">
            comment
        </span>
      <span>7</span>
     </a>
    </div>
   </div> <!-- The songs meta END -->
  </div> <!-- Keeping everything centered END -->
</div> <!-- The full black bar END -->