<?php require "../config_db.php" ?>


<?php
if (isset($_POST['request'])) {
    $sth = $pdo->prepare("SELECT * FROM `planets` ");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);
}
?>



<?php require "header.php" ?>

<div class="container my-3">

    <form action="add.php" method="POST">
        <div class="align-items-center form-row">
            <div class="col-auto">
                <input id="name" name="name" type="text" class="form-control form-control-sm" placeholder="Planet name">
            </div>
            <div class="col-auto">
                <input id="color" name="color" type="text" class="form-control form-control-sm" placeholder="Color">
            </div>
            <div class="col-auto">
                <button name="submit" type="submit" class="btn btn-outline-dark btn-sm">Add</button>
            </div>
            </form>

            <form action="search.php" class="align-items-center form-row">
                <div class="col-auto">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-auto">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>

            </form>

        
    


    <table class="table table-hover table-gray my-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Планета</th>
                <th scope="col">Цвет</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($array as $row) { ?>
                <tr>
                    <th scope="row"> <?php echo $row['id'] . "\n"; ?> </th>
                    <td> <?php echo $row['name'] . "\n"; ?> </td>
                    <td> <?php echo $row['color'] . "\n", "<br>"; ?> </td>
                    <td>
                        <div class="form-small">

                            <form action="update.php" method="GET">
                                <input name="id" type="hidden" value="<?php echo $row['id'] ?>">
                                <button name="submit" type="submit" class="mr-5 btn btn-outline-dark btn-sm">Изменить</button></a>
                            </form>

                            <form action="delete.php?id=<?php echo $row['id'] ?>" method="POST">
                                <button name="submit" type="submit" class="btn btn-outline-dark btn-sm">Удалить</button></a>
                            </form>
                        </div>

                    </td>
                </tr>

            <?php } ?>
        </tbody>


    </table>


</div>

<?php require "footer.php" ?>