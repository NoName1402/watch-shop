<<<<<<< HEAD
=======
<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'watch-shop') or die('Couldn\'t connect to Database');

    $error = array();
    session_start();

    if(isset($_SESSION['user_logged'])) {
        $user = $_SESSION['user_logged'];

        include('./libraries/helper.php');

        $cart = sumCart($conn, $user['id']);
    }

?>

>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>EShopper - Bootstrap Shop Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    
        <!-- Favicon -->
<<<<<<< HEAD
        <link href="img/favicon.ico" rel="icon">
=======
        <link href="./assets/img/favicon.ico" rel="icon">
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        
        <!-- Libraries Stylesheet -->
<<<<<<< HEAD
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
=======
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
        
        <!-- Customized Bootstrap Stylesheet -->
<<<<<<< HEAD
        <link href="css/style.css" rel="stylesheet">
=======
        <link href="./assets/css/style.css" rel="stylesheet">
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
    </head>

<body>
    <header id="header">
        <!-- Topbar Start -->
        <div class="header-top bg-gray-900 py-2">
            <div class="container">
                <div class="row py-2">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="d-inline-flex align-items-center">
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
            </div>
        </div>
        <!-- Topbar End -->

        <div class="header-inner py-4 bg-gray-900">
            <div class="container">
                <div class="row align-items-center py-3">
                    <div class="col-lg-3 d-none d-lg-block">
                        <a href="" class="text-decoration-none">
                            <h2 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">WATCH</span><span class="text-light">SHOP</span></h2>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6 text-left search-inner">
<<<<<<< HEAD
                        <form action="" class="w-100 position-relative">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for products">
=======
                        <form method="POST" action="shop.php" class="form-search w-100 position-relative">
                            <div class="input-group">
                                <input type="search" class="form-control" name="search" placeholder="Tìm kiếm tên sản phẩm...">
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary text-light">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>

                                <div class="search-history w-100 bg-light mt-2 rounded">
<<<<<<< HEAD
                                    <h5 class="p-3">
                                        Search history
                                    </h5>
                                    <ul class="list-group">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                      </ul>
=======
                                    
                                    <ul class="search-history-list list-group">
                                        
                                    </ul>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a

                                    <a href="" class="btn text-center w-100 p-2 btn-show-all">All</a>
                                </div>
                            </div>
                        </form>
                    </div>
<<<<<<< HEAD
                    <div class="col-lg-3 col-6 text-right">
                        <a href="" class="btn" style="font-size: 20px">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-light">0</span>
                        </a>
                        <a href="" class="btn" style="font-size: 20px">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge sum-cart text-light">0</span>
                        </a>
=======
                    <div class="col-lg-3 col-12 d-flex align-items-center justify-content-lg-end justify-content-sm-between">
                        <a href="./cart.php" class="btn" style="font-size: 20px">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge sum-cart text-light"><?php echo $cart ?? 0?></span>
                        </a>
                        <?php if(isset($user) && !(empty($user))) { ?>
                            <button class="btn btn-show-nav-sub" style="font-size: 20px">
                                <i class="fa-solid fa-user text-primary"></i>
                                <span class="badge text-light"><?=$user['ten_tai_khoan']?></span>
                            </button>
                            <div class="nav-sub">
                                <ul>
                                    <li>
                                        <img src="./storage/uploads/avatar-default.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%">
                                        <span class="ml-2"><?=$user['ten_tai_khoan']?></span>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="profile.php"><i class="fa-solid fa-id-card"></i> Thông tin tài khoản</a></li>
                                    <li><a href="order.php"><i class="fa-regular fa-clock"></i> Lịch sử đơn hàng</a></li>
                                    <li class="divider"></li>
                                    <li><a href="./logout.php"><i class="fa-solid fa-power-off"></i> Đăng xuất</a></li>
                                </ul>
                            </div>
                        <?php } else { ?>
                            <a href="./register.php" class="btn" style="font-size: 20px">
                                <i class="fa-solid fa-user text-primary"></i>
                                <span class="badge text-light">Đăng nhập</span>
                            </a>
                        <?php } ?>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                    </div>
                </div>
            </div>
        </div>


        <!-- Navbar Start -->
        <div class="header-nav bg-gray-900">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg bg-gray-900 navbar-light py-3 py-lg-0 px-0">
                            <a href="" class="text-decoration-none d-block d-lg-none">
                                <h2 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">WATCH</span>SHOP</h2>
                            </a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mr-auto py-0 w-100 d-flex justify-content-center">
<<<<<<< HEAD
                                    <a href="index.html" class="nav-item nav-link position-relative text-uppercase mx-4">Home</a>
                                    <a href="shop.html" class="nav-item nav-link position-relative text-uppercase  mx-4">Shop</a>
                                    <a href="detail.html" class="nav-item nav-link position-relative text-uppercase  mx-4">Shop Detail</a>
                                    <a href="cart.html" class="nav-item nav-link position-relative text-uppercase  mx-4">Shopping Cart</a>
                                    <a href="checkout.html" class="nav-item nav-link position-relative text-uppercase  mx-4">Checkout</a>
                                    <a href="contact.html" class="nav-item nav-link position-relative text-uppercase  mx-4 active">Contact</a>
=======
                                    <a href="index.php" class="nav-item nav-link position-relative text-uppercase mx-4">Trang chủ</a>
                                    <a href="shop.php" class="nav-item nav-link position-relative text-uppercase  mx-4">Sản Phẩm</a>
                                    <a href="cart.php" class="nav-item nav-link position-relative text-uppercase  mx-4">Giỏ hàng</a>
                                    <a href="contact.php" class="nav-item nav-link position-relative text-uppercase  mx-4 active">Liên hệ</a>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
    </header>


    <!-- Page Header Start -->
    <div class="container-fluid bg-gray-200 mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
<<<<<<< HEAD
                <p class="m-0"><a href="">Home</a></p>
=======
                <p class="m-0"><a href="">Trang chủ</a></p>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="footer bg-gray-900">
        <div class="container text-light mt-5 pt-5">
            <div class="row  pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <a href="" class="text-decoration-none">
                        <h2 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">WATCH</span><span class="text-light">SHOP</span></h2>
                    </a>
                    <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
<<<<<<< HEAD
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-light mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-light mr-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-light mr-3"></i>+012 345 67890</p>
=======
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-light mr-3"></i>CMT8, Ninh kiều, Cần Thơ</p>
                    <p class="mb-2"><i class="fa fa-envelope text-light mr-3"></i>example@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-light mr-3"></i>029.382.323</p>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
<<<<<<< HEAD
                            <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-light mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                <a class="text-light mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                                <a class="text-light mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                <a class="text-light mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                <a class="text-light" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-light mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                <a class="text-light mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                                <a class="text-light mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                <a class="text-light mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                <a class="text-light" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Newsletter</h5>
=======
                            <h5 class="font-weight-bold text-light mb-4">Liên kết</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                                <a class="text-light mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Sản Phẩm</a>
                                <a class="text-light mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Giỏ hàng</a>
                                <a class="text-light" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Liên kết</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                                <a class="text-light mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Sản Phẩm</a>
                                <a class="text-light mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Giỏ hàng</a>
                                <a class="text-light" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Ưu đãi</h5>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                        required="required" />
                                </div>
                                <div>
<<<<<<< HEAD
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
=======
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Đăng ký ngay</button>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>



    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
=======
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>
>>>>>>> e4038046f2ba56890c61ab2348ad463958712a6a
</body>

</html>