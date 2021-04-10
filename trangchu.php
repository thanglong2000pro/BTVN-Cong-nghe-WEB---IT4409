<!DOCTYPE html>
<html>
    <head>
        <?php include "common/dependent.php" ?>
    </head>

    <body>
        <?php include "common/header.php" ?>
        <section id="main">
            <?php include "web/showcase.php" ?>
            <?php include "web/slideshow.php" ?>
            <div class="horizontaldisplay">
                <div class="verticaldisplay1">
                    <?php include "web/NewestAlbum.php" ?>
                    <div class ="subverticaldisplay">
                        <?php include "web/NewMusic.php"?>
                        <?php include "web/NewListen.php"?>
                    </div>
                </div>
                <div class ="verticaldisplay2">
                    <?php include "web/LeaderBoard.php" ?>
                    <?php include "web/FavouriteArtist.php"?>
                </div>
            </div>
        </section>
        <?php include "common/footer.php" ?>
    </body>
    <script type ="text/javascript" src ="JS/slideshow.js"/></script>
</html>
