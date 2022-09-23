<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laravel.spruko.com/spruha/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:07:12 GMT -->
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
    <title>ACS Management</title>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><span class="shape1"></span><span
                                class="shape2"></span><i class="ti-home sidemenu-icon"></i><span
                                class="sidemenu-label">Dashboard</span></a>
                    </li>
                </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                            class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span
                            class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/datadesain">Basic Tables</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/dataservis">Data Tables</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/barangmasuk">Data Tables</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/barangkeluar">Data Tables</a>
                        </li>
                    </ul>
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
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link" href="#">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="{{ asset('acstemplate/assets/img/brand/logo.png') }}"
                                class="mobile-logo" alt="logo"></a>
                        <a href="index.html"><img src="{{ asset('acstemplate/assets/img/brand/logo-light.png') }}"
                                class="mobile-logo-dark" alt="logo"></a>
                    </div>
                </div>
                <div class="main-header-right">

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
                            <a class="dropdown-item" href="/logout">
                                <i class="fe fe-power"></i> Sign Out
                            </a>
                        </div>
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
               @yield('content')
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->
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
    <script src="{{ asset('acstemplate/assets/plugins/select2/js') }}/select2.min.js"></script>

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

    <!-- Internal Morris js -->
    <script src="{{ asset('acstemplate/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/morris.js/morris.min.js') }}"></script>

    <!-- Circle Progress js-->
    <script src="{{ asset('acstemplate/assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/js/chart-circle.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('acstemplate/assets/js/index.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('acstemplate/assets/js/sticky.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('acstemplate/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('acstemplate/assets/switcher/js/switcher.js') }}"></script>
</body>

<!-- Mirrored from laravel.spruko.com/spruha/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:07:12 GMT -->

</html>
