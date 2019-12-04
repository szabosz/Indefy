<?php
include("../includes/connect.php");

$artistName = $_POST['artistName'];
$artistPassword = $_POST['artistPassword'];
$artistEmail = $_POST['artistEmail'];
//$userImage = $_POST['userImage'];
$artistLocation = $_POST['artistLocation'];
$artistGenre = $_POST['artistGenre'];

$stmt = $pdo->prepare("INSERT INTO `artists`
        (`artistID`, `artistName`, `artistPassword`, `artistEmail`, `artistLocation`, `artistGenre`)
        VALUES (NULL, '$artistName','$artistPassword', '$artistEmail', '$artistLocation', '$artistGenre');");

$stmt->execute();

echo("Thanks for subscribing!");
//header("Location: user-home.php");
?>
