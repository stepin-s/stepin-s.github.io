<?php

  $name = $_POST['name'];
  $position = $_POST['position'];
  $location = $_POST['location'];

  if($name == '' & $position =='' & $location =='') { http://test/templates/request.php
    echo 'Введите данные';
    echo '<a href="http://test/templates/request.php"><button class="btn btn-outline-dark btn-sm">Назад</button></a>';
    exit();
  }

  require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php"; 

  $sql = 'INSERT INTO planets(name, position, location) VALUES(:name, :position, :location)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name, 'position' => $position, 'location' => $location]);
 
  exit('<meta http-equiv="refresh" content="0; url=request.php" />');

?>
