<link rel="stylesheet" href = "css/MainMusicPlayer.css"/>
<div id="main-music-player">
  <div class="main-inner">
   <div class="main-controls">
    <a class="main-previous" href="#">
        <span class="material-icons">
            skip_previous
        </span>
    </a>
    <a class="main-play" href="#">
        <span class="material-icons">
            play_circle
        </span>
    </a>
    <a class="main-pause" href="#" style="display:none;">
        <span class="material-icons">
            pause
        </span>
    </a>
    <a class="main-next" href="#">
        <span class="material-icons">
            skip_next
        </span>
    </a>
   </div>
   <div class="main-play-bar">
    <span id="main-time">00:00</span>
    <div class="main-bar-bg">
     <div class="main-progress"></div>
    </div>
    <span id="main-total-time">00:00</span>
   </div>
   <div class="main-song-content">
    <div class="main-user-info">
     <!-- The song cover -->
     <div class="main-img-wrapper">
      <img src="images/BigCityBoy.jpg">
     </div>
     <div class="main-song-info">
      <span class="main-artist">Artist Name</span>
      <span class="main-song">Song Name</span>
     </div>
    </div>
    <div class="main-comment-icon">
     <a href="#">
        <span class="material-icons">
            comment
        </span>
        <span>10</span>
     </a>
    </div>
   </div>
  </div>
    <audio src="<?php echo $_srclink;?>" preload="none" controls></audio>
</div>
<div id="main-scroll" style="overflow:scroll;">
    <div class ="Container">
        <div class="song">
            <a href="#">1. Cho mình em</a>
        </div>
        <div class="artist">
            <a href="#">Binz</a>
            <span>,</span>
            <a href="#">Đen Vâu</a>
        </div>
    </div>
    <div class ="Container">
        <div class="song">
            <a href="#">2. Okeokeoke</a>
        </div>
        <div class="artist">
            <a href="#">Low G</a>
        </div>
    </div>
    <div class ="Container">
        <div class="song">
            <a href="#">3. Làm Ngay Hôm Nay (#LNHN)</a>
        </div>
        <div class="artist">
            <a href="#">RPT Orijinn</a>
            <span>,</span>
            <a href="#">RPT Duke</a>
            <span>,</span>
            <a href="#">RPT MCK</a>
        </div>
    </div>
    <div class ="Container">
        <div class="song">
            <a href="#">4. Đại Chiến Rap: Hero Team x Streamer Free Fire</a>
        </div>
        <div class="artist">
            <a href="#">Hero Team</a>
            <span>,</span>
            <a href="#">T Gaming</a>
            <span>,</span>
            <a href="#">Gao Bạc TV</a>
            <span>...</span>
        </div>
    </div>
    <div class ="Container">
        <div class="song">
            <a href="#">5. WALK ON DA STREET</a>
        </div>
        <div class="artist">
            <a href="#">16 Typh</a>
            <span>,</span>
            <a href="#">16 BrT</a>
        </div>
    </div>
</div>
