<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php"; 

    $_SERVER['HTTP_REFERER'];

    $id = $_GET['id']; 

    /*
  $sql = 'DELETE FROM planets WHERE id = :id';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);
  */
try{
  $sql = 'DELETE FROM `planets` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);
   /* exit('<meta http-equiv="refresh" content="0; url=request.php" />'); */
    exit('<meta http-equiv="refresh" content="0; url='.$_SERVER['HTTP_REFERER'].'">') ;
}
catch (\Exception $e) {
  echo $e->getMessage();
}


?>