<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edifarm</title>

    <link rel="shortcut icon" href="images/logo.png" />
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/socialv.css?v=4.0.0">
    <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-dYmLvC1rLz/rJksmDfCmOlk+ymMzfJxYYhX9lhHVQ0UyyB6lAg8bw/+Nz/pL0B5+5Ln03p5xkr06WZ0v/6/OYQ==" crossorigin="anonymous" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="  ">
    <!-- Wrapper Start -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="postingan">
                        <img src="/images/logo.png" class="img-fluid" alt="">
                        <span>Edifarm</span>
                    </a>

                </div>
                <div class="iq-search-bar device-search">
                    <form action="#" class="searchbox">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <input type="text" class="text search-input" placeholder="Search here...">
                    </form>
                </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ms-auto navbar-list1">
                        <li>
                            <a href="/postingan" class="d-flex align-items-center">
                                <img src="images/homeijo.png" class="postingan">
                            </a>
                        </li>
                        <li>
                            <form class="d-flex align-items-center-mt" data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                                <input type="button" style="border:none; height: 17px; width: 17px; margin-top: -20px; margin-right: 35px; margin-left: -25px;"><a href="javascript:void();"><img src="images/addijo.png" class="addposting" style="height: 17px; width: 17px; margin-top: -6px; margin-right: 35px; margin-left: -15px;"></a>
                            </form>
                        </li>
                        <li>
                            <a href="/profile" class="d-flex align-items-center">
                                <img src="images/profileijo.png" class="profile">
                            </a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ms-auto navbar-list">
                            <li class="nav-item dropdown">
                                <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{session()->get('photo') }}"  class="img-fluid rounded-circle me-3" alt="user">
                                    <div class="caption">
                                        <h6 class="mb-0 line-height">{{session()->get('usernamr') }}</h6>
                                    </div>
                                </a>
                                <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                                    <div class="card shadow-none m-0">
                                        <div class="card-header  bg-primary">
                                            <div class="header-title">
                                                <h5 class="mb-0 text-white">Hello {{session()->get('username') }}</h5>
                                                <span class="text-white font-size-12">Available</span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0 ">
                                            <a href="/profile" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded card-icon bg-soft-primary">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">My Profile</h6>
                                                        <p class="mb-0 font-size-12">View personal profile details.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/edit_profile" class="iq-sub-card iq-bg-warning-hover">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded card-icon bg-soft-warning">
                                                        <i class="ri-profile-line"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Edit Profile</h6>
                                                        <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="btn btn-primary iq-sign-btn" href="/login" role="button">Log
                                                    out<i class="ri-login-box-line ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </div>
    <div id="content-page" class="content-page">
        <div class="container">

            <!-- bagian konten blog -->
            @yield('content')
        </div>
    </div>
    </div>
    </div>
    <!-- Wrapper End-->
    <!-- Backend Bundle JavaScript -->
    <script src="js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="js/slider.js"></script>
    <!-- masonry JavaScript -->
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="js/charts/weather-chart.js"></script>
    <script src="js/app.js"></script>
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="js/lottie.js"></script>
    @include('sweetalert::alert')

    <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true">
            <div class="modal-dialog   modal-fullscreen-sm-down">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                  </div>
                  <div class="modal-body">
                     <div class="d-flex align-items-center">
                        <div class="user-img">
                           <img src="images/user/gallery.png" alt="userimg" class="posting">
                           <html>

                           <head>
                              <title>this is used for the title</title>
                           </head>

                           <body>
                              <h3></h3><br />
                              <form action="process.php" method="POST" enctype="multipart/form-data">
                                 <table>
                                    <tr>
                                       <td>
                                          <h6>Tambahkan foto</h6>
                                       </td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td>
                                       <td>
                                       <td><input type="file" value="upload image" /></td>
                                    </tr>
                                    <tr>
                                       <td></td>
                                       <td></td>
                                    </tr>
                                 </table>
                              </form>
                           </body>

                           </html>
                        </div>
                     </div>
                     <hr>
                     <img src="images/user/location.png" alt="userimg" class="location"> Tambahkan lokasi
                     </ul>
                     <hr>
                     <div class="other-option">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="d-flex align-items-center">
                              <div class="user-img me-3">
                                 <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                              </div>
                           </div>
                           <div class="modal-body">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                    <form class="post-text ms-3 w-100" action="javascript:void();">
                                       <input type="text" class="form-control rounded" placeholder="Tulis keterangan disini..." style="border:none;">
                                    </form>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                  </div>
               </div>
            </div>
         </div>
    <!-- offcanvas start -->

    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text-center me-3 mb-3">
                    <img src="images/icon/08.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Facebook</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="images/icon/09.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Twitter</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="images/icon/10.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Instagram</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="images/icon/11.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Google Plus</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="images/icon/13.png" class="img-fluid rounded mb-2" alt="">
                    <h6>In</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="images/icon/12.png" class="img-fluid rounded mb-2" alt="">
                    <h6>YouTube</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
