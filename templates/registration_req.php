<?php require "../config_db.php" ?>

<?php

$date = time();

if (isset($_POST["email"]) and !empty($_POST["email"]) and isset($_POST["password"]) and !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $md5pass = md5($password);

    $sql = $pdo->prepare("SELECT COUNT(*) AS `total` FROM users WHERE email = :email");
    $sql->execute(array(':email' => $email));
    $result = $sql->fetchObject();

    if ($result->total > 0) {
        echo 'Логин: ' . $email . ' уже занят другим пользователем, введите другое значение  <a href="registration.php">Назад</a>';
    } else {
        $sql = "INSERT INTO users(email, password, date) VALUES ('$email','$md5pass','$date')";
        $query = $pdo->prepare($sql);
        $query->execute();
        echo "Регистрация завершена успешно, перенаправляем..";
        exit('<meta http-equiv="refresh" content="2; url=login.php" />');
    }
} else {
    echo "Пустые значения недопустимы";
    exit('<meta http-equiv="refresh" content="2; url=login.php" />');
}



?>