<?php require "../config_db.php" ?>

<?php
$visit_count = 1;
if (isset($_SESSION["visit_count"])) {
  $visit_count = $_SESSION["visit_count"] + 1;
}
$_SESSION["visit_count"] = $visit_count;

if (isset($_SESSION['email'])) {
  exit('<meta http-equiv="refresh" content="0; url=private_office.php" />');
}


?>

<?php require "header.php" ?>

<link href="/signin.css" rel="stylesheet">


<div class="d-flex flex-column mx-auto ">
  <?php
  print("Количество посещений: " . $visit_count);
  ?>
  <form class="form-signin " action="lc_req.php" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control mb-3" placeholder="Email address" required="" autofocus="">
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
    <div class="checkbox ">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>

  </form>

  <form action="registration.php" class="form-signin">
    <button class="btn btn-md btn-secondary btn-block">Register</button>
    <div class="mt-2">
      <a href="forgot_pass.php">Forgot pass?</a>
    </div>
    <p class="mt-5 mb-3 text-muted">© 2019 Open Source</p>
  </form>

</div>
<?php require "footer.php" ?>