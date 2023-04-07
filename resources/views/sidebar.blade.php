
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Edifarm</title>
      
      <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/libs.min.css">
      <link rel="stylesheet" href="css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      
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
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  ms-auto navbar-list">
                          <!-- <li>
                              <a href="postingan" class="  d-flex align-items-center">
                                  <i class="ri-home-line"></i>
                              </a>
                          </li> -->
                           <li class="nav-item dropdown">
                              <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/user/1.jpg" class="img-fluid rounded-circle me-3" alt="user">
                                  <div class="caption">
                                      <h6 class="mb-0 line-height">Wishal Azharyan Al Hisyam</h6>
                                  </div>
                              </a>
                              <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                                  <div class="card shadow-none m-0">
                                       <div class="card-header  bg-primary">
                                          <div class="header-title">
                                              <h5 class="mb-0 text-white">Hello Wishal Azharyan Al Hisyam</h5>
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
    <footer class="iq-footer bg-white">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-6">
                <ul class="list-inline mb-0">
                   <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                   <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
                </ul>
             </div>
             <div class="col-lg-6 d-flex justify-content-end">
                Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
             </div>
          </div>
       </div>
    </footer>    <!-- Backend Bundle JavaScript -->
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