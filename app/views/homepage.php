<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Restaurant, Pancit, Dining" name="keywords">
    <meta content="Delicious pancit and Filipino dishes at PanCHITan ni Unchang." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">

   <style>
    /* Dark Green Navbar Background */
    .bg-dark-green {
        background-color: #0b3d0b !important; /* Dark Green */
    }

    /* Make Nav Links White */
    .bg-dark-green .nav-link {
        color: #ffffff !important;
    }

    /* Hover effect (light green) */
    .bg-dark-green .nav-link:hover {
        color: #a3ffb3 !important;
    }

    /* Toggler icon (mobile) turn white */
    .navbar-light .navbar-toggler-icon {
        filter: invert(1); /* para maging white */
    }
</style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-dark py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center text-light">
                    <a class="text-light" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-light" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-light" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-light px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-light px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-light px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-light px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-light pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-0 d-none d-lg-block">
                <a href="/" class="text-decoration-none">
                    <h1 class="m-0 display-10 font-weight-semi-bold">
                        <span style="color: #0b3d0b; font-weight: bold;;" class="px-3 mr-1">ONING</span>
                        <span style="color: black;">FLIP</span>
                    </h1>
                </a>
            </div>
            <div class="col-lg-12 col-6 text-right">
              
                <a href="/cart" class="btn border">
                    <i class="fas fa-shopping-cart text-danger"></i>
                    <span class="badge"><?php echo $cartItemCount; ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div class="container-fluid mb-3">
    <div class="row border-top px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-0 bg-dark-green">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/menu" class="nav-item nav-link">Products</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/register" class="nav-item nav-link">Register</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
    <!-- Navbar End -->

    
  <!-- Carousel Start -->
<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="public/img/1.jpg" alt="Sneaker Collection">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Premium Sneakers</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Step Up Your Style</h3>
                    <a href="/menu" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="public/img/2.jpg" alt="Comfortable Footwear">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Comfort Meets Style</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Made for Everyday Wear</h3>
                    <a href="/menu" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="public/img/3.jpg" alt="Limited Edition Shoes">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Exclusive Releases</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Limited Edition Sneakers</h3>
                    <a href="/menu" class="btn btn-light py-2 px-3">Grab Yours Now</a>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="public/img/4.jpg" alt="Sports Shoes">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Performance Ready</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Engineered for Athletes</h3>
                    <a href="/menu" class="btn btn-light py-2 px-3">Explore Collection</a>
                </div>
            </div>
        </div>

        <!-- Slide 5 -->
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="public/img/5.jpg" alt="Stylish Sneakers">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Trendy Footwear</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">For Every Occasion</h3>
                    <a href="/menu" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-leaf text-danger m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Fresh Ingredients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-danger m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Fast Delivery</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-hand-holding-heart text-danger m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Made with Love</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-headset text-danger m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Customer Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5">
            <span class="px-2 text-yellow-orange">Contact Us</span>
        </h2>
        <div class="text-center mb-4">
            <h5 class="font-weight-semi-bold mb-3 text-yellow-orange">Get In Touch</h5>
            <p>Have questions about our products, need help with your order, or want to collaborate? Feel free to reach out to us. We’re here to assist you!</p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3 text-yellow-orange">Main Office</h5>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt icon-yellow-orange mr-3"></i>
                    8C, Greenville Drive, Sauyo, Quezon City, Philippines, 1116
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope icon-yellow-orange mr-3"></i>
                    oningflip@gmail.com
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt icon-yellow-orange mr-3"></i>
                    0915 977 2091
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

   

   <!-- Footer Start -->
<div class="container-fluid bg-dark text-light pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-light text-uppercase mb-4">ONING FLIP</h5>
            <p class="mb-2">8C, Greenville Drive, Sauyo Quezon City, <br> Quezon City, Philippines, 1116</p>
            <p class="mb-2"><i class="fa fa-phone mr-3"></i>0915 977 2091</p>
            <p class="mb-0"><i class="fa fa-envelope mr-3"></i>oningflip@gmail.com</p> <!-- change if needed -->
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0 text-center text-md-left">
            <p class="mb-md-0 text-center text-md-left text-light">© ONING FLIP. All Rights Reserved.</p>
        </div>
    </div>
</div>
<!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="public/mail/jqBootstrapValidation.min.js"></script>
    <script src="public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>
</body>

</html>
