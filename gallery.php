<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <?php include('include/link.php') ?>

</head>

<body>

<div id="main-wrapper">

<?php include('include/header.php') ?>

<!-- Offcanvas Menu Start -->
<div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
    <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
        <i class="fa fa-times"></i>
    </a>

    <div class="offcanvas-wrapper">

        <div class="offcanvas-inner-content">
            <div class="offcanvas-mobile-search-area">
                <form action="#">
                    <input type="search" placeholder="Search ...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="menu-item-has-children"><a href="#">Home</a>
                        <ul class="submenu2">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Shop</a>
                        <ul class="submenu2">
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu2">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login Register</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                <ul class="submenu2">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-three-column.html">Shop Three Column</a></li>
                                    <li><a href="shop-four-column.html">Shop Four Column</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-nosidebar.html">Shop List No Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right
                                            Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Product Details</a>
                                <ul class="submenu2">
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="single-product-variable.html">Variable Product</a></li>
                                    <li><a href="single-product-affiliate.html">Affiliate Product</a>
                                    </li>
                                    <li><a href="single-product-group.html">Group Product</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Left Tab</a>
                                    </li>
                                    <li><a href="single-product-tabstyle-3.html">Product Right Tab</a>
                                    </li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery
                                            Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery
                                            Right</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Product Details</a>
                                <ul class="submenu2">
                                    <li><a href="single-product-sticky-left.html">Product Sticky
                                            Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky
                                            Right</a></li>
                                    <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a href="shop.html">New Arrivals</a></li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="submenu2">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-two-column.html">Blog Two Column</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-gallery.html">Blog Details Gallery</a></li>
                            <li><a href="blog-details-audio.html">Blog Details Audio</a></li>
                            <li><a href="blog-details-video.html">Blog Details Video</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="contact.html">Contact</a>
                    </li>

                </ul>
            </nav>

            <div class="offcanvas-settings">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                            <ul class="submenu2">
                                <li><a href="login-register.html">Login</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                            <ul class="submenu2">
                                <li><a href="javascript:void(0)">€ Euro</a></li>
                                <li><a href="javascript:void(0)">$ US Dollar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                            <ul class="submenu2">
                                <li><a href="javascript:void(0)"><img src="./assets/images/icons/en-gb.png" alt=""> English</a></li>
                                <li><a href="javascript:void(0)"><img src="./assets/images/icons/de-de.png" alt=""> Germany</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="offcanvas-widget-area">
                <div class="off-canvas-contact-widget">
                    <div class="header-contact-info">
                        <ul class="header-contact-info-list">
                            <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                            <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <!--Off Canvas Widget Social Start-->
                <div class="off-canvas-widget-social">
                    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                </div>
                <!--Off Canvas Widget Social End-->
            </div>
        </div>
    </div>

</div>
<!-- Offcanvas Menu End -->

<!-- main-search start -->
<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><i class="fa fa-times"></i></button>
    </div>
    <div class="sidebar-search-input">
        <form action="#">
            <div class="form-search">
                <input id="search" class="input-text" value="" placeholder="" type="search">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
        <p class="form-description">Hit enter to search or ESC to close</p>
    </div>
</div>
<!-- main-search start -->


<!-- Page Banner Section Start -->

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col--md-12 col-lg-12">
      <img src="assets/images/bg/breadcrumb.png">
      
    </div>
  </div>
</div>

<!-- <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>Shop</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div> -->
<!-- Page Banner Section End -->
<!-- Shop Section Start -->
<div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-20 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area">
                    <div class="row">
                        <div class="col-12">
                            <!-- Grid & List View Start -->
                            <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                <div class="grid-list-option d-flex">
                                    <ul class="nav">
                                        <li>
                                            <a class="active show" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                        </li>
                                    </ul>
                                    <p>Showing 1–9 of 41 results</p>
                                </div>
                                <!--Toolbar Short Area Start-->
                                <div class="toolbar-short-area d-md-flex align-items-center">
                                    <div class="toolbar-shorter ">
                                        <label>Sort By:</label>
                                        <select class="wide">
                                            <option data-display="Select">Nothing</option>
                                            <option value="Relevance">Relevance</option>
                                            <option value="Name, A to Z">Name, A to Z</option>
                                            <option value="Name, Z to A">Name, Z to A</option>
                                            <option value="Price, low to high">Price, low to high</option>
                                            <option value="Price, high to low">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <!--Toolbar Short Area End-->
                            </div>
                            <!-- Grid & List View End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="shop-product">
                                        <div id="myTabContent-2" class="tab-content">
                                            <div id="grid" class="tab-pane fade active show">
                                                <div class="product-grid-view">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Stylish Design Chair</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Miro Dining Table</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$113.00</span> <span class="main-price discounted">$180.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Janus Table Lamp</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$86.00</span> <span class="main-price discounted">$150.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Discus Floor and Table</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$290.00</span> <span class="main-price discounted">$330.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">Sale</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Sled Mini Sideboard</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$90.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Mega 2 Seater Sofa</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$390.00</span> <span class="main-price discounted">$470.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Sentei Pruning Shears</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$65.00</span> </p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-29%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Affordances Side Table</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$280.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-9.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">Sale</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Tripod lampshade</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$250.00</span> <span class="main-price discounted">$280.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$180.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Classic Chair</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$60.00</span> </p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Classic Chair Wodden</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$183.00</span> <span class="main-price discounted">$200.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Classic Table Wodden</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$290.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                        <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action">
                                                                        <ul>
                                                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h3 class="title"> <a href="single-product.html">Miniature Almari</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$230.00</span> <span class="main-price discounted">$250.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="list" class="tab-pane fade">
                                                <div class="product-list-view">
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Miro Dining Table</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$210.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Stylish Design Chair</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Janus Table Lamp</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$130.00</span> <span class="main-price discounted">$150.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$190.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">Sale</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Affordances Side Table</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span>-20%</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$153.00</span> </p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span>-29%</span>
                                                                        </div>
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <a href="single-product.html">
                                                                            <img src="./assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$287.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-30 mb-sm-40 mb-xs-30">
                                <div class="col">
                                    <ul class="page-pagination">
                                        <li class="active"><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">05</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Section End -->
<!-- Newsletter Section Start -->
<div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newsletter-content">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscribe Today for free and save 10% on your first purchase.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-wrap">
                    <div class="newsletter-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" placeholder="Enter Your Email Address Here..." required>
                            <button type="submit" value="submit">SUBSCRIBE!</button>
                        </form>

                    </div>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section End -->
<!--Footer section start-->
<footer class="footer-section section bg-gray">

    <!--Footer Top start-->
    <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10">
        <div class="container">
            <div class="row">

                <!--Footer Widget start-->
                <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">Opening Time</span></h4>
                    <p class="mb-15">Mon – Fri: 8AM – 10PM</p>
                    <p class="mb-15">Sat: 9AM-8PM</p>
                    <p class="mb-15">Sun: Closed</p>
                    <h4 class="opeaning-title">We Work All The Holidays</h4>
                </div>
                <!--Footer Widget end-->


                <!--Footer Widget start-->
                <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">Quick Link</span></h4>
                    <ul class="ft-menu">
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Shipping Information</a></li>
                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">Information</span></h4>
                    <ul class="ft-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shopping Guide</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Store</a></li>
                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget text-lg-right text-left col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h2>123 Widget Street Acmeville, AC-1209</h2>
                    <p class="contact-text">demo@example.com</p>
                    <p class="contact-text">+0123456789</p>
                </div>
                <!--Footer Widget end-->
            </div>
        </div>
    </div>
    <!--Footer Top end-->

    <!--Footer bottom start-->
    <div class="footer-bottom section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 ft-border pt-25 pb-25">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="copyright text-left">
                                <p class="copyright">&copy; 2021 <strong>Nelson</strong> Made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/"><strong>HasThemes</strong></a>.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment-getway text-lg-right text-center">
                                <img src="./assets/images/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->

</footer>
<!--Footer section end-->
<!-- Modal Area Strat -->
<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images">
                                    <div class="lg-image">
                                        <img src="./assets/images/product/large-product/l-product-1.jpg" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="./assets/images/product/large-product/l-product-2.jpg" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="./assets/images/product/large-product/l-product-3.jpg" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="./assets/images/product/large-product/l-product-4.jpg" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="./assets/images/product/large-product/l-product-5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="product-details-thumbs">
                                    <div class="sm-image"><img src="./assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="./assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="./assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="./assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="./assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                </div>
                            </div>
                            <!--Product Details Left -->
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <!--Product Nav Start-->
                                <div class="product-nav">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!--Product Nav End-->
                                <h2>Aliquam lobortis est turpis mauris egestas eget</h2>
                                <div class="single-product-reviews">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <a class="review-link" href="#">(1 customer review)</a>
                                </div>
                                <div class="single-product-price">
                                    <span class="price new-price">$66.00</span>
                                    <span class="regular-price">$77.00</span>
                                </div>
                                <div class="product-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                </div>
                                <div class="single-product-quantity">
                                    <form class="add-quantity" action="#">
                                        <div class="product-quantity">
                                            <input value="1" type="number">
                                        </div>
                                        <div class="add-to-link">
                                            <button class="btn"><i class="ion-bag"></i>add to cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="wishlist-compare-btn">
                                    <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                    <a href="#" class="add-compare">Compare</a>
                                </div>
                                <div class="product-meta">
                                    <span class="posted-in">
                                    Categories: 
                                    <a href="#">Accessories</a>,
                                    <a href="#">Electronics</a>
                                </span>
                                </div>
                                <div class="single-product-sharing">
                                    <h3>Share this product</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Product Details Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal Area End -->
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<script>

<?php include('include/footer.php') ?>

</script>

</body>
</html>