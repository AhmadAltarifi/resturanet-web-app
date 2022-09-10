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
                        <a class="nav-link js-scroll-trigger" href="#" style="color: red;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#menu">Menu</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('Menu.create')}}" style="color: red;">Add Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('control')}}" style="color: red;">Edit Items</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <!-- Menu Grid -->
    <section class="bg-light" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Menu</h2>
                    <hr class="mt-4 mb-5">
                </div>
            </div>
            <div class="row">
                @foreach ($menu as $menu)
                <div class="col-md-4 col-sm-6 menu-item">

                    <img class="img-fluid" src="{{ asset('/storage/uploads/menu_items_images/' . $menu->item_image) }}" alt="Food">

                <div class="menu-caption">
                    <h3 class="text-muted">{{$menu->item_name}}<h3/>
                        <p class="test-muted">Price : {{$menu->item_price}} ₺</p>
                </div>
            </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-12">
                    <ul class="list-inline social-buttons mb-0">
                        <li class="list-inline-item">
                            <a href="tel:+39057821393">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.tripadvisor.it/Restaurant_Review-g194739-d4341404-Reviews-Trattoria_Porsenna-Chiusi_Tuscany.html" target="_blank">
                                <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://plus.google.com/+TrattoriaPorsennaSrlChiusi" target="_blank">
                                <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://it-it.facebook.com/TrattoriaPorsenna/" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/trattoriaporsenna/" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <div class="col-md-12">
                    <span class="copyright"><a href="Https://www.twitter.com/ahmad_altarifi9">Ahmad Al-Tarifi</a> &copy; 2022</span>
                </div>
            </div>
        </div>
    </footer>

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
