<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>
        <section class="wrapper-landing">

            <!--Landing Section-->
            <div class="landing-content">
                <h1>Start discovering your favourite new underground artists.</h1>
                <div class="buttons-landing">
                    <button class="buttonC" onclick="window.location.href = '#';">Start Creating</button>
                    <button class="buttonL" onclick="window.location.href = '#';">Start Listening</button>
                </div>
            </div>
            <div class="landing-content">
                <img src="assets/music.png" />
            </div>
        </section>

        <!--    How It Works   -->
        <section class="wrapper-works">
            <h2>How It Works</h2>

            <div class="six">
                <img src="assets/hiw-one.png" alt="">
            </div>
            <div class="six">
                <div class="paragraph">
                    <h3>Get Started</h3>
                    <p>Sign up for access to the forefront of rising independent music. Choose from our monthly or yearly subscription and connect directly to your favourite new indie artists.</p>
                </div>
            </div>
            <div class="six">
                <div class="paragraph">
                    <h3>Discover New Music</h3>
                    <p>Search through our continiously growing library of new music and discover rising new artists.</p>
                </div>
            </div>
            <div class="six">
                <img src="assets/hiw-two.png" alt="">
            </div>
            <div class="six">
                <img src="assets/hiw-three.png" alt="">
            </div>
            <div class="six">
                <div class="paragraph">
                    <h3>Support Artists Directly </h3>
                    <p>We take out the middleman, so artists have the freedom to create what they want. Part of your subscription goes directly to support the artists you most listened to each month.</p>
                </div>
            </div>
        </section>

        <!--  Register -->
        <section class="wrapper-register">
            <div class="register">
                <h2 class="title">Support rising artists.</h2>
                <div class="buttons">
                    <button class="buttonC" onclick="window.location.href = '#';">Start Creating</button>
                    <button class="buttonL" onclick="window.location.href = '#';">Start Listening</button>
                </div>
                <h3>#indefy</h3>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include("includes/footer.php");?>

</body>

</html>
