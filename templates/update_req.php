<?php

  $id = $_POST['id']; 
  $name = $_POST['name'];
  $position = $_POST['position'];
  $location = $_POST['location'];

  if($name == '' & $position =='' & $location =='') {
    echo 'Введите данные';
    exit();
  }

  require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php"; 

  $sql = "UPDATE planets SET name='$name', position='$position', location='$location' WHERE id = '$id'";
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name, 'position' => $position, 'location' => $location]);
 
  exit('<meta http-equiv="refresh" content="0; url=request.php" />');

?>