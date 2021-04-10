<link rel="stylesheet" href = "css/SongInfo.css"/>
<div class="songInfo">
    <div class="leftSide">
        <img src="images/130653.jpg" alt="alt"/>
        <div class="songName">Qua Khung Cửa Sổ</div>
        <div class="info">
            <div class="row">
                <div class ="title">Ca sĩ:</div>
                <a href="#">Chillies</a>
            </div>
            <div class="row">
                <div class ="title">Sáng tác:</div>
                <a href="#">Trần Duy Khang</a>
                <span>;</span>
                <a href="#">Nhím Biển</a>
                <span>;</span>
                <a href="#">Bảo Lê</a>
            </div>
            <div class="row">
                <div class ="title">Album:</div>
                <a href="#">Qua Khung Cửa Sổ (Single)</a>
            </div>
            <div class="row">
                <div class ="title">Năm phát hành:</div>
                <a>2020</a>
            </div>
        </div>
    </div>
    <div class="rightSide">
        <ul class="menuButton">
            <li>
                <button id="Lyrics" onclick="OnLyricsClick()">
                    <span class="material-icons">
                        queue_music
                    </span>
                    <div class="buttonname">Lyric</div>
                </button>
                <div class="Extends">
                    [Ver 1]
                </div>
            </li>
            <li><button id="Download" onclick="OnDownloadClick()">
                <span class="material-icons">
                download
                </span>
                <div class="buttonname">Download</div>
                </button>
                <div class="Extends">
                    Link ...
                </div>
            </li>
            <li><button id="Share" onclick="OnShareClick()">
                <span class="material-icons">
                share
                </span>
                <div class="buttonname">Share</div>
                </button>
                <div class="Extends">
                    Share ...
                </div>
            </li>
            <li><button id="More" onclick="OnMoreClick()">
                <span class="material-icons">
                add_circle_outline
                </span>
                <div class="buttonname">More</div>
                </button>
                <div class="Extends">
                    Add to Playlist...
                </div>
            </li>
        </ul>
    </div>

</div>
<script>
    var lyricsButton = document.getElementById("Lyrics");
var lyricsExtend = lyricsButton.nextElementSibling;
var downloadButton = document.getElementById("Download");
var downloadExtend = downloadButton.nextElementSibling;
var shareButton = document.getElementById("Share");
var shareExtend = shareButton.nextElementSibling;
var moreButton = document.getElementById("More");
var moreExtend = moreButton.nextElementSibling;

function RestoreDefault(){
    lyricsButton.style.backgroundColor="linen";
    lyricsButton.style.color="grey";
    downloadButton.style.backgroundColor="linen";
    downloadButton.style.color="grey";
    shareButton.style.backgroundColor="linen";
    shareButton.style.color="grey";
    moreButton.style.backgroundColor="linen";
    moreButton.style.color="grey";
    lyricsExtend.style.display ="none";
    downloadExtend.style.display ="none";
    shareExtend.style.display ="none";
    moreExtend.style.display ="none";
}
function OnLyricsClick() {
    RestoreDefault();
    lyricsButton.style.backgroundColor="pink";
    lyricsButton.style.color="white";
    lyricsExtend.style.display ="block";
}
function OnDownloadClick() {
    RestoreDefault();
    downloadButton.style.backgroundColor="pink";
    downloadButton.style.color="white";
    downloadExtend.style.display ="block";;
}
function OnShareClick() {
    RestoreDefault();
    shareButton.style.backgroundColor="pink";
    shareButton.style.color="white";
    shareExtend.style.display ="block";
}
function OnMoreClick() {
    RestoreDefault();
    moreButton.style.backgroundColor="pink";
    moreButton.style.color="white";
    moreExtend.style.display ="block";
}
</script>
