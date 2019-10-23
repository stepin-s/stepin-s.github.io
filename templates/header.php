<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Версия v4.0.0">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Test template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        <a class="navbar-brand" href="/index.php">Main</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="feedback.php">Feedback <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#one">one</a>
                        <a class="dropdown-item" href="#two">two</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#three">three</a>
                    </div>
                </li>
                
            </ul>

        </div>
    </nav>