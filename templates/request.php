<?php require "../config_db.php" ?>
<?php require "header.php" ?>



<?php
$keyword = $_GET['search'];
$city = $_GET['city'];
$position = $_GET['position'];


	
var_dump($_GET);
var_dump($city);
var_dump($position);
if ($city) {

    $stmt = $pdo->prepare("SELECT * FROM planets WHERE  location = ?  ORDER BY name");
    $stmt->bindParam(1, $city, PDO::PARAM_STR, 12);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else if ($position) {
    $stmt = $pdo->prepare("SELECT * FROM planets WHERE  position = ?  ORDER BY name");
    $stmt->bindParam(1, $position, PDO::PARAM_STR, 12);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else if ($keyword) {
    $stmt = $pdo->prepare("SELECT * FROM planets WHERE  name LIKE LOWER('%" . $keyword . "%') 
                       OR position LIKE LOWER('%" . $keyword  . "%') OR location LIKE LOWER('%" . $keyword  . "%') ORDER BY name");
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sth = $pdo->prepare("SELECT * FROM `planets` ");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);
}
?>


<div class="container my-3">
    <div class="row">
        <div class="col-8">
            <form action="add.php" method="POST">
                <div class="align-items-center form-row">
                    <div class="col-auto">
                        <input id="name" name="name" type="text" class="form-control form-control-sm" placeholder="Employee name">
                    </div>
                    <div class="col-auto">
                        <input id="position" name="position" type="text" class="form-control form-control-sm" placeholder="Position">
                    </div>
                    <div class="col-auto">
                        <input id="location" name="location" type="text" class="form-control form-control-sm" placeholder="Location">
                    </div>
                    <div class="col-auto">
                        <button name="submit" type="submit" class="btn btn-outline-dark btn-sm">Add</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-4">
            <form action="request.php" class="align-items-center form-row">
                <div class="align-items-center form-row">
                    <div class="col-auto">
                        <input class="form-control mr-sm-2 form-control-sm" type="text" maxlength="15" id="search" name="search" required placeholder="Search" value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="reset" onclick="location.href = '/templates/request.php'">Clear</button>
                    </div>
                </div>
            </form>
            <?php
            if ($keyword) {
                echo "По вашему запросу '$keyword' найдено  результатов: ";
                echo count($array);
            }
            ?>

        </div>

    </div>

    <table class="my-table table table-hover table-gray my-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Должность</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/templates/request.php/?position=C.E.O">C.E.O </a>
                        <a class="dropdown-item" href="/templates/request.php/?position=via C.E.O">via C.E.O </a>
                        <a class="dropdown-item" href="/templates/request.php/?position=rabotyaga">rabotyaga </a>
                        <a class="dropdown-item" href="/templates/request.php/?position=marketolog">marketolog </a>
                    </div>
                </th>
                <th scope="col">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Location</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/templates/request.php/?city=kiev">Kiev</a>
                        <a class="dropdown-item" href="/templates/request.php/?city=london">London</a>
                        <a class="dropdown-item" href="/templates/request.php/?city=moscow">Moscow</a>
                        <a class="dropdown-item" href="/templates/request.php/?city=valencia">Valencia</a>
                    </div>
                </th>
                <th scope="col">Действие</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($array as $row) { ?>
                <tr>
                    <th scope="row"> <?php echo $row['id'] . "\n"; ?> </th>
                    <td> <?php echo $row['name'] . "\n"; ?> </td>
                    <td> <?php echo $row['position'] . "\n", "<br>"; ?> </td>
                    <td> <?php echo $row['location'] . "\n", "<br>"; ?> </td>
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