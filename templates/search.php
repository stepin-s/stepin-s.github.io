<?php require "../config_db.php" ?>

<?php require "header.php" ?>

<?php

$keyword = $_GET['search'];

?> 

<?php


$stmt = $pdo->prepare("SELECT * FROM planets WHERE  name LIKE LOWER('%" . $keyword . "%') 
                       OR position LIKE LOWER('%" . $keyword  . "%') OR location LIKE LOWER('%" . $keyword  . "%')");
$stmt->execute(array($keyword));
foreach ($stmt as $row) {
    echo $row['name'] . "\n";
    echo $row['position'] . "\n" . "<br/>";
    echo $row['location'] . "\n" . "<br/>";
}


?>



<?php require "footer.php" ?>