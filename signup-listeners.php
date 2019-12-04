<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signup-listeners.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Listener Signup</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include("includes/header.php");?>

    <main>
        <!-- About Section -->
        <section class="wrapper">
            <h1>Become a monthly listener and support your favourite underground artists.</h1>
            <form action="php/signup-listeners-process.php" enctype="multipart/form-data" method="POST">
                Email<br><input type="email" name="userEmail" required />
                <!--            <br>Confirm Email<br><input type="userEmail">-->
                <br>Password<br><input type="password" name="userPassword" required />
                <br>What should we call you?<br><input type="text" name="userName" required />
                <br>Date of Birth<br><input type="date" name="userDate" required />
                <!--            <br>Profile Photo<br><input type="file" name="userImage" id="userImage" required/>-->
                <!--            <div class="payment-plan">-->
                <div class="payment-plan">

                    <p>Select your payment plan</p>

                    <ul>
                        <li>
                            <input type="radio" id="m-option" name="userPlan" />
                            <label for="m-option">Monthly-$10</label>

                            <div class="check"></div>
                        </li>

                        <li>
                            <input type="radio" id="y-option" name="userPlan" />
                            <label for="y-option">Yearly-$100</label>

                            <div class="check">
                                <div class="inside"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <p>By signing up, you are agreeing to our terms & conditions and Privacy Policy.</p>
                <div class="submit">
                    <button class="buttonS" type="submit">SIGN UP</button></div>
            </form>
        </section>

    </main>

</body>

</html>
