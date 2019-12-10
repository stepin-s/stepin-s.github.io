<?php require "../config_db.php" ?>

<?php require "header.php" ?>
<link href="/signin.css" rel="stylesheet">

<form class="form-signin " action="" method="POST" >
  <h1 class="h3 mb-3 font-weight-normal">Write your email for changing password</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control mb-3" placeholder="Email address" required="" autofocus="">
  <button class="btn btn-md btn-primary btn-block" type="submit" >Register</button>
  
</form>

<?php require "footer.php" ?>