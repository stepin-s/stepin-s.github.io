<?php require "../config_db.php" ?>
<?php require "header.php" ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php
if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
}
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}
if (isset($_GET['position'])) {
    $position = $_GET['position'];
}

$limit    = 100;
$myarr = ['limit' => $_GET['limit']];
$limit = $myarr['limit'] ?? 20;
$items    = array();
$allItems = 0;
$html     = NULL;
$pageCount = 0;
$start    = isset($_GET['start'])   ? intval($_GET['start'])   : 0;

if ($city) {
    $stmt = $pdo->prepare("SELECT * FROM planets WHERE  location = ?  ORDER BY name LIMIT $start,$limit");
    $stmt->bindParam(1, $city, PDO::PARAM_STR, 12);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $allItems = $stmt->fetch(PDO::FETCH_OBJ)->count;
} else if ($position) {
    $stmt = $pdo->prepare("SELECT * FROM planets WHERE  position = ?  ORDER BY name LIMIT $start,$limit");
    $stmt->bindParam(1, $position, PDO::PARAM_STR, 12);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $allItems = $stmt->fetch(PDO::FETCH_OBJ)->count;
} else if ($keyword) {
    $stmt = $pdo->prepare("SELECT * FROM planets WHERE  name LIKE LOWER('%" . $keyword . "%') 
                       OR position LIKE LOWER('%" . $keyword  . "%') OR location LIKE LOWER('%" . $keyword  . "%') ORDER BY name ");
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $allItems = $stmt->fetch(PDO::FETCH_OBJ)->count;

    $_SESSION['search'] = $keyword;
    $searched = $_SESSION['search'];
    $inputLogin = $_SESSION['email'];

    $sql = "UPDATE users SET search_history = '$searched' WHERE id = '$inputLogin'";
    $query = $pdo->prepare($sql);
    $query->execute();
} else {
    $sth = $pdo->prepare("SELECT * FROM `planets`  LIMIT $start,$limit ");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);
    $allItems = $sth->fetch(PDO::FETCH_OBJ)->count;
    // var_dump($sth);
}
?>

<div class="container my-3 ">
    <div class="row align-items-center">
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

            <form action=" search.php" class="align-items-center form-row">
                <div class="col-auto ">
                    <input id="search" name="search" type="hidden" value="<?= $_GET['search'] ?>">
                    <button class="btn btn-outline-info btn-sm my-2 my-sm-0" type="submit">Save</button>
                </div>
                <div class="col-auto ">
                    <button class="btn btn-outline-secondary btn-sm my-2 my-sm-0" type="submit">Print</button>
                </div>
            </form>

        </div>



        <?php
        if ($keyword) {
            echo "По вашему запросу '$keyword' найдено  результатов: ";
            echo count($array);
        }
        ?>

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
                <th scope="col">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Показать по</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/templates/request.php/?limit=5">5</a>
                        <a class="dropdown-item" href="/templates/request.php/?limit=10">10</a>
                        <a class="dropdown-item" href="/templates/request.php/?limit=1000">все</a>
                    </div>
                </th>
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

    <?php
    $sth = $pdo->prepare("SELECT COUNT(*) as count FROM planets");
    $sth->execute();
    $allItems = $sth->fetch(PDO::FETCH_OBJ)->count;
    $pageCount = ceil($allItems / $limit);
    for ($i = 0; $i < $pageCount; $i++) {
        // Здесь ($i * $limit) - вычисляет нужное для каждой страницы  смещение, 
        // а ($i + 1) - для того что бы нумерация страниц начиналась с 1, а не с 0
        $html .= '<li class="page-item"><a class="page-link" href="/templates/request.php?'  . '&start=' . ($i * $limit)  . '">' . ($i + 1)  . '</a></li>';
    }
    // Собственно выводим на экран:
    echo '<ul class="pagination justify-content-end">' . $html . '</ul>';
    ?>

</div>

<?php require "footer.php" ?>