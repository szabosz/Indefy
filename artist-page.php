<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/artist-page.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media-player.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Artist Page</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>
        <section class="wrapper">
            <!--    Back Button     -->
            <div class="back">
                <a href="#"><i class="fas fa-arrow-left"></i>
                    <span class="p-small">Other Artists</span></a>
            </div>

            <!--    Artist Profile     -->
            <div class="artist-info">
                <div class="profile">
                    <img src="assets/2.png" />
                    <h1>Bon Iver</h1>
                    <p>This is some info.</p>
                </div>
                <div class="news">
                    <h2>News</h2>
                    <div class="update">
                        <span class="update-date">
                            <p>07/12/2008</p>
                        </span>
                        <h3>New Release Coming Soon</h3>
                        <p>I've been working in the studio for a few weeks...</p>
                    </div>
                </div>
            </div>

            <!--    Artist Library     -->
            <div class="library">
                <div class="new-releases">
                    <h2>New Releases</h2>
                    <div class="song-widget">
                        <!--                    <img src="assets/album.png" />-->
                        <p class="track-number">1</p>
                        <div class="widget-info">
                            <a href="arcadeFire/theSuburbs.mp3">Lump Sum</a>
                            <p>Bon Iver</p>
                            <p>For Emma, Forever Ago</p>
                        </div>
                    </div>
                </div>
                <div class="album">
                    <h2>Albums</h2>
                    <button class="album-widget">
                        <div class="content">
                            <img src="assets/album.png" />
                            <div class="widget-info">
                                <p>For Emma, Forever Ago</p>
                                <p>Bon Iver</p>
                            </div>
                        </div>
                    </button>
                    <div class="song-widget">
                        <div class="content">
                            <!--                    <img src="assets/album.png" />-->
                            <p class="track-number">1</p>
                            <div class="widget-info">
                                <p>Lump Sum</p>
                                <p>Bon Iver</p>
                                <!--                            <p>For Emma, Forever Ago</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    
    <!-- Media Player -->
    <?php include("includes/media-player.php");?>


    <script>
        var coll = document.getElementsByClassName("album-widget");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

    </script>
<script src=https://code.jquery.com/jquery-2.2.0.js></script>
<script src="js/main.js" type="text/javascript"></script>
</body>

</html>
