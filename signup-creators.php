<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signup-creators.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Listener Creators</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>
        <!-- About Section -->
        <section class="wrapper">
            <h1>Claim your artist profile and start sharing your music worldwide.</h1>
            <form action="php/signup-creators-process.php" enctype="multipart/form-data" method="POST">
                <br>Artist Name<br><input type="text" name="artistName">
                <br>Location<br><input type="text" name="aristsLocation">
                <br>Genre<br><input type="text" name="artistGenre">
                <br>Email<br><input type="email" name="artistEmail">
                <br>Password<br><input type="password" name="artistPassword">
                <p>By signing up, you are agreeing to our terms & conditions and Privacy Policy.</p>
                <div class="submit">
                    <button class="buttonS" type="submit">SIGN UP</button></div>
            </form>
        </section>

    </main>
    
</body>

</html>
