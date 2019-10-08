<?php require "../config_db.php" ?>

<?php require "header.php" ?>

<?php

$keyword = $_GET['search'];

?> 

<?php

/* 
$sth = $pdo->prepare("SELECT * FROM planets WHERE  name LIKE '%" . $keyword . "%' OR color LIKE '%" . $keyword  ."%'");
$result->execute($keyword);
$sth->fetchAll();
*/


$stmt = $pdo->prepare("SELECT * FROM planets WHERE   LOWER(name) LIKE LOWER('%" . $keyword . "%') OR LOWER(color) LIKE LOWER('%" . $keyword  ."%')");
$stmt->execute(array($keyword));
foreach ($stmt as $row)
{
    echo $row['name'] . "\n";
    echo $row['color'] . "\n" ."<br/>";
    
} 

/*
while($row=fetchAll($sth)){ 
    $name  =$row['name']; 
    $color=$row['color']; 
    $id=$row['id']; 

    $output .= 'div' .$name. ' ' .$color. '</div>'; 
}
*/
?>



<?php require "footer.php" ?>