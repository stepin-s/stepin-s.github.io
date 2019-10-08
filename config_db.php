<?php 

$dsn = "mysql:host=test;dbname=solar_system;charset=utf8";

try{
    $pdo = new \PDO($dsn, 'testuser', 'testpassword',array(PDO::ATTR_PERSISTENT => false));
    $pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch (\Exception $e) {
       echo $e->getMessage();
}


/* UPDATE `planets` SET  `name` = '{$name}', `color` = '{$color}' WHERE `id` = '{$id}' */

?>


