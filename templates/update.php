<?
require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php";
$id = $_GET['id']; 
$sth = $pdo->prepare("SELECT * FROM `planets` WHERE id = '$id'");
  $sth->execute();
  $array = $sth->fetchAll(PDO::FETCH_ASSOC);
$item = $array[0];
?>

<?php require "header.php" ?>

<div class="container my-3">
<form action="update_req.php" method="POST">
 <input name="id" type="hidden" value="<?=$item['id'];?>" >      
<div class="form-group row">
            <label for="name" class="col-2 col-form-label">Planet Name</label>
            <div class="col-4">
                <input id="name" name="name" type="text" class="form-control" value="<?=$item['name'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="color" class="col-2 col-form-label">Color</label>
            <div class="col-4">
                <input id="color" name="color" type="text" class="form-control" value="<?=$item['color'];?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-2 col-4">
                <button name="submit" type="submit" class="btn btn-primary">Change</button>
            </div>
        </div>
    </form>
    </div>

    <?php require "footer.php" ?>