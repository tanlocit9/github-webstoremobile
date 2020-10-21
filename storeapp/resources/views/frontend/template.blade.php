<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Two || Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome-stars.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/ion-fonts.css">
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/assets/css/plugins/timecircles.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="template-color-2">

    <div class="main-wrapper">
        <div class="loading">
            <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
            </div>
        </div>
        <header class="main-header_area-2">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="header-top_nav">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="header-top_right">
                                    <ul>
                                        @if( Auth::check() )
                                        <li>
                                            <a href="{{ route('my_account') }}">Tài khoản</a>
                                        </li>
                                        @endif
                                        <li>
                                            <a href="{{ route('login') }}">Đăng nhập | Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Thanh toán</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-middle_nav">
                                <div class="header-logo_area">
                                    <a href="index.html">
                                        <img src="/assets/images/menu/logo/1.png" alt="Header Logo">
                                    </a>
                                </div>
                                <div class="header-contact d-none d-md-flex">
                                    <i class="fa fa-headphones-alt"></i>
                                    <div class="contact-content">
                                        <p>
                                            Liên hệ
                                            <br>
                                        Số điện thoại: (012) 800 456 789
                                    </p>
                                    </div>
                                </div>
                                <div class="header-search_area d-none d-lg-block">
                                    <form class="search-form" action="#">
                                        <input type="text" placeholder="Search">
                                        <button class="search-button"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-right_area d-none d-lg-inline-block">
                                    <ul>
                                        <li class="mobile-menu_wrap d-flex d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count">03</span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                                <div class="minicart-front_text">
                                                    <span>Cart:</span>
                                                    <span class="total-price">462.4</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-right_area header-right_area-2 d-inline-block d-lg-none">
                                    <ul>
                                        <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count">03</span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul>
                                        <li class="dropdown-holder"><a href="{{ route('home') }}">Home</a>
                                        </li>                     
                                        @if( count(\Helper::category()) > 0)
                                        <li class="megamenu-holder position-static">Điện thoại <i
                                                class="ion-chevron-down"></i>
                                            <ul class="kenne-megamenu">
                                                    @foreach(\Helper::category() as $key => $item )
                                                        @if($key < 4)
                                                        <li><span class="megamenu-title"><a href="{{ route('category', $item->slug) }}">{{ $item->title }}</a></span>
                                                            @if( count($item->childrent) > 0)                                                         
                                                            <ul>
                                                                @foreach($item->childrent as $key => $value )
                                                                @if( $key < 5)
                                                                <li><a href="{{ route('category', $value->slug) }}">{{ $value->title }}</a></li>
                                                                </li>
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                <li><span class="megamenu-title">Xem Thêm</span>
                                                    <ul>
                                                        @foreach(\Helper::category() as $key => $item )
                                                            @if($key >= 4 )
                                                            <li><a href="shop-fullwidth.html">{{ $item->title }}</a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </li>     
                                            </ul>
                                        </li>                                                                        
                                        @endif
                                        <li><a href="javascript:void(0)">Pages <i class="ion-chevron-down"></i></a>
                                            <ul class="kenne-dropdown">
                                                <li><a href="coming-soon_page.html">Coming Soon</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Blog <i class="ion-chevron-down"></i></a>
                                            <ul class="kenne-dropdown">
                                                <li><a href="blog-grid_view.html">Grid View</a></li>
                                                <li><a href="blog-list_view.html">List View</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sticky-header_nav position-relative">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-2 col-sm-6">
                                        <div class="header-logo_area">
                                            <a href="index.html">
                                                <img src="/assets/images/menu/logo/1.png" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 d-none d-lg-block position-static">
                                        <div class="main-menu_area">
                                            <nav class="main-nav d-flex justify-content-center">
                                                <ul>
                                                    <li class="dropdown-holder"><a href="{{ route('home') }}">Home <i
                                                            class="ion-chevron-down"></i></a>
                                                    </li>
                                                    @if( count(\Helper::category()) > 0)
                                                        <li class="megamenu-holder position-static">Điện thoại <i
                                                                class="ion-chevron-down"></i>
                                                            <ul class="kenne-megamenu">
                                                                    @foreach(\Helper::category() as $key => $item )
                                                                        @if($key < 4)
                                                                        <li><span class="megamenu-title">{{ $item->title }}</span>
                                                                            @if( count($item->childrent) > 0)                                                         
                                                                            <ul>
                                                                                @foreach($item->childrent as $key => $value )
                                                                                @if( $key < 5)
                                                                                <li><a href="{{ route('category',$value->slug)}}">{{ $value->title }}</a></li>
                                                                                </li>
                                                                                @endif
                                                                                @endforeach
                                                                            </ul>
                                                                            @endif
                                                                        </li>
                                                                        @endif
                                                                    @endforeach
                                                                <li><span class="megamenu-title">Xem Thêm</span>
                                                                    <ul>
                                                                        @foreach(\Helper::category() as $key => $item )
                                                                            @if($key >= 4 )
                                                                            <li><a href="shop-fullwidth.html">{{ $item->title }}</a></li>
                                                                        @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </li>     
                                                            </ul>
                                                        </li>                                                                        
                                                        @endif
                                                    <li><a href="javascript:void(0)">Pages <i
                                                            class="ion-chevron-down"></i></a>
                                                        <ul class="kenne-dropdown">
                                                            <li><a href="coming-soon_page.html">Coming Soon</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="javascript:void(0)">Blog <i
                                                            class="ion-chevron-down"></i></a>
                                                        <ul class="kenne-dropdown">
                                                            <li><a href="blog-grid_view.html">Grid View</a></li>
                                                            <li><a href="blog-list_view.html">List View</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="header-right_area header-right_area-2">
                                            <ul>
                                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                                <li class="minicart-wrap">
                                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                        <div class="minicart-count_area">
                                                            <span class="item-count">03</span>
                                                            <i class="ion-bag"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                                        <i class="ion-android-search"></i>
                                                    </a>
                                                </li>
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Shopping Cart</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="/assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                                    <span class="product-item_quantity">1 x $145.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="/assets/images/product/2-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum
                                        amet</a>
                                    <span class="product-item_quantity">1 x $150.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="/assets/images/product/3-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque
                                        placeat</a>
                                    <span class="product-item_quantity">1 x $165.80</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$462.4‬0</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="cart.html" class="kenne-btn kenne-btn_fullwidth">Minicart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="checkout.html" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_logo">
                            <a href="{{ route('home') }}">
                                <img src="/assets/images/menu/logo/1.png" alt="Header Logo">
                            </a>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="#"><span
                                        class="mm-text">Home</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home One</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Two</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">
                                                <span class="mm-text">Home Three</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-fullwidth.html">
                                                        <span class="mm-text">Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Shop List</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Full Width</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Single Product Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product-gallery-left.html">
                                                        <span class="mm-text">Gallery Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-gallery-right.html">
                                                        <span class="mm-text">Gallery Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-left.html">
                                                        <span class="mm-text">Tab Style Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-right.html">
                                                        <span class="mm-text">Tab Style Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-left.html">
                                                        <span class="mm-text">Sticky Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-right.html">
                                                        <span class="mm-text">Sticky Right</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Single Product Type</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-slider.html">
                                                        <span class="mm-text">Single Product Slider</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-grid_view.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-list_view.html">
                                                <span class="mm-text">List View</span>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-details.html">
                                                <span class="mm-text">Blog Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">Contact</span>
                                            </a>
                                        </li>
                                        @if( Auth::Check())
                                        <li>
                                            <a href="{{ route('my_account') }}">
                                                <span class="mm-text">Tài khoản</span>
                                            </a>
                                        </li>
                                        @endif
                                        <li>
                                            <a href="{{ route('login') }}">
                                                <span class="mm-text">Đăng nhập | Đăng ký</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="mm-text">Giỏ hàng</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <span class="mm-text">Thanh toán</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <ul class="sub-menu">
                                        @if(Auth::check())
                                        <li>
                                            <a href="{{ route('my_account') }}">
                                                <span class="mm-text">Tài khoản</span>
                                            </a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="{{ route('login') }}">
                                                <span class="mm-text">Đăng nhập | Đăng ký</span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="offcanvas-inner_logo">
                        <a href="shop-left-sidebar.html">
                            <img src="/assets/images/menu/logo/1.png" alt="Munoz's Offcanvas Logo">
                        </a>
                    </div>
                    <div class="short-desc">
                        <p>We are a team of designers and developers that create high quality HTML Template &
                            Woocommerce,
                            Shopify Themes.
                        </p>
                    </div>
                    <div class="offcanvas-component">
                        <span class="offcanvas-component_title">Tài khoản</span>
                        <ul class="offcanvas-component_menu">
                            <li><a href="my-account.html">Đăng ký</a></li>
                            <li><a href="login-register.html">Đăng nhập</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-inner-social_link">
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-search">
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i
                                    class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <div class="slider-area slider-area-2">

            <div class="kenne-element-carousel home-slider home-slider-2 transparent-arrow" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": false,
                "autoplay" : true,
                "fade" : true,
                "autoplaySpeed" : 7000,
                "pauseOnHover" : false,
                "pauseOnFocus" : false
                }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1
                }}
            ]'>
                <div class="slide-item bg-3 animation-style-01 white-color">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="slide-content">
                            <span>Exclusive Offer -20% Off This Week</span>
                            <h2>Accessories <br> Explore Trending</h2>
                                <p class="short-desc">Aliquam error eos cumque aut repellat quasi accusantium inventore necessitatibus. Vel quisquam distinctio in inventore dolorum.</p>
                                <div class="slide-btn">
                                    <a class="kenne-btn transparent-btn" href="shop-left-sidebar.html">shop now</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item bg-4 animation-style-01">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="slide-content">
                            <span>Exclusive Offer -10% Off This Week</span>
                            <h2>Stylist <br> Female Clothes</h2>
                                <p class="short-desc-2">Made from Soft, Durable, US-grown Supima cotton.</p>
                                <div class="slide-btn">
                                    <a class="kenne-btn" href="shop-left-sidebar.html">shop now</a>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        @yield('content')
        <div class="kenne-footer_area bg-smoke_color">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-area">
                                <div class="newsletter-logo">
                                    <a href="javascript:void(0)">
                                        <img src="/assets/images/footer/logo/1.png" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc">Subscribe to our newsleter, Enter your emil address</p>
                                <div class="newsletter-form_wrap">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter email address" />
                                                <button class="newsletter-btn" id="mc-submit"><i
                                                class="ion-android-mail"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="row footer-widgets_wrap">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Shopping</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Product</a></li>
                                            <li><a href="javascript:void(0)">My Cart</a></li>
                                            <li><a href="javascript:void(0)">Wishlist</a></li>
                                            <li><a href="javascript:void(0)">Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Account</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Login</a></li>
                                            <li><a href="javascript:void(0)">Register</a></li>
                                            <li><a href="javascript:void(0)">Help</a></li>
                                            <li><a href="javascript:void(0)">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Men</a></li>
                                            <li><a href="javascript:void(0)">Women</a></li>
                                            <li><a href="javascript:void(0)">Jeans</a></li>
                                            <li><a href="javascript:void(0)">Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright">
                                <span>Copyright &copy; 2019 <a href="javascript:void(0)">Kenne.</a> All rights reserved.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment">
                                <img src="/assets/images/footer/payment/1.png" alt="Kenne's Payment Method">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/assets/js/vendor/popper.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/slick.min.js"></script>
    <script src="/assets/js/plugins/jquery.barrating.min.js"></script>
    <script src="/assets/js/plugins/jquery.counterup.js"></script>
    <script src="/assets/js/plugins/jquery.nice-select.js"></script>
    <script src="/assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <script src="/assets/js/plugins/waypoints.min.js"></script>
    <script src="/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="/assets/js/plugins/timecircles.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/category/index.js"></script>
</body>
</html>