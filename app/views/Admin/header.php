<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>WIN DU AN 1 Admins</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admins theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/admins/images/favicon.ico">

    <!-- App css -->
    <link href="../../assets/admins/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="../../assets/admins/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    
    <style>
        .description-container {
            max-height: 100px;
            max-width: 300px;
            overflow-y: auto;
            white-space: normal;
        }
        .nameSP {
            max-width: 150px;
        }
        .user-image {
            border-radius: 50%;
        }
        .table {
            margin-top: 20px;
            text-align: center;
        }
        .thead-dark th {
            background-color: #343a40;
            color: white;
        }
        .content, .content_add {
            width: 1220px;
            float: right;
            margin-right: 20px;
            margin-top: 100px;
        }
        .content_add {
            width: 1250px;
        }
    </style>
</head>

<body data-menu-color="light" data-sidebar="default">

    <!-- Begin page -->
    <div id="app-layout">

        <!-- Topbar Start -->
        <div class="topbar-custom">
            <div class="container-xxl">
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li>
                            <button class="button-toggle-menu nav-link ps-0">
                                <i data-feather="menu" class="noti-icon"></i>
                            </button>
                        </li>
                        <li class="d-none d-lg-block">
                            <div class="position-relative topbar-search">
                                <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                                <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li class="d-none d-sm-flex">
                            <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                            </button>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="#" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
                                <div class="noti-scroll" data-simplebar>
                                    <!-- Notifications Items -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                        <div class="notify-icon">
                                            <img src="../../assets/admins/images/users/user-12.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Carl Steadham</p>
                                            <small class="text-muted">5 min ago</small>
                                        </div>
                                        <p class="mb-0 user-msg">
                                            <small class="fs-14">Completed <span class="text-reset">Improve workflow in Figma</span></small>
                                        </p>
                                    </a>
                                    <!-- More notifications items -->
                                </div>
                                <!-- View all Notifications -->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../../assets/admins/images/users/user-11.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    MANH DUC <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                                <!-- Profile Dropdown Items -->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0"><a href="">Home Client</a></h6>
                                </div>
                                <a class='dropdown-item notify-item' href='pages-profile.html'>
                                    <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                    <span>My Account</span>
                                </a>
                                <a class='dropdown-item notify-item' href='auth-lock-screen.html'>
                                    <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                                    <span>Lock Screen</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class='dropdown-item notify-item' href='auth-logout.html'>
                                    <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
    </div>
    <!-- End page -->

</body>

</html>
