<!DOCTYPE html>
<?php session_start();
// include("includes/header.php");
include("includes/connect.php");
    $artistToSearch = $_GET["artistGenre"];
    $stmt = $pdo->prepare("SELECT * FROM `artists` WHERE `artistGenre` LIKE '%$artistToSearch%'");
    $stmt->execute();
    $artistList = array();
    // while($row = $stmt->fetch()) {
    //     $artistList[] = $row;
    // }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/search-results.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="css/media-player.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Search Results</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>

        <section class="wrapper">

            <!-- Search -->
            <?php include("includes/search.php");?>

            <!-- Filter -->
            <?php include("includes/filter.php");?>


            <!--    Artists     -->
            <div class="title">
                <h1><?php '%$artistToSearch%' ?> Artists</h1>
            </div>
            
            <?php
                $stmt = $pdo->prepare("SELECT * FROM `artists` WHERE `artistGenre` LIKE '%$artistToSearch%' ");
                $stmt->execute();

                while($row = $stmt->fetch()) { 
                ?>
                <div class="result">  
                    <img src="<?php echo($row["artistProfile"]);?>" />
                    <a href="artist-page.php"><h1><?php echo($row["artistName"]);?></h1>
                </div>
                <?php
                }
                ?>
        

            <!-- <div class="result">
                <img src="assets/image.png" />
                <h1>Bon Iver</h1>
            </div> -->
            
        </section>

    </main>

    <!-- Media Player -->
    <?php include("includes/media-player.php");?>

</body>

</html>
