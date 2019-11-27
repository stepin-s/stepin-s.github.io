<?php
session_start();
require "../config_db.php";

$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE email='$email'"; 
$query = $pdo->prepare($sql);
$query->execute();
$array = $query->fetchAll(PDO::FETCH_ASSOC)[0];
if (isset($array['email']) & isset($array['password'])) {
    if ($array['email'] == $email & $array['password'] == $password) {
        
        $_SESSION['email'] = $array['email'];
        $_SESSION['id'] = $array['id']; 
        echo $email . " Вы успешно вошли на сайт! <a href='private_office.php'>Личный кабинет</a><br> ";
        echo "<br><a href='?is_exit=1'>Выйти</a><br>";
        var_dump($_SESSION['email']);
        var_dump($_SESSION['id']);
    } else {
        exit("Извините, введённый вами login или пароль неверный.");
    }
} else {
    exit("Извините, пользователя с введенным логином не существует.");
}
if (isset($_GET["is_exit"])) { //Если нажата кнопка выхода
    if ($_GET["is_exit"] == 1) {
        $_SESSION = array(); //Очищаем сессию
         session_destroy();
         exit('<meta http-equiv="refresh" content="0; url=login.php" />'); //Редирект после выхода
    }
}
?>
