<?php
session_start();
require 'db_connection.php';

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<title>Home</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: #EE0000;
}
</style>
</head>

<body>
<div class="container" style="background-color:white">
<h3>Hello, <?php echo $userData['username'];?></h3>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iSHOP | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#">
                <h1 class="logo">iSHOP</h1>
            </a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-user"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">HOME</a></li>
                <li><a href="./store.html">STORE</a></li>
                <li><a href="#">PAGES</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">SHOP DETAILS</a></li>
                        <li><a href="http://localhost/shoppingcart/index.php">SHOPPING CART</a></li>
                        <li><a href="./checkout.html">CHECK OUT</a></li>
                        <li><a href="./blog-details.html">BLOG DETAILS</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">BLOG</a></li>
                <!-- <li><a href="./contact.html">Contact</a></li> -->
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="#">
                            <h1 class="logo">iSHOP</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">HOME</a></li>
                            <li><a href="./store.html">STORE</a></li>
                            <li><a href="#">PAGES</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">SHOP DETAILS</a></li>
                                    <li><a href="http://localhost/shoppingcart/index.php">SHOPPING CART</a></li>
                                    <li><a href="./checkout.html">CHECK OUT</a></li>
                                    <li><a href="./blog-details.html">BLOG DETAILS</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="./blog.html">BLOG</a></li>
                            <!-- <li><a href="./contact.html">Contact</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="http://localhost/php_login"><i class="fa fa-user"></i></a></li>
                            <li><a href="http://localhost/shoppingcart/index.php"><i class="fa fa-shopping-bag"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__item set-bg" data-setbg="./images/mis/corousel_3.png">
                        <div class="hero__text">
                            <a href="#" ></a>
                            <!-- <a href="#" class="primary-btn">SHOP NOW</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://i.insider.com/61a92e735d47cc0018e9153e?width=700">
                            <h5><a href="./laptops.html">LAPTOPS</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://assets1.ignimgs.com/2020/03/20/smart-watches-1584721162702_160w.jpg?width=1280">
                            <h5><a href="./smartwatches.html">SMART WATCHES</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://m-cdn.phonearena.com/images/article/64576-wide-two_1200/The-Best-Phones-in-2022-updated-February.jpg">
                            <h5><a href="./smartphones.html">SMARTPHONES</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://cdn.arstechnica.net/wp-content/uploads/2022/02/2.jpg">
                            <h5><a href="./tablets.html">TABLETS</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://www.kxan.com/wp-content/uploads/sites/40/2021/06/1040x585-2021-0517-best-cheap-headphones-2021-22fb2c.jpg?w=1280">
                            <h5><a href="./headphones.html">HEADPHONES</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>BEST SELLER</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-android-smartphones-1602769715.jpg?crop=0.502xw:1.00xh;0.250xw,0&resize=640:*">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">SAMSUNG Galaxy S20 FE</a></h6>
                            <h5>Rs 37990</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://i.wpimg.pl/O/730x0/m.komorkomania.pl/obraz-2021-03-23-194318-17654460.png">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">OnePlus Watch</a></h6>
                            <h5>Rs 14999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">APPLE MacBook Air M1</a></h6>
                            <h5>Rs 84990</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">boAt Rockerz 370 Bluetooth Headset</a></h6>
                            <h5>Rs 1199</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://cdn.arstechnica.net/wp-content/uploads/2022/02/2.jpg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">APPLE iPad Pro 2021 (3rd Generation)</a></h6>
                            <h5>Rs 71900</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://www.xda-developers.com/files/2021/10/2021-10-18_18-14-42.439-1024x576.jpeg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">APPLE Airpods Pro with MagSafe Charging Case Bluetooth</a></h6>
                            <h5>Rs 21900</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://www.mobilefun.co.uk/blog/wp-content/uploads/2020/05/qi-charging.jpg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">RAEGR ARC 400 QI Certified Wireless Charging Pad 10W RG</a></h6>
                            <h5>Rs 999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://c.s-microsoft.com/en-us/CMSImages/1920_Panel01_PriorityFeature_AIO.jpg?version=d00cfd4a-79e3-44f9-f40c-d159e4e89a9d">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">HP Pavilion Core i5 (4 GB DDR4/1 TB/Windows 11</a></h6>
                            <h5>Rs 67490</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="https://www.cnet.com/a/img/resize/3599cd5e2e3a7423a49de0da1a9de2a84e8e3d16/hub/2018/02/13/517fda12-de2a-4c3f-bee5-05daaf870537/01laptops-with-longest-battery-life-2018-feb.jpg?auto=webp&width=1092" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="https://fdn.gsmarena.com/imgroot/news/21/12/best-smartwatches-2021/gallery/-1200/gsmarena_003.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>LATEST PRODUCTS</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://cdn.vox-cdn.com/thumbor/KZgNIQYlKZ3pmgbXDoyJkgAMYIY=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19086888/akrales_190822_3612_0135.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://cdn.vox-cdn.com/thumbor/KZgNIQYlKZ3pmgbXDoyJkgAMYIY=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19086888/akrales_190822_3612_0135.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>TOP RATED PRODUCTS</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://cdn.vox-cdn.com/thumbor/KZgNIQYlKZ3pmgbXDoyJkgAMYIY=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19086888/akrales_190822_3612_0135.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://cdn.vox-cdn.com/thumbor/KZgNIQYlKZ3pmgbXDoyJkgAMYIY=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19086888/akrales_190822_3612_0135.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>REVIEW PRODUCTS</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://cdn.vox-cdn.com/thumbor/KZgNIQYlKZ3pmgbXDoyJkgAMYIY=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19086888/akrales_190822_3612_0135.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://cdn.vox-cdn.com/thumbor/KZgNIQYlKZ3pmgbXDoyJkgAMYIY=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19086888/akrales_190822_3612_0135.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0Mjc0MzN8fGVufDB8fHx8&w=1000&q=80" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/08/best-noise-cancelling-headphones.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Lorem ipsum Dollar</h6>
                                        <span>Rs30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>FROM THE BLOG</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://i.wpimg.pl/O/730x0/m.komorkomania.pl/obraz-2021-03-23-194318-17654460.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> April 8,2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">OnePlus Watch</a></h5>
                            <p>Traditionally found in luxury watches, the OnePlus Watch is the world???s first smart watch to utilize cobalt alloy in its middle frame. Twice as hard as stainless steel2, it grants a stunning luster and corrosion resistance. It's durable yet irresistible ??? it???s nickel-free to greatly reduce any skin allergic reactions. Meticulous hand-polishing of the cobalt alloy ensures the elemental elegance resonates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://www.mobilefun.co.uk/blog/wp-content/uploads/2020/05/qi-charging.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> April 8,2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Certified Wireless Charging Pad 10W RG</a></h5>
                            <p>Connecting to a wireless charger is faster and easier than plugging in cables. Just set your phone down onto the charger, and it starts charging immediately - no need to free up your other hand to find and connect a cable. Wireless chargers also protect your phone from damage caused by repeated connecting and disconnecting, and are more robust than charging cables which may end up showing signs of wear and tear.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://www.cnet.com/a/img/17AQ2yNNIT8cujCHOsBXAe0eqaM=/940x528/2022/01/06/b3089217-6e72-41e8-9a62-f955e52b721f/shure-aonic-40-headphones.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> April 8,2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Sennheiser HD 350BT Bluetooth Headset</a></h5>
                            <p>Crafted from high-quality materials, the robust and stylish HD models offer an exceptional combination of versatility and superior sound. At home while listening to a podcast or on the go with your favorite song, you can count on the new HD series to be your ultimate companion for wireless audio ??? whatever you listen to.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer-logo">
                            <h1 class="logo">iSHOP</h1>
                        </div>
                        <ul>
                            <li>Address: </li>
                            <li>Phone: </li>
                            <li>Email: </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>USEFUL LINKS</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>GET E-MAIL UPDATES ABOUT OUR LATEST SHOP AND SPECIAL OFFERS.</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>