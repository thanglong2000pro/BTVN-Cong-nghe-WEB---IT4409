<!DOCTYPE html>
<html>
    <head>
        <?php include "common/dependent.php" ?>
    </head>
    
    <body>
        <?php include "common/header.php" ?>
        <section id="main" style="display: flex">
            <div class ="left">
                <?php include "web/MainMusicPlayer.php"?>
                <?php include "web/SongInfo.php" ?>
            </div>
            <div class ="right" style="padding-left: 50px">
                <?php include "web/GoiY.php" ?>
            </div>
            <?php include "web/MusicPlayer.php" ?>
        </section>
        <?php include "common/footer.php" ?>
    </body>
    <script type ="text/javascript" src ="JS/slideshow.js"/></script>
    <script type ="text/javascript" src ="JS/Mp3Play.js"/></script>
</html>