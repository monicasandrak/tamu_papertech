<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Visitor PT. Papertech Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template/assets')}}/img/favicon.png" rel="icon">
  <link href="{{asset('template/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/assets')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template/assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template/assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template/assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template/assets')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('template/assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- template/assets Main CSS File -->
  <link href="{{asset('template/assets')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * template/assets Name: Arsha - v4.9.1
  * template/assets URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template/assets-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">PT. Papertech Indonesia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('template/assets')}}/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="getstarted scrollto" href="#contact">Silahkan Isi Form</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Welcome to Our Website</h1>
          <h2>Website ini diperuntukan untuk tamu yang mempunyai keperluan ke PT. Papertech Indonesia</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#contact" class="btn-get-started scrollto">Silahkan Isi Form</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('template/assets')}}/img/papertech.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    

   

    

 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Visitor Slip</h2>
          <p>Tamu diwajibkan mengisi form ini terlebih dahulu untuk bisa masuk ke area PT. Papertech Indonesia</p>
        </div>

  

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="email" id="alamat" required>
                </div>
              </div>
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
              </div>
              <div class="form-group">
                <label for="bertemu_dengan">Bertemu Dengan</label>
                <input type="text" class="form-control" name="bertemu_dengan" id="bertemu_dengan" required>
              </div>
              <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" class="form-control" name="no_ktp" id="no_ktp" required>
              </div>
              <div class="form-group">
                <label for="foto_ktp">Foto KTP</label>
                <input type="text" class="form-control" name="foto_ktp" id="foto_ktp" required>
              </div>
              <div class="form-group">
                <label for="no_kendaraan">Nomor Kendaraan</label>
                <input type="text" class="form-control" name="no_kendaraan" id="no_kendaraan" required>
              </div>
              <div class="form-group">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="text" class="form-control" name="jam_masuk" id="jam_masuk" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
 <!-- ======= About Us Section ======= -->
 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p>
        Terletak di Jawa Barat – Indonesia, papermill Subang memiliki kapasitas 100.000 ton 
        dan difokuskan untuk memberikan produk dengan spesifikasi yang tinggi dan berkualitas, 
        yang dibutuhkan untuk industri paper core / paper tube.
        </p> 
        <p> 
        Papermill Subang adalah unit yang sangat spesial di grup kami 
        karena diciptakan 100% oleh tim teknis kami, 
        menggunakan instalasi terbaru dan teknologi modern.  
        Saat ini papermill Subang adalah pemimpin di pasar domestik  
        dan telah mengekspor ke negara-negara lain dalam jumlah besar, 
        dikenal karena kualitas produk dan layanan yang tinggi.
        </p>
        
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h5>Produk</h5>

        <br> Coreboard for different applications: </br>

<br> - Industrial cores 
<br> - Edge protectors
<br> - Laminates
<br> - Composite cans
<br> - Dividers 
<br> - Honeycomb 

        
        
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->
  </main><!-- End #main -->

  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
      <h3>LOCATION AND CONTACT</h3>
            
      </div>
    </div>
  </div>
</div>
 
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Location</h4>
            <p>
              Jl. Raya Cipeundeuy Km. 1, Desa Cipeundeuy <br>
              Kecamatan Cipeundeuy, Kabupaten Subang<br>
              Jawa Barat -41272, Indonesia <br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> +62-260 - 710-645<br>
              <strong>Fax:</strong> +62-260 - 710-644<br>
              <strong>Email:</strong> pti@id.papertech.com<br>
              <strong>Website:</strong> www.papertech.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Rissa & Monica</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template/assets-corporate/ -->
        2022 
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/assets')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('template/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template/assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template/assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template/assets')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('template/assets')}}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('template/assets')}}/vendor/php-email-form/validate.js"></script>

  <!-- template/assets Main JS File -->
  <script src="{{asset('template/assets')}}/js/main.js"></script>

</body>

</html>