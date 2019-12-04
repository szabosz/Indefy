<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/user-home.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="css/media-player.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
<!--    <link rel="stylesheet" type="text/css" href="css/footer.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>User Home</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>

        <section class="wrapper">

            <!-- Nav Bar -->
            <?php include("includes/search.php");?>

            <!--    Surprise    -->
            <div class="surprise">
                <button><i class="fas fa-gift"></i></button>
                <p>surprise me!</p>
            </div>

            <!--    Trending     -->
            <div class="title">
                <h1>Trending Now...</h1>
            </div>

            <div class="trending-song">
                <img src="assets/image.png" />
                <h1>Lump Sum</h1>
                <h2>Bon Iver</h2>
            </div>

            <div class="trending-song">
                <img src="assets/image.png" />
                <h1>Lump Sum</h1>
                <h2>Bon Iver</h2>
            </div>

            <div class="trending-song">
                <img src="assets/image.png" />
                <h1>Lump Sum</h1>
                <h2>Bon Iver</h2>
            </div>

            <div class="trending-song">
                <img src="assets/image.png" />
                <h1>Lump Sum</h1>
                <h2>Bon Iver</h2>
            </div>

            <div class="trending-song">
                <img src="assets/image.png" />
                <h1>Lump Sum</h1>
                <h2>Bon Iver</h2>
            </div>

            <div class="trending-song">
                <img src="assets/image.png" />
                <h1>Lump Sum</h1>
                <h2>Bon Iver</h2>
            </div>

        </section>

    </main>

    <!-- Footer Not Included -->


    <!-- Media Player -->
    <?php include("includes/media-player.php");?>


</body>

</html>
