<?php require "../config_db.php" ?>

<?php require "header.php" ?>

<?php
if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
}
?> 

<?php
if (isset($keyword) and !empty($keyword)) {
    $_SESSION['search'] = $keyword;
    $searched = $_SESSION['search'];
    $inputLogin = $_SESSION['email'];
    $user_id = $_SESSION['id'];

    // $d = getdate(); // использовано текущее время
    // foreach ($d as $key => $val) { };
    // $date = "$d[mday].$d[mon].$d[year]  $d[hours]:$d[minutes]";
    $date = time();
    // $sql = "UPDATE users SET search_history = '$searched' WHERE email = '$inputLogin'";
    // $query = $pdo->prepare($sql);
    // $query->execute();

    $sql = $pdo->prepare("SELECT user_search FROM search WHERE user_search = :searched and user_id = :user_id");
    $sql->execute(array(":searched" => $searched, ":user_id" => $user_id));
    echo "<br>";
    // $sql->rowCount() > 0
    if ($row == $sql->fetch(PDO::FETCH_OBJ)) {
        $stmt = "INSERT INTO search(user_id, user_search, user_search_date) VALUES (:id, :search, :date)";
        
        $stm = $pdo->prepare($stmt);
        $stm->execute(['id' => $user_id, 'search' => $searched, 'date' => $date]);
        echo "<br>" . 'Поисковый результат "' . $searched . '" добавлен' . ' <a href="request.php">Назад </a>';
    } else {
        echo "<br>" . 'Ваш результат поиска "' . $searched . '" уже сохранён' . ' <a href="request.php">Назад </a>';
    }
} else {
    echo "<br>" . "Поисковый результат НЕ добавлен" . ' <a href="request.php">Назад </a>';
}
// exit('<meta http-equiv="refresh" content="0; url=request.php" />');

?>



<?php require "footer.php" ?>