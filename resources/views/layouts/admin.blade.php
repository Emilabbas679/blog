<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:48:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/favicon.ico">

    <title>@yield("title")| Admin | {{env('APP_NAME')}}</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="/back/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="/back/css/style.css">
    <link rel="stylesheet" href="/back/css/skin_color.css">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-info">

<div class="wrapper">

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-between">
            <a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block mx-10 push-btn" data-toggle="push-menu" role="button">
                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
            </a>
            <!-- Logo -->
            <a href="index-2.html" class="logo">
                <!-- logo-->
                <div class="logo-lg">
                    <span class="light-logo"><img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/logo-light-text.png" alt="logo"></span>
                    <span class="dark-logo"><img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/logo-light-text.png" alt="logo"></span>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top pl-10">
            <div class="container">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
                                <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                                <i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @include('partials.admin.sidebar')

    @yield("content")


    <footer class="main-footer">
        <div class="container">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Now</a>
                    </li>
                </ul>
            </div>
            &copy; 2020 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar">

        <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="mdi mdi-message-text"></i></a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Users</p>
                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                </div>
                <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                    <input type="text" name="s" placeholder="Search" class="w-p100">
                </div>
                <div class="media-list media-list-hover mt-20">
                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Todo List</p>
                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                </div>
                <ul class="todo-list mt-20">
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                        <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                        <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                        <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                        <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                        <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                        <span class="text-line">Maecenas scelerisque</span>
                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                        <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                        <span class="text-line">Vivamus nec orci</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                        <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                        <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                        <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                        <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="/back/js/vendors.min.js"></script>
<script src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/assets/icons/feather-icons/feather.min.js"></script>

<script src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

<!-- Power BI Admin App -->
<script src="/back/js/template.js"></script>
<script src="/back/js/demo.js"></script>
<script src="/back/js/pages/dashboard.js"></script>

@yield('js')
</body>

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:52:51 GMT -->
</html>
