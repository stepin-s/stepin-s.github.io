<?php require "../config_db.php" ?>

<?php



if (isset($_POST["email"] )) {
    $email = $_POST["email"];
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
}

$sql = "INSERT INTO users(email, password) VALUES ('$email','$password')";
$query = $pdo->prepare($sql);
$query->execute();

?>




<?php
exit('<meta http-equiv="refresh" content="0; url=login.php" />');
?>