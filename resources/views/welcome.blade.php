<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700' rel='stylesheet' type='text/css'>
    <!-- Custom Styles -->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- favicon.ico -->
    <link rel="icon" href="assets/img/logo.jpg">

    <title>Fire Power</title>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Fire Power</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('Menu.index')}}">Menu</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('Menu.create')}}">Add Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('control')}}">Edit Items</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-center text-white">
        <div class="container">
            <div class="intro-text text-uppercase">
                <div class="intro-heading"><img src="assets/img/logo.jpg" style="width: 150px; height: 150px;"></div>
                <div class="intro-subheading">Burger</div>
                <div class="intro-heading">Fire Power</div>
                <a class="btn btn-danger btn-big js-scroll-trigger" href="{{ route('Menu.index')}}">Go to Menu</a>
            </div>
        </div>
    </header>


    <!-- Scroll-To-Top -->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>


    <!-- Bootstrap JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/jqBootstrapValidation/jqBootstrapValidation.min.js"></script>
    <!-- Custom Scripts -->
    <script src="assets/js/contact.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>
