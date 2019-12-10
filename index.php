<?php require "config_db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Пример на bootstrap 4: Версия v4.0.0">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Test template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand" href="/index.php">Main</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="request.php">Employee list</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="templates/feedback.php">Feedback <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="templates/contacts.php">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#one">one</a>
            <a class="dropdown-item" href="#two">two</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#three">three</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="container">
    <h1 class="mb-3">Main Page</h1>
  </div>
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>

          <form action="templates/request.php" method="POST">
            <button name="request" type="submit" class="btn btn-outline-info">Request employee list</button></a>
          </form>

        </p>

        <?php   ?>


      </div>
    </section>



  </main>
  <?php require "templates/footer.php" ?>

</html>