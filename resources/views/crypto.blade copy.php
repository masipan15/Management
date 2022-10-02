<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laravel.spruko.com/spruha/ltr/cryptodashbaord by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:07:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('acstemplate/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>Spruha - Laravel Dashboard Template</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('acstemplate/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('acstemplate/assets/css/style/style.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/colors/default.css') }}" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('acstemplate/assets/css/colors/color.css') }}">

    <!-- Select2 css-->
    <link href="{{ asset('acstemplate/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Owl-carousel css-->
    <link href="{{ asset('acstemplate/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="{{ asset('acstemplate/assets/plugins/multipleselect/multiple-select.css') }}">

    <!-- Sidemenu css-->
    <link href="{{ asset('acstemplate/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    <!-- Switcher css-->
    <link href="{{ asset('acstemplate/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/switcher/demo.css') }}" rel="stylesheet">
</head>

<body class="main-body leftmenu">

    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="demo-icon bg_dark">
                <i class="fa fa-cog fa-spin  text_primary"></i>
            </div>
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3">
                                <a href="http://laravel.spruko.com/spruha/index.html"
                                    class="btn btn-primary btn-block mt-0">View Demo</a>
                                <a href="https://themeforest.net/item/spruha-laravel-admin-dashboard-template/29818213"
                                    class="btn btn-secondary btn-block">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio"
                                    class="btn btn-info btn-block">Our Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="p-3">
                                <a href="index.html" class="btn btn-primary btn-block mt-0">LTR VERSION</a>
                                <a href="https://laravel.spruko.com/spruha/rtl/index"
                                    class="btn btn-success btn-block">RTL VERSION</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Style</h4>
                            <div class="p-3">
                                <a href="index.html" class="btn btn-primary btn-block mt-0">Left Menu</a>
                                <a href="horizontal.html" class="btn btn-success btn-block">Horizontal Menu</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4 class="font-bold text-sm mr-3">Default Theme Switcher</h4>
                            <div class="swichermainleft my-4">
                                <a class="wscolorcode red-btn color blackborder color1" href="#"
                                    data-theme="{{ asset('acstemplate/assets/css/colors/color1.css') }}"></a>
                                <a class="wscolorcode purple-btn color blackborder color2" href="#"
                                    data-theme="{{ asset('acstemplate/assets/css/colors/color2.css') }}"></a>
                                <a class="wscolorcode green-btn color blackborder color3" href="#"
                                    data-theme="{{ asset('acstemplate/assets/css/colors/color3.css') }}"></a>
                                <a class="wscolorcode pink-btn color blackborder color4" href="#"
                                    data-theme="{{ asset('acstemplate/assets/css/colors/color4.css') }}"></a>
                                <a class="wscolorcode orange-btn color blackborder color5" href="#"
                                    data-theme="{{ asset('acstemplate/assets/css/colors/color5.css') }}"></a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Ions Styles</h4>
                            <div class="switch_section my-2">
                                <div class="switch-toggle d-flex">
                                    <span class="mr-auto">Icon Style</span>
                                    <div class="onoffswitch2">
                                        <input type="checkbox" name="onoffswitch2" id="myonoffswitch51"
                                            class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch51" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="switch_section my-2">
                                <div class="switch-toggle d-flex">
                                    <span class="mr-auto">Theme Style</span>
                                    <div class="onoffswitch2">
                                        <input type="checkbox" name="onoffswitch2" id="myonoffswitch52"
                                            class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch52" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Theme Layout</h4>
                            <div class="switch_section d-flex my-4">
                                <div class="d-block text-center mx-auto">
                                    <button type="button" id="background5"
                                        class="bg5 mb-3 wscolorcode1 blackborder"></button>
                                    <span class="badge badge-light tx-12">Dark layout</span>
                                </div>
                                <div class="d-block text-center mx-auto">
                                    <button type="button" id="background6"
                                        class="bg6 mb-3 wscolorcode1 blackborder"></button>
                                    <span class="badge badge-light tx-12">Light layout</span>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Header Styles Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <div class="d-block text-center mx-auto">
                                    <button type="button" id="background3"
                                        class="bg3 mb-3 wscolorcode1 blackborder"></button>
                                    <span class="badge badge-light tx-12">Dark Header</span>
                                </div>
                                <div class="d-block text-center mx-auto">
                                    <button type="button" id="background4"
                                        class="bg4 mb-3 wscolorcode1 blackborder"></button>
                                    <span class="badge badge-light tx-12">Color Header</span>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Leftmenu Styles Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <div class="d-block text-center mx-auto">
                                    <button type="button" id="background1"
                                        class="bg1 wscolorcode1 blackborder"></button>
                                    <span class="badge badge-light tx-12">Color Menu</span>
                                </div>
                                <div class="d-block text-center mx-auto">
                                    <button type="button" id="background2"
                                        class="bg2 wscolorcode1 blackborder"></button>
                                    <span class="badge badge-light tx-12">Light Menu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('acstemplate/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Sidemenu -->
        <div class="main-sidebar main-sidebar-sticky side-menu">
            <div class="sidemenu-logo">
                <a class="main-logo" href="index.html">
                    <img src="{{ asset('acstemplate/assets/img/brand/logo-light.png') }}"
                        class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('acstemplate/assets/img/brand/icon-light.png') }}"
                        class="header-brand-img icon-logo" alt="logo">
                    <img src="{{ asset('acstemplate/assets/img/brand/logo.png') }}"
                        class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img src="{{ asset('acstemplate/assets/img/brand/icon.png') }}"
                        class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body">
                <ul class="nav">
                    <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-home sidemenu-icon"></i><span
                                class="sidemenu-label">Dashboard</span></a>
                    </li>
                    <li class="nav-item active show">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-wallet sidemenu-icon"></i><span
                                class="sidemenu-label">Crypto Currencies</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cryptodashbaord.html">peler</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cryptomarket.html">Marketcap</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cryptocurrencyexchange.html">Currency exchange</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cryptobuysell.html">Buy & Sell</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cryptowallet.html">Wallet</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cryptotranscations.html">Transcations</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-shopping-cart-full sidemenu-icon"></i><span
                                class="sidemenu-label">E-Commerce</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommercedashboard.html">Dashboard</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommerceproducts.html">Products</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommerceproductdetails.html">Product Details</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommercecart.html">Cart</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommercecheckout.html">Checkout</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommerceorders.html">Orders</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ecommerceaccount.html">Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Applications</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="widgets.html"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-server sidemenu-icon"></i><span
                                class="sidemenu-label">Widgets</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-email sidemenu-icon"></i><span
                                class="sidemenu-label">Mail</span><span
                                class="badge badge-warning side-badge">2</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mailinbox.html">Mail-Inbox</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="viewmail.html">View-Mail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-write sidemenu-icon"></i><span
                                class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chat.html">Chat</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cards.html">Cards</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="calendar.html">Calendar</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="contacts.html">Contacts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-face-smile sidemenu-icon"></i><span
                                class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons01.html">Font Awesome</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons02.html">Material Design Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons03.html">Simple Line Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons04.html">Feather Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons05.html">Ionic Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons06.html">Flag Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons07.html">Pe7 Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons08.html">Themify Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons09.html">Typicons Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons10.html">Weather Icons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="icons11.html">Material Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-map-alt sidemenu-icon"></i><span
                                class="sidemenu-label">Maps</span><span
                                class="badge badge-secondary side-badge">2</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mapmapel.html">Mapel Maps</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mapvector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span
                                class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tablebasic.html">Basic Tables</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tabledata.html">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Components</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-package sidemenu-icon"></i><span
                                class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="alerts.html">Alerts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="avatar.html">Avatar</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="buttons.html">Buttons</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="badge.html">Badge</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="dropdown.html">Dropdown</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="thumbnails.html">Thumbnails</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="listgroup.html">List Group</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="navigation.html">Navigation</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="pagination.html">Pagination</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="popover.html">Popover</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="progress.html">Progress</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="spinners.html">Spinners</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mediaobject.html">Media Object</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="typography.html">Typography</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tooltip.html">Tooltip</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="toast.html">Toast</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tags.html">Tags</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-briefcase sidemenu-icon"></i><span
                                class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="accordion.html">Accordion</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="carousel.html">Carousel</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="collapse.html">Collapse</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="counters.html">Counters</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="modals.html">Modals</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="timeline.html">Timeline</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="darggablecard.html">Darggable-Cards</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="sweetalert.html">Sweet Alert</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="rating.html">Ratings</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="search.html">Search</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="userlist.html">Userlist</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="blog.html">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-receipt sidemenu-icon"></i><span
                                class="sidemenu-label">Forms</span><span
                                class="badge badge-info side-badge">6</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formelements.html">Form Elements</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formadvanced.html">Advanced Forms</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formlayouts.html">Form Layouts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formvalidation.html">Form Validation</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formwizards.html">Form Wizards</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="formeditor.html">WYSIWYG Editor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-bar-chart-alt sidemenu-icon"></i><span
                                class="sidemenu-label">Charts</span><span
                                class="badge badge-danger side-badge">5</span></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartmorris.html">Morris Charts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartflot.html">Flot Charts</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartchartjs.html">ChartJS</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartsparkpeity.html">Sparkline &amp; Peity</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="chartechart.html">Echart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">Other Pages</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-palette sidemenu-icon"></i><span
                                class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="profile.html">Profile</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="invoice.html">Invoice</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="pricing.html">Pricing</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="gallery.html">Gallery</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="faq.html">Faqs</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="successmessage.html">Success Message</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="dangermessage.html">Danger Message</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="warningmessage.html">Warning Message</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="empty.html">Empty Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-shield sidemenu-icon"></i><span
                                class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="background.html">Background</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="border.html">Border</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="display.html">Display</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="flex.html">Flex</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="height.html">Height</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="margin.html">Margin</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="padding.html">Padding</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="position.html">Position</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="width.html">Width</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="extras.html">Extras</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-lock sidemenu-icon"></i><span
                                class="sidemenu-label">Custom Pages</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="signin.html">Sign In</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="signup.html">Sign Up</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="forgot.html">Forgot Password</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="reset.html">Reset Password</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="lockscreen.html">Lockscreen</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="underconstruction.html">UnderConstruction</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="error404.html">404 Error</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="error500.html">500 Error</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sidemenu -->
        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="{{ asset('acstemplate/assets/img/brand/logo.png') }}"
                                class="mobile-logo" alt="logo"></a>
                        <a href="index.html"><img src="{{ asset('acstemplate/assets/img/brand/logo-light.png') }}"
                                class="mobile-logo-dark" alt="logo"></a>
                    </div>
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <select class="form-control select2-no-search">
                                <option label="All categories">
                                </option>
                                <option value="IT Projects">
                                    IT Projects
                                </option>
                                <option value="Business Case">
                                    Business Case
                                </option>
                                <option value="Microsoft Project">
                                    Microsoft Project
                                </option>
                                <option value="Risk Management">
                                    Risk Management
                                </option>
                                <option value="Team Building">
                                    Team Building
                                </option>
                            </select>
                        </div>
                        <input type="search" class="form-control" placeholder="Search for anything...">
                        <button class="btn search-btn"><i class="fe fe-search"></i></button>
                    </div>
                </div>
                <div class="main-header-right">
                    <div class="dropdown header-search">
                        <a class="nav-link icon header-search">
                            <i class="fe fe-search header-icons"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="main-form-search p-2">
                                <div class="input-group">
                                    <div class="input-group-btn search-panel">
                                        <select class="form-control select2-no-search">
                                            <option label="All categories">
                                            </option>
                                            <option value="IT Projects">
                                                IT Projects
                                            </option>
                                            <option value="Business Case">
                                                Business Case
                                            </option>
                                            <option value="Microsoft Project">
                                                Microsoft Project
                                            </option>
                                            <option value="Risk Management">
                                                Risk Management
                                            </option>
                                            <option value="Team Building">
                                                Team Building
                                            </option>
                                        </select>
                                    </div>
                                    <input type="search" class="form-control" placeholder="Search for anything...">
                                    <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65">
                                            </line>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown main-header-notification flag-dropdown">
                        <a class="nav-link icon country-Flag">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                                <g fill="#0052b4">
                                    <path
                                        d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                                </g>
                                <g fill="#d80027">
                                    <path
                                        d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                                    <path
                                        d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                                </g>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item d-flex ">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                        src="{{ asset('acstemplate/assets/img/flags/french_flag.jpg') }}"
                                        alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">French</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                        src="{{ asset('acstemplate/assets/img/flags/germany_flag.jpg') }}"
                                        alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Germany</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img
                                        src="{{ asset('acstemplate/assets/img/flags/italy_flag.jpg') }}"
                                        alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Italy</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img
                                        src="{{ asset('acstemplate/assets/img/flags/russia_flag.jpg') }}"
                                        alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">Russia</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                        src="{{ asset('acstemplate/assets/img/flags/spain_flag.jpg') }}"
                                        alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">spain</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link" href="#">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="#">
                            <i class="fe fe-bell header-icons"></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <p class="main-notification-text">You have 1 unread notification<span
                                        class="badge badge-pill badge-primary ml-3">View all</span></p>
                            </div>
                            <div class="main-notification-list">
                                <div class="media new">
                                    <div class="main-img-user online"><img alt="avatar"
                                            src="{{ asset('acstemplate/assets/img/users/5.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Congratulate <strong>Olivia James</strong> for New template start</p>
                                        <span>Oct 15 12:32pm</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user"><img alt="avatar"
                                            src="{{ asset('acstemplate/assets/img/users/2.jpg') }}"></div>
                                    <div class="media-body">
                                        <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13
                                            02:56am</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user online"><img alt="avatar"
                                            src="{{ asset('acstemplate/assets/img/users/3.jpg') }}"></div>
                                    <div class="media-body">
                                        <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12
                                            10:40pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-notification">
                        <a class="nav-link icon" href="chat.html">
                            <i class="fe fe-message-square header-icons"></i>
                            <span class="badge badge-success nav-link-badge">6</span>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user"><img alt="avatar"
                                    src="{{ asset('acstemplate/assets/img/users/1.jpg') }}"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">Sonia Taylor</h6>
                                <p class="main-notification-text">Web Designer</p>
                            </div>
                            <a class="dropdown-item border-top" href="profile.html">
                                <i class="fe fe-user"></i> My Profile
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-edit"></i> Edit Profile
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> Account Settings
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> Support
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-compass"></i> Activity
                            </a>
                            <a class="dropdown-item" href="signin.html">
                                <i class="fe fe-power"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex header-settings">
                        <a href="#" class="nav-link icon" data-toggle="sidebar-right"
                            data-target=".sidebar-right">
                            <i class="fe fe-align-right header-icons"></i>
                        </a>
                    </div>
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                </div>
            </div>
        </div>
        <!-- End Main Header-->
        <!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown header-search">
                            <a class="nav-link icon header-search">
                                <i class="fe fe-search header-icons"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="main-form-search p-2">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <select class="form-control select2-no-search">
                                                <option label="All categories">
                                                </option>
                                                <option value="IT Projects">
                                                    IT Projects
                                                </option>
                                                <option value="Business Case">
                                                    Business Case
                                                </option>
                                                <option value="Microsoft Project">
                                                    Microsoft Project
                                                </option>
                                                <option value="Risk Management">
                                                    Risk Management
                                                </option>
                                                <option value="Team Building">
                                                    Team Building
                                                </option>
                                            </select>
                                        </div>
                                        <input type="search" class="form-control"
                                            placeholder="Search for anything...">
                                        <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown main-header-notification flag-dropdown">
                            <a class="nav-link icon country-Flag">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                                    <g fill="#0052b4">
                                        <path
                                            d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                                    </g>
                                    <g fill="#d80027">
                                        <path
                                            d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                                        <path
                                            d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                                    </g>
                                </svg>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex ">
                                    <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('acstemplate/assets/img/flags/french_flag.jpg') }}"
                                            alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">French</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('acstemplate/assets/img/flags/germany_flag.jpg') }}"
                                            alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">Germany</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('acstemplate/assets/img/flags/italy_flag.jpg') }}"
                                            alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">Italy</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('acstemplate/assets/img/flags/russia_flag.jpg') }}"
                                            alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">Russia</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('acstemplate/assets/img/flags/spain_flag.jpg') }}"
                                            alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">spain</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown ">
                            <a class="nav-link icon full-screen-link">
                                <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                            </a>
                        </div>
                        <div class="dropdown main-header-notification">
                            <a class="nav-link icon" href="#">
                                <i class="fe fe-bell header-icons"></i>
                                <span class="badge badge-danger nav-link-badge">4</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <p class="main-notification-text">You have 1 unread notification<span
                                            class="badge badge-pill badge-primary ml-3">View all</span></p>
                                </div>
                                <div class="main-notification-list">
                                    <div class="media new">
                                        <div class="main-img-user online"><img alt="avatar"
                                                src="{{ asset('acstemplate/assets/img/users/5.jpg') }}"></div>
                                        <div class="media-body">
                                            <p>Congratulate <strong>Olivia James</strong> for New template start</p>
                                            <span>Oct 15 12:32pm</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="main-img-user"><img alt="avatar"
                                                src="{{ asset('acstemplate/assets/img/users/2.jpg') }}"></div>
                                        <div class="media-body">
                                            <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13
                                                02:56am</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="main-img-user online"><img alt="avatar"
                                                src="{{ asset('acstemplate/assets/img/users/3.jpg') }}"></div>
                                        <div class="media-body">
                                            <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct
                                                12 10:40pm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">View All Notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-header-notification mt-2">
                            <a class="nav-link icon" href="chat.html">
                                <i class="fe fe-message-square header-icons"></i>
                                <span class="badge badge-success nav-link-badge">6</span>
                            </a>
                        </div>
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user"><img alt="avatar"
                                        src="{{ asset('acstemplate/assets/img/users/1.jpg') }}"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Sonia Taylor</h6>
                                    <p class="main-notification-text">Web Designer</p>
                                </div>
                                <a class="dropdown-item border-top" href="profile.html">
                                    <i class="fe fe-user"></i> My Profile
                                </a>
                                <a class="dropdown-item" href="profile.html">
                                    <i class="fe fe-edit"></i> Edit Profile
                                </a>
                                <a class="dropdown-item" href="profile.html">
                                    <i class="fe fe-settings"></i> Account Settings
                                </a>
                                <a class="dropdown-item" href="profile.html">
                                    <i class="fe fe-settings"></i> Support
                                </a>
                                <a class="dropdown-item" href="profile.html">
                                    <i class="fe fe-compass"></i> Activity
                                </a>
                                <a class="dropdown-item" href="signin.html">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <div class="dropdown  header-settings">
                            <a href="#" class="nav-link icon" data-toggle="sidebar-right"
                                data-target=".sidebar-right">
                                <i class="fe fe-align-right header-icons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->
        <!-- Main Content-->
        <div class="main-content side-content pt-0">
            <div class="container-fluid">
                <div class="inner-body">


                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Crypto Currencies</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                        <div class="d-flex">
                            <div class="justify-content-center">
                                <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
                                    <i class="fe fe-download mr-2"></i> Import
                                </button>
                                <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
                                    <i class="fe fe-filter mr-2"></i> Filter
                                </button>
                                <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                    <i class="fe fe-download-cloud mr-2"></i> Download Report
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Header -->

                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="owl-carousel  owl-theme">
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Bitcoin BTC</span>
                                                <h3 class="m-0 mt-2">1.343434</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/btc.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Ethereum ETH</span>
                                                <h3 class="m-0 mt-2">3.763674</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/eth.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Jumlah Supplier</span>
                                                <h3 class="m-0 mt-2">2000</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/xrp.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">litecoin LTC</span>
                                                <h3 class="m-0 mt-2">3,635387</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/ltc.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Dash DASH</span>
                                                <h3 class="m-0 mt-2">3,635387</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/dash.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Monero XMR</span>
                                                <h3 class="m-0 mt-2">5,34578</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/xmr.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Jumlah Barang</span>
                                                <h3 class="m-0 mt-2">3000</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/neo.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-muted tx-13 mb-3">Steem STEEM</span>
                                                <h3 class="m-0 mt-2">2,345467</h3>
                                            </div>
                                            <div class="ml-auto mt-auto">
                                                <img src="{{ asset('acstemplate/assets/img/svgs/crypto-currencies/steem.svg') }}"
                                                    class="wd-30 hd-30 mr-2" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row closed -->

                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header border-bottom-0">
                                    <label class="main-content-label my-auto pt-2 mb-1">Assets Allocation</label>
                                    <span class="d-block tx-12 mb-0 mt-1 text-muted">Asset allocation involves
                                        dividing an investment portfolio among different asset categories</span>
                                </div>
                                <div class="card-body crypto-wallet">
                                    <div class="">
                                        <canvas id="crypto-donut" class="ht-200-f "></canvas>
                                    </div>
                                    <div class="chart-circle-value circle-style">
                                        <div class="tx-20 font-weight-bold">55%</div>
                                    </div>
                                </div>

                                <div class="table-responsive border-0">
                                    <table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
                                        <tbody>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="cryp-icon bg-primary my-auto mr-2"> <i
                                                            class="cf cf-btc"></i> </div>
                                                    <div class="media-body ml-3">
                                                        <p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin
                                                            BTC</p>
                                                        <span
                                                            class="tx-15 font-weight-semibold my-auto">$10,245.00</span>
                                                    </div>
                                                </td>
                                                <td class="">0.0215637249</td>
                                                <td>+12.85% <i class="fa fa-arrow-up text-success ml-1"> </i></td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="cryp-icon bg-primary my-auto mr-2"> <i
                                                            class="cf cf-btc"></i> </div>
                                                    <div class="media-body ml-3">
                                                        <p class="mb-1 text-muted font-weight-normal tx-15">Ethereum
                                                            ETH</p>
                                                        <span
                                                            class="tx-15 font-weight-semibold my-auto">$10,245.00</span>
                                                    </div>
                                                </td>
                                                <td class="">0.0253737689</td>
                                                <td>-02.25% <i class="fa fa-arrow-down text-danger ml-1"> </i></td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="cryp-icon bg-primary my-auto mr-2"> <i
                                                            class="cf cf-btc"></i> </div>
                                                    <div class="media-body ml-3">
                                                        <p class="mb-1 text-muted font-weight-normal tx-15">Dash DASH
                                                        </p>
                                                        <span
                                                            class="tx-15 font-weight-semibold my-auto">$10,245.00</span>
                                                    </div>
                                                </td>
                                                <td>0.0253546426</td>
                                                <td>-11.85% <i class="fa fa-arrow-down text-danger ml-1"> </i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-8 col-lg-12 col-md-12">
                            <div class="card card-bitcoin custom-card">
                                <div class="card-header border-bottom-0">
                                    <label class="main-content-label my-auto pt-2 tx-15-f">BTC/USD</label>
                                    <span class="d-block tx-12 mb-0 mt-1 text-muted">Bitcoin is a digital
                                        cryptocurrency made up of processed data blocks used for online and
                                        brick-and-mortar purchases.</span>
                                </div>
                                <div class="card-body">
                                    <div id="btc_chart"></div>
                                </div>
                                <div class="media pl-4 pr-4 pb-4 pt-1">
                                    <div class="media-icon bg-primary crypto-icon my-auto mr-2">
                                        <i class="cf cf-btc tx-20"></i>
                                    </div>
                                    <div class="media-body ml-2">
                                        <div class="row row-sm">
                                            <div class="col"><label>Symbol</label>
                                                <p>BTC</p>
                                            </div>
                                            <div class="col-3">
                                                <label>Price Benchmark</label>
                                                <p>135.00%</p>
                                            </div>
                                            <div class="col">
                                                <label>Price (USD)</label>
                                                <p>$2,457.69</p>
                                            </div>
                                            <div class="col">
                                                <label>Change (24H)</label>
                                                <p>-0.32%</p>
                                            </div>
                                            <div class="col">
                                                <label>Market Cap</label>
                                                <p>$134.17B</p>
                                            </div>
                                        </div><!-- row -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row closed -->

                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-8">
                            <div class="row row-sm">
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body row">
                                            <div class="col-sm-5 d-flex no-block align-items-center">
                                                <div>
                                                    <span class="tx-18 mb-3">Bitcoin</span>
                                                    <h2 class="mb-2 mt-2">3.634528</h2>
                                                    <span class="m-0 tx-15 mt-4 text-muted">$2500 USD</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="chart-wrapper mt-4 ml-2 mr-2">
                                                    <canvas id="cryptoChart2"
                                                        class="chart-dropshadow-info cryptoChart2 overflow-hidden"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <span class="tx-18">Your Profile</span>
                                            <div class="row mt-3">
                                                <div
                                                    class="col-sm-6 my-auto border-right text-centerd-flex no-block align-items-center">
                                                    <div class="d-flex">
                                                        <span class="peity-donut"
                                                            data-peity='{ "fill": ["#6259ca","#f16d75","#19b159"], "innerRadius": 20, "radius": 16, "height": 50, "width": 50}'>10,4,4</span>
                                                        <div class="my-auto d-block ml-3">
                                                            <h6 class="mb-2 tx-16">2.343434</h6>
                                                            <span class="m-0 tx-14 text-muted">$2500 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 my-auto text-sm-center">
                                                    <h2 class="mb-2  mt-3 mt-sm-0">2.343434</h2>
                                                    <span class="m-0 tx-14 mt-3 text-muted">Pending Balance</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header border-bottom-0">
                                    <label class="main-content-label my-auto pt-2">TRADING ACTIVITIES</label>
                                    <span class="d-block tx-12 mb-3 mt-1 text-muted">Cryptocurrency trading is the act
                                        of speculating on cryptocurrency price movements via a CFD trading account, or
                                        buying and selling the underlying coins via an exchange</span>
                                </div>
                                <div class="card-body pt-2 pb-0">
                                    <div class="table-responsive tasks">
                                        <table class="table card-table table-vcenter text-nowrap border">
                                            <thead>
                                                <tr>
                                                    <th class="wd-lg-10p">#</th>
                                                    <th class="wd-lg-10p">Name</th>
                                                    <th class="wd-lg-20p">Price</th>
                                                    <th class="wd-lg-20p text-center">Change</th>
                                                    <th class="wd-lg-20p">Chart</th>
                                                    <th class="wd-lg-20p text-left">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="coin_icon mt-2 d-flex">
                                                        <div class="cryp-icon bg-primary mr-2"> <i
                                                                class="cf cf-btc"></i> </div>
                                                        <span class=" my-auto">Bitcoin <b>BTC</b></span>
                                                    </td>
                                                    <td>USD 680,175.06</td>
                                                    <td class="text-center">
                                                        <span class="text-success ">+1.13%</span>
                                                    </td>
                                                    <td><span
                                                            id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span>
                                                    </td>
                                                    <td class="text-left"><a href="#"
                                                            class="text-success">DELIVERY</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="coin_icon mt-2 d-flex">
                                                        <div class="cryp-icon bg-primary my-auto mr-2"> <i
                                                                class="cf cf-eth"></i> </div>
                                                        <span class=" my-auto">Ethereum <b>ETH</b></span>
                                                    </td>
                                                    <td>USD 345,235.02</td>
                                                    <td class="text-center">
                                                        <span class="text-danger">-1.13%</span>
                                                    </td>
                                                    <td><span
                                                            id="sparkline2">3,6,6,7,4,8,10,4,6,8,3,5,6,9,2,2,5,8,10,6,8,4,6,4</span>
                                                    </td>
                                                    <td class="text-left"><a href="#"
                                                            class="text-danger">CANCEL</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="coin_icon mt-2 d-flex">
                                                        <div class="cryp-icon bg-primary my-auto mr-2"> <i
                                                                class="cf cf-xrp"></i> </div>
                                                        <span class=" my-auto">Ripple <b>XRP</b></span>
                                                    </td>
                                                    <td>USD 235,356.12</td>
                                                    <td class="text-center">
                                                        <span class="text-muted">-2.23%</span>
                                                    </td>
                                                    <td><span
                                                            id="sparkline3">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span>
                                                    </td>
                                                    <td class="text-left"><a href="#"
                                                            class="text-muted">HOLD</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="coin_icon mt-2 d-flex">
                                                        <div class="cryp-icon bg-primary my-auto mr-2"> <i
                                                                class="cf cf-ltc"></i> </div>
                                                        <span class=" my-auto">Litecoin <b>LTC</b></span>
                                                    </td>
                                                    <td>USD 456,235.52</td>
                                                    <td class="text-center">
                                                        <span class="text-danger ">-1.13%</span>
                                                    </td>
                                                    <td><span
                                                            id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span>
                                                    </td>
                                                    <td class="text-left"><a href="#"
                                                            class="text-danger">CANCEL</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12  col-xl-12 col-xxl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header border-bottom-0">
                                    <label class="main-content-label my-auto pt-2">Activity</label>
                                    <span class="d-block tx-12 mb-4 mt-1 text-muted">Activity is one of the many
                                        blockchain consensus algorithms</span>
                                </div>
                                <ul class="crypto-transcation list-unstyled mg-b-0">
                                    <li class="list-item mb-0 pl-3 pr-3 mt-0 pb-3">
                                        <div class="media align-items-center">
                                            <div class="crypto-icon bg-primary-transparent text-primary"> <i
                                                    class="cf cf-btc wd-20 ht-20 text-center tx-18"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <p class="tx-medium mg-b-3 tx-15">Sent Litecoin</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">To bitcoin Address</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto my-auto">
                                            <h5 class="font-weight-semibold tx-16 mb-0">+ 0.0147<i
                                                    class="text-success tx-16 fe fe-arrow-up ml-1"></i></h5>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div class="crypto-icon bg-primary-transparent text-primary"> <i
                                                    class="cf cf-ltc wd-20 ht-20 text-center tx-18"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <p class="tx-medium mg-b-3 tx-15">Sent Ethereum</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Pending</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto my-auto">
                                            <h5 class="font-weight-semibold tx-16 mb-0">- 0.0345<i
                                                    class="text-danger tx-16 fe fe-arrow-down ml-1"></i></h5>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div class="crypto-icon bg-primary-transparent text-primary"> <i
                                                    class="cf cf-dash wd-20 ht-20 text-center tx-18"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <p class="tx-medium mg-b-3 tx-15">Received Dash</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">To Received Address</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto my-auto">
                                            <h5 class="font-weight-semibold tx-16 mb-0">- 0.0346<i
                                                    class="text-danger tx-16 fe fe-arrow-down"></i></h5>
                                        </div>
                                    </li>
                                    <li class="list-item pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div class="crypto-icon bg-primary-transparent text-primary"> <i
                                                    class="cf cf-xrp wd-20 ht-20 text-center tx-18"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <p class="tx-medium mg-b-3 tx-15">Received Ripple</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">To Received Address</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto my-auto">
                                            <h5 class="font-weight-semibold tx-16 mb-0">+ 0.0237<i
                                                    class="text-success tx-16 fe fe-arrow-up ml-1"></i></h5>
                                        </div>
                                    </li>
                                    <li class="list-item pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div class="crypto-icon bg-primary-transparent text-primary"> <i
                                                    class="cf cf-bsd wd-20 ht-20 text-center tx-18"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <p class="tx-medium mg-b-3 tx-15">Received Ripple</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">To Received Address</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto my-auto">
                                            <h5 class="font-weight-semibold tx-16 mb-0">- 0.0348<i
                                                    class="text-danger tx-16 fe fe-arrow-down ml-1"></i></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- row closed -->


                </div>
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->
        <div class="main-footer text-center">
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © 2020 <a href="#">Spruha</a>. Designed by <a
                                href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->
        <!-- Sidebar -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="sidebar-icon">
                <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right"
                    data-target=".sidebar-right"><i class="fe fe-x"></i></a>
            </div>
            <div class="sidebar-body">
                <h5>Todo</h5>
                <div class="d-flex p-3">
                    <label class="ckbox"><input checked type="checkbox"><span>Hangout With friends</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input type="checkbox"><span>System Updated</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top mb-0">
                    <label class="ckbox"><input type="checkbox"><span>Project review</span></label>
                    <span class="ml-auto">
                        <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title=""
                            data-placement="top" data-original-title="Delete"></i>
                    </span>
                </div>
                <h5>Overview</h5>
                <div class="p-4">
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Founder &amp; CEO</span> <span>24</span>
                        </div>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20"
                                class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>UX Designer</span> <span>1</span>
                        </div>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15"
                                class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Recruitment</span> <span>87</span>
                        </div>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45"
                                class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Software Engineer</span> <span>32</span>
                        </div>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
                                class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Project Manager</span> <span>32</span>
                        </div>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
                                class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('acstemplate/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('acstemplate/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('acstemplate/assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('acstemplate/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidemenu js -->
    <script src="{{ asset('acstemplate/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('acstemplate/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('acstemplate/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Peity js-->
    <script src="{{ asset('acstemplate/assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Owl Carousel js -->
    <script src="{{ asset('acstemplate/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Internal Apexchart js-->
    <script src="{{ asset('acstemplate/assets/js/apexcharts.js') }}"></script>

    <!-- Internal Polyfills js-->
    <script src="{{ asset('acstemplate/assets/plugins/polyfill/polyfill.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/polyfill/classList.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/polyfill/polyfill_mdn.js') }}"></script>

    <!-- Internal Morris js -->
    <script src="{{ asset('acstemplate/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/morris.js/morris.min.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('acstemplate/assets/js/apexcharts.js') }}"></script>

    <!-- Sparkline js-->
    <script src="{{ asset('acstemplate/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('acstemplate/assets/js/crypto-dashboard.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('acstemplate/assets/js/sticky.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('acstemplate/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('acstemplate/assets/switcher/js/switcher.js') }}"></script>
</body>

<!-- Mirrored from laravel.spruko.com/spruha/ltr/cryptodashbaord by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:07:16 GMT -->

</html>