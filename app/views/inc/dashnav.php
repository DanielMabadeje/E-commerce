<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="<?= URLROOT ?>/img/face16.jpg" alt="profile">
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center"><?= $_SESSION['user_name']; ?></span>
                    <!-- <span class="text-muted font-weight-bold text-center">Director</span> -->
                </div>
            </a>
        </li>
        <li class="nav-item pt-3 active">
            <a class="nav-link d-block" href="<?php echo URLROOT; ?>/">
                <img class="sidebar-brand-logo" src="<?= URLROOT ?>/img/logo-light.svg" alt="">
                <img class="sidebar-brand-logomini" src="<?= URLROOT ?>/img/logo-mini.svg" alt="">
            </a>
            <form class="d-flex align-items-center" action="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Search">
                </div>
            </form>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
                <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/products/">All</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/products/groceries">Groceries</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/products/fruits">Fruits</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/products/bread">Bread</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/products/tech">Tech</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Kitchen Accessories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">provisions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/products/accessories">Accessories</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-forum menu-icon"></i>
                <span class="menu-title">Customers</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="mdi mdi-playlist-play menu-icon"></i>
                <span class="menu-title">Subscriptions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Monthly</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Yearly</a></li>
                </ul>
            </div>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-bell-ring menu-icon"></i>
                <span class="menu-title">Payments</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="mdi mdi-inbox menu-icon"></i>
                <span class="menu-title">Orders</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">My Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Order Status</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Cancel</a></li>
                </ul>
            </div>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-forum menu-icon"></i>
                <span class="menu-title">Trasfers</span>
            </a>
        </li> -->

        <!-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-keyboard-return menu-icon"></i>
                <span class="menu-title">Returns</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-library-books menu-icon"></i>
                <span class="menu-title">Reports</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li> -->
    </ul>
</nav>
<div class="container-fluid page-body-wrapper">
    <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
        </div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
        </div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
        </div>
    </div>
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="<?php echo URLROOT; ?>/dashboard/"><img src="<?= URLROOT ?>/img/logo-mini.svg" alt="logo"></a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" id="messageDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email-outline"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?= URLROOT ?>/img/face1.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                <p class="text-gray mb-0"> 1 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?= URLROOT ?>/img/face6.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                <p class="text-gray mb-0"> 15 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?= URLROOT ?>/img/face7.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                <p class="text-gray mb-0"> 18 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center text-primary font-13">4 new messages</h6>
                    </div>
                </li>
                <li class="nav-item dropdown ml-3">
                    <a class="nav-link" id="notificationDropdown" href="" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <h6 class="px-3 py-3 font-weight-semibold mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-0">New order recieved</h6>
                                <p class="text-gray ellipsis mb-0"> 45 sec ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-0">Server limit reached</h6>
                                <p class="text-gray ellipsis mb-0"> 55 sec ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-0">Kevin karvelle</h6>
                                <p class="text-gray ellipsis mb-0"> 11:09 PM </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 font-13 mb-0 text-primary text-center">View all notifications</h6>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-logout d-none d-md-block mr-3">
                    <a class="nav-link" href="<?= URLROOT ?>/users/logout">Logout</a>
                </li>
                <li class="nav-item nav-logout d-none d-md-block">
                    <button class="btn btn-sm btn-danger" id="myBtn">Add New Product</button>
                </li>
                <li class="nav-item nav-profile dropdown d-none d-md-block">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-text">English </div>
                    </a>
                    <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="">
                            <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                    </div>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">
                        <i class="mdi mdi-home-circle"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>


   