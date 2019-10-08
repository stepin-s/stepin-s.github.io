<?php

  $name = $_POST['name'];
  $color = $_POST['color'];

  if($name == '' & $color =='') { http://test/templates/request.php
    echo 'Введите данные';
    echo '<a href="http://test/templates/request.php"><button class="btn btn-outline-dark btn-sm">Назад</button></a>';
    exit();
  }

  require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php"; 

  $sql = 'INSERT INTO planets(name, color) VALUES(:name, :color)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name, 'color' => $color]);
 
  exit('<meta http-equiv="refresh" content="0; url=request.php" />');

?>
