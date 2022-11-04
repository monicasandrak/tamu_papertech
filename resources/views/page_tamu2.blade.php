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
          <li><a class="nav-link scrollto" href="{{route('form_tamu')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('form_tamu')}}">About</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  

  <main id="main">

    <!-- ======= Clients Section ======= -->
    

   

    

 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Visitor Slip</h2>
          <p>Tamu diwajibkan mengisi form ini terlebih dahulu untuk bisa masuk ke area PT. Papertech Indonesia</p>
        </div>

  
        <div class="d-flex h-100 justify-content-center align-items-center">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{route('insert_form_tamu')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
            @if(session('success'))
        <p class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">{{session('success')}} &times;</a></p>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dissmissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>a</strong>{{ session('error') }}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
                
             
             <div class="row">
              <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="hidden" name="id_tamu" class="form-control" id="exampleInputEmail1" value="{{ $id_baru }}" readonly>
                    <div class="text-danger">
                          @error('id_tamu')
                              {{ $message}}
                          @enderror
                    </div>
                  </div> 
                <div class="form-group">
                  <label for="nama_tamu">Nama</label>
                  <input type="text" name="nama_tamu" class="form-control" id="nama_tamu" placeholder="Masukan Nama Tamu" value="{{old('nama_tamu')}}">
                  <div class="text-danger">
                    @error('nama_tamu')
                        {{ $message}}
                    @enderror
              </div>
                </div>
              <br>
              <br>
              <br>
            
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{old('alamat')}}">
                  <div class="text-danger">
                    @error('alamat')
                        {{ $message}}
                    @enderror
              </div>
                </div>
                <br>
              <br>
              <br>
             
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" value="{{old('pekerjaan')}}">
                <div class="text-danger">
                    @error('pekerjaan')
                        {{ $message}}
                    @enderror
              </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Masukan Keperluan" value="{{old('keperluan')}}">
                <div class="text-danger">
                    @error('keperluan')
                        {{ $message}}
                    @enderror
              </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
                <label for="bertemu_dengan">Bertemu Dengan</label>
                <input type="text" class="form-control" name="bertemu_dengan" id="bertemu_dengan" placeholder="Masukan Bertemu Dengan" value="{{old('bertemu_dengan')}}">
                <div class="text-danger">
                    @error('bertemu_dengan')
                        {{ $message}}
                    @enderror
              </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
                <label for="no_ktp">Nomor KTP/Nomor Identitas</label>
                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Masukan Nomor KTP/Identitas" value="{{old('no_ktp')}}">
                <div class="text-danger">
                    @error('nomor_ktp')
                        {{ $message}}
                    @enderror
              </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
              <label for="exampleInputFile">Foto KTP</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="foto_ktp" class="custom-file-input" id="exampleInputFile">
                  <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                </div>
                <!-- <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div> 
                <br> -->
                <div class="text-danger">
                    @error('foto_ktp')
                        {{ $message}}
                    @enderror
                </div>
              </div>
            </div>
            <br>
              <br>
              <br>
              <div class="form-group">
                <label for="no_kendaraan">Nomor Kendaraan</label>
                <input type="text" class="form-control" name="no_kendaraan" id="no_kendaraan" placeholder="Masukan Nomor Kendaraan" value="{{old('nomor_kendaraan')}}">
                <div class="text-danger">
                    @error('no_kendaraan')
                        {{ $message}}
                    @enderror
              </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="text" class="form-control" name="jam_masuk" id="jam_masuk" placeholder="Masukan Jam Masuk" value="{{old('jam_masuk')}}">
                <div class="text-danger">
                    @error('jam_masuk')
                        {{ $message}}
                    @enderror
              </div>
              </div>
              <br>
              <br>
              <br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>  -->
              <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
              <!-- <button type="submit" class="btn btn-primary">Update</button> -->
            </form> 
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
 <!-- ======= About Us Section ======= -->
 
  <footer id="footer">


 
    <div class="footer-top">
     
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