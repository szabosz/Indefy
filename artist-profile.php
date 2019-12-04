<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/artist-profile.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media-player.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Artist Profile</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>
        <section class="wrapper">
            
            <!-- Analytics -->
            <?php include("includes/line-chart.php");?>
            
        </section>

        <section class="wrapper-library">
<!--            <h2>Your Library</h2>-->
            <div class="left">
                <img src="assets/album.png" />
            </div>

            <div class="right">
                <div class="song-widget">
                    <!--                    <img src="assets/album.png" />-->
                    <p class="track-number">1</p>
                    <div class="widget-info">
                        <p>Lump Sum</p>
                        <p>Bon Iver</p>
                        <p>For Emma, Forever Ago</p>
                    </div>
                </div>
            </div>
            
        </section>
        
    </main>
    
    <!-- Media Player -->
    <?php include("includes/media-player.php");?>

</body>

</html>
