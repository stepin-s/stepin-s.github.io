<?php require "../config_db.php" ?>
<?php require "header.php" ?>
<link href="/signin.css" rel="stylesheet">

<form class="form-signin " action="registration_req.php" method="POST" >
  <h1 class="h3 mb-3 font-weight-normal">Register your account</h1>
  <label for="inputEmail" class="sr-only ">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control mb-3" placeholder="Email address" required="" autofocus="">
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me" required> I give personal data
    </label>
  </div>
  <button class="btn btn-md btn-primary btn-block" type="submit" >Register</button>
  
</form>



<?php require "footer.php" ?>