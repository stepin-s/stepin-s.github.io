<?php

  $id = $_POST['id']; 
  $name = $_POST['name'];
  $color = $_POST['color'];

  if($name == '' & $color =='') {
    echo 'Введите данные';
    exit();
  }

  require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php"; 

  $sql = "UPDATE planets SET name='$name', color='$color' WHERE id = '$id'";
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name, 'color' => $color]);
 
  exit('<meta http-equiv="refresh" content="0; url=request.php" />');

?>