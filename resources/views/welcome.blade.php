<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Kependudukan </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Template Main CSS File -->
    <link href="/css/style2.css" rel="stylesheet">

    </head>
  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <a href="index"><img src="/img/logo_disdukcapil.png" alt="" class="img-fluid"></a>
        </div>
        <nav id="navbar" class="navbar">
          <ul>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to Dinas Kependudukan dan Pencatatan Sipil Kabupaten Cirebon</h2>
          </div>
        </div>
      </div>
    </section><!-- End Hero -->

       <!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <!-- Kolom Kiri: Hubungi Kami -->
        <div class="col-lg-3">
          <h5>Hubungi Kami</h5>
          <p>Komplek Perkantoran Pemerintah Kabupaten Cirebon, Jalan Sunan Muria No.4, Kelurahan Sumber, Kabupaten Cirebon 45611</p>
          <p>Email: <a href="mailto:disdukcapil@cirebonkab.go.id">disdukcapil@cirebonkab.go.id</a></p>
          <p>YT: <a href="https://www.youtube.com/@disdukcapilkabupatencirebo6444" target="_blank">@disdukcapilkabupatencirebo6444</a></p>
          <p>IG: <a href="https://www.instagram.com/disdukcapilkabcirebon/" target="_blank">@disdukcapilkabupaten</a></p>
        </div>

        <!-- Kolom Tengah: Tautan -->
        <div class="col-lg-3">
          <h5>Tautan</h5>
          <ul>
            <li><a href="https://dukcapil.kemendagri.go.id/" target="_blank">Ditjen Dukcapil Kemendagri</a></li>
            <li><a href="https://cirebonkab.go.id/" target="_blank">Pemerintah Kabupaten Cirebon</a></li>
          </ul>
        </div>

        <!-- Kolom Kanan: Peta Lokasi Kami --> 
        <div class="col-lg-6">
          <h5>Peta Lokasi Kami</h5>
          <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.123456789!2d108.480176!3d-6.765835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6edfcfffffff07%3A0x7a4dfc6f4e2cdcd5!2sDinas%20Kependudukan%20dan%20Pencatatan%20Sipil%20Kabupaten%20Cirebon!5e0!3m2!1sid!2sid!4v167123456789"
              width="100%" 
              height="400" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</footer>

      <div class="container">
        <div class="copyright">
          &copy; admin
        </div>
       </div>
    </footer><!-- End Footer -->

   
  </body>
</html>
