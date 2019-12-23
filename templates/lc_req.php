<?php require "../config_db.php";

$email = $_POST["email"];
$password = $_POST["password"];
$md5pass = md5($password);
$sql = "SELECT * FROM users WHERE email='$email'"; 
$query = $pdo->prepare($sql);
$query->execute();
$array = $query->fetchAll(PDO::FETCH_ASSOC)[0];
if (isset($array['email']) & isset($array['password'])) {
    if ($array['email'] == $email & $array['password'] === $md5pass) {
        
        $_SESSION['email'] = $array['email'];
        $_SESSION['id'] = $array['id']; 
        echo $email . " Вы успешно вошли на сайт!";
        echo "<br> Переходим в <a href='private_office.php?'>Личный кабинет..</a>";
    } else {
        echo "Извините, введённый вами login или пароль неверный.".'<a href="login.php">Вернуться</a>';
        exit();
    }
} else {
    exit("Извините, пользователя с введенным логином не существует.");
}

exit('<meta http-equiv="refresh" content="2; url=private_office.php" />');

?>
