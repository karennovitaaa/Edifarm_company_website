

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Edifarm</title>

      <link rel="shortcut icon" href="images/EDIFARM.png" />
      <link rel="stylesheet" href="css/libs.min.css">
      <link rel="stylesheet" href="css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

  </head>
  <body class=" ">

      <div class="wrapper">
    <section class="sign-in-page">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="images/logo_baru2.png" class="img-fluid" alt="logo"></a>
                        <div class="sign-slider overflow-hidden ">
                            <ul  class="swiper-wrapper list-inline m-0 p-0 ">
                                <li class="swiper-slide">
                                    <img src="images/login/tani1.jpeg" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Temukan Teman Baru</h4>
                                    <p>Belum terlambat untuk mengembangkan persahabatan baru atau berhubungan kembali dengan orang-orang.</p>
                                </li>
                                <li class="swiper-slide">
                                    <img src="images/login/tani2.jpeg" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Jelajahi Dunia Baru</h4>
                                    <p>Dunia adalah milikmu dan semua yang ada di dalamnya, ada di luar sana- kerjakan pekerjaanmu dan dapatkan itu.</p>
                                </li>
                                <li class="swiper-slide">
                                    <img src="images/login/tani3.jpg" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Buat Aktivitas Baru</h4>
                                    <p>Cara untuk memulai adalah dengan berhenti berbicara dan mulai melakukan.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Register</h1>
                        <p>Masukkan data email anda untuk mengakses website.</p>
                        <form class="mt-0" method="POST" action="/authRegist">
                        @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control mb-0" id="exampleInputEmail1" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputEmail1">Your Username</label> -->
                                <input type="text" name="username" class="form-control mb-0" id="exampleInputEmail1" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputEmail1">Your Phone Number</label> -->
                                <input type="number" name="phone" class="form-control mb-0" id="exampleInputEmail1" placeholder="Nomor Telepon" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputEmail2">Email address</label> -->
                                <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputEmail2">Born Date</label> -->
                                <input type="date" name="born_date" class="form-control mb-0" id="exampleInputEmail2" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputPassword1">Password</label> -->
                                <input type="text" name="address" class="form-control mb-0" id="exampleInputPassword1" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputPassword1">Confirm Password</label> -->
                                <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="form-check d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="form-check-input" id="customCheck1" required>
                                    <label class="form-check-label" for="customCheck1">Saya menyetujui <a href="#">Syarat dan Ketentuan </a></label>
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Register</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Anda sudah memiliki akun? <a href="login">Log In</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      </div>

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
  </body>
</html>
