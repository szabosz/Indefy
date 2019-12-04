<?php
include("../includes/db-config.php");

$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];
$userEmail = $_POST['userEmail'];
//$userImage = $_POST['userImage'];
$userDate = $_POST['userDate'];
$userPlan = $_POST['userPlan'];

//$target_dir = "imageUploads/";
//$target_file = $target_dir . basename($_FILES["userImage"]["name"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$stmt = $pdo->prepare("INSERT INTO `users`
        (`userID`, `userName`, `userPassword`, `userEmail`, `userDate`, `userPlan`)
        VALUES (NULL, '$userName','$userPassword', '$userEmail', '$userDate', '$userPlan');");

$stmt->execute();

echo("Thanks for subscribing!");
//header("Location: user-home.php");
?>
