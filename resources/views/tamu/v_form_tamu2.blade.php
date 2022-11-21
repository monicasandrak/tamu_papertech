
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visitor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template-tamu/assets')}}/img/favicon.png" rel="icon">
  <link href="{{asset('template-tamu/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template-tamu/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template-tamu/assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template-tamu/assets')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template-tamu/assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template-tamu/assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template-tamu/assets')}}/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="pti@id.papertech.com">pti@id.papertech.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62-260 - 710-645</span></i>
      </div>
      
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('template-tamu/assets')}}/img/logo.png" alt=""> -->
        <h1>PT. Papertech Indonesia<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <!-- <li><a href="#about">About</a></li>
          <li><a href="#services">Keberlangsungan</a></li>
          <li><a href="#contact">Contact</a></li> -->
          <li><a href="#form_tamu">Form Tamu (Visitor)</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
      
      
      
      
                                
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <br><span>Sistem Informasi Visitor</span></h2>
          <p>Sistem ini diperuntukan untuk tamu yang berkunjung dan memiliki keperluan ke PT. Papertech Indonesia.</p>
          <!-- <p><b>Isilah form tamu dibawah ini ! </b></p> -->
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/form_tamu/add" class="btn-get-started">Silahkan Isi Form Tamu</a>
    
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{asset('template-tamu/assets')}}/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
        <br> <br> <br> <br>
        <br> <br> <br> <br>
        <br> <br> <br> <br>
        <br> <br> <br> <br>
      </div>
    </div>

    

    </div>
  </section>
  <!-- End Hero Section -->

  

    <!-- ======= Form Tamu Section ======= -->
    <section id="form_tamu" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Form Tamu (Visitor)</h2>
          <p>Silahkan Isilah Form Tamu (Visitor) di Bawah Ini !</p>
        </div>
        <table id="example1" class="table table-bordered table-striped">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('pesan') }}
        </div>
        @endif
        </table>
              @if(session('success'))
                <p class="alert bg-green alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">{{session('success')}} &times;</a></p>
              @endif
              @if (session('error'))
                <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
              @endif
              @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
              @endif

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-justify justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Raya Cipeundeuy Km. 1, Desa Cipeundeuy
                    Kecamatan Cipeundeuy, Kabupaten Subang Jawa Barat -41272, Indonesia</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>pti@id.papertech.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Phone:</h4>
                  <p> +62-260 - 710-645</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Fax:</h4>
                  <p> +62-260 - 710-644</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Website:</h4>
                  <p>www.papertech.com</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

                  
          <div class="col-lg-8">
            <div class="card">
              <form action="{{route('insert_form_tamu')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="body">                  
                    <div class="form-group mt-3">
                      <input type="hidden" class="form-control" name="id_tamu" id="id_tamu" placeholder="ID Tamu" value="{{ $id_baru }}" readonly>
                    </div>
                    <div class="form-group mt-3">
                      <label for="nama_tamu">Nama</label>
                      <input type="text" class="form-control" name="nama_tamu" id="nama_tamu" placeholder="Masukan Nama Tamu" value="{{old('nama_tamu')}}" >
                    </div>
                    <div class="form-group mt-3">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{old('alamat')}}">
                    </div>
                    <div class="form-group mt-3">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" value="{{old('pekerjaan')}}">
                    </div>
                    <div class="form-group mt-3">
                      <label for="keperluan">Keperluan</label>
                      <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Masukan Keperluan" value="{{old('keperluan')}}">
                    </div>
                    <div class="form-group mt-3">
                      <label for="bertemu_dengan">Bertemu Dengan</label>
                      <input type="text" class="form-control" name="bertemu_dengan" id="bertemu_dengan" placeholder="Masukan Bertemu Dengan" value="{{old('bertemu_dengan')}}">
                    </div>
                    <div class="form-group mt-3">
                      <label for="no_ktp">Nomor KTP/Identitas</label>
                      <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Masukan Nomor KTP/Identitas" value="{{old('no_ktp')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Foto KTP</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="foto_ktp" class="custom-file-input" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label for="no_kendaraan">Nomor Kendaraan</label>
                      <input type="text" class="form-control" name="no_kendaraan" id="no_kendaraan" placeholder="Masukan Nomor Kendaraan" value="{{old('no_kendaraan')}}">
                    </div>
                    <div class="form-group mt-3">
                      <label for="jam_masuk">Jam Masuk</label>
                      <input type="time" class="form-control" name="jam_masuk" id="jam_masuk" placeholder="Masukan Jam Masuk" value="{{old('jam_masuk')}}">
                    </div>
                    <br>
                        

                        <div class="text-center"><button type="submit">SUBMIT</button></div>
            
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
       
    </section>
    <!-- End Form Tamu Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
   <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
  <!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
   <!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Sistem Informasi Visitor</span>
          </a>
          <p>Sistem ini diperuntukan untuk tamu yang berkunjung dan memiliki keperluan ke PT. Papertech Indonesia</p>
          <!-- <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div> -->
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#service">Keberlangsungan</a></li>
            <li><a href="#contact">Contact</a></li>
  
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Location</h4>
          <p>
          Jl. Raya Cipeundeuy Km. 1, Desa Cipeundeuy
          Kecamatan Cipeundeuy, Kabupaten Subang
          Jawa Barat -41272, Indonesia <br><br>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          
            <strong>Phone:</strong> +62-260 - 710-645<br>
            <strong>Fax:</strong> +62-260 - 710-644<br>
            <strong>Email:</strong> pti@id.papertech.com<br>
            <strong>Website:</strong> www.papertech.com<br>

          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; @php echo date("Y"); @endphp <strong><span>Sistem Informasi Visitor</span></strong> by Rissa Politeknik Negeri Subang
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template-tamu/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template-tamu/assets')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('template-tamu/assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template-tamu/assets')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('template-tamu/assets')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('template-tamu/assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template-tamu/assets')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template-tamu/assets')}}/js/main.js"></script>

</body>

</html>