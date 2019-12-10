<?php require "../config_db.php" ?>

<?php require "header.php" ?>

<?php
$keyword = $_GET['search'];
$_SESSION['search'] = $keyword;
?> 

<?php


if (isset($keyword)) {
    $searched = $_SESSION['search'];
    $inputLogin = $_SESSION['email'];

    $sql = "UPDATE users SET search_history = '$searched' WHERE email = '$inputLogin'";
    $query = $pdo->prepare($sql);
    $query->execute();
    echo "<br><br>";
    var_dump($query);
    echo "<br><br><br>"."Поисковый результат добавлен";
}
else{
    echo "<br><br>"."Поисковый результат НЕ добавлен";
}
// exit('<meta http-equiv="refresh" content="0; url=request.php" />');

?>



<?php require "footer.php" ?>