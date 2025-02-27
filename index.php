<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ==========================================
                  Box Icons
    =========================================== -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ==========================================
                  Custom CSS
    =========================================== -->
    <link rel="stylesheet" href="style.css" />
    <!-- ==========================================
                  Breakpoint
    =========================================== -->
    <link rel="stylesheet" href="breakpoint.css" />
    <title>Portfolio-Simple</title>
  </head>
  <body>
    <!-- ==========================================
                    Header
    =========================================== -->
    <header class="header">
      <a href="#" class="logo">Portofolio-<span>Ell.</span></a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home" class="active">Beranda</a>
        <a href="#about">Tentang</a>
        <a href="#services">Keterampilan</a>
        <a href="#portfolio">Portofolio</a>
        <a href="#contact">Alamat</a>
      </nav>
    </header>

    <!-- ==========================================
                  Home Section
    =========================================== -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Ravaell Irfan Siburian</h1>
        <h3>And I'm a <span class="multiple-text"></span></h3>
        <div class="social-media">
          <a href=""><i class="bx bxl-facebook"></i></a>
          <a href=""><i class="bx bxl-twitter"></i></a>
          <a href=""><i class="bx bxl-instagram-alt"></i></a>
          <a href=""><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <div class="home-img">
        <img src="assets/image/home1.png" alt="home" />
      </div>
    </section>

    <!-- ==========================================
                  About Section
    =========================================== -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="assets/image/about1.png" alt="about" />
      </div>

      <div class="about-content">
        <h2 class="heading">Tentang <span>Ku</span></h2>
        <p>
        Saya adalah mahasiswa Pendidikan Teknologi Informasi angkatan 2022 
        di Universitas Lampung. Memiliki minat yang besar dalam pengembangan web,
        programming, dan mobile development. Dengan semangat belajar yang tinggi, 
        saya terus mengembangkan keterampilan dalam berbagai teknologi untuk menciptakan solusi inovatif di dunia digital.
        Saya juga menguasai desain grafis, UI/UX, serta berbagai tools seperti Figma, Canva, dan CorelDRAW.
        Dalam pengembangan frontend, saya memiliki keahlian dalam HTML dan CSS, sehingga mampu menciptakan tampilan antarmuka yang menarik dan fungsional.
        </p>
        <a href="#" class="btn">swipe up</a>
      </div>
    </section>

    <!-- ==========================================
                  Services Section
    =========================================== -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Services</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Front End</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque amet
            atque voluptate saepe magni aspernatur id nemo quasi quibusdam
            ratione.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
          <i class="bx bxs-paint"></i>
          <h3>Graphic Design</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
            fugiat quaerat vero magnam? Sunt exercitationem atque distinctio
            deleniti culpa minus.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
          <i class="bx bx-data"></i>
          <h3>Back End</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque amet
            atque voluptate saepe magni aspernatur id nemo quasi quibusdam
            ratione.
          </p>

          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <!-- ==========================================
                  Port0folio Section
    =========================================== -->
    <section class="portfolio" id="portfolio">
      <h2 class="heading">My <span>Portofolio</span></h2>

      <div class="portfolio-container">
        <div class="portfolio-box">
          <img src="assets/image/img1.png" alt="portfolio" />
          <div class="portfolio-layer">
            <h4>Certificate</h4>
            <p>
              Kumpulan Sertifikat dari awal perkuliahan
              2022 sampai sekarang.
            </p>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="assets/image/img7.png" alt="portfolio" />
          <div class="portfolio-layer">
            <h4>Desain Poster</h4>
            <p>
              Beberapa desain Poster yang sudah dibuat.
            </p>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="assets/image/img9.png" alt="portfolio" />
          <div class="portfolio-layer">
            <h4>Instagram</h4>
            <p>
              Akun Instagram yang saya miliki,
              Jangan lupa Follow!!
            </p>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="assets/image/img10.jpeg" alt="portfolio" />
          <div class="portfolio-layer">
            <h4>PLP 2025</h4>
            <p>
              Pengenalan Lingkungan Persekolahan SMKN1 GEDUNG AJI
              Kecamatan Gedung Aji , Kabupaten Tulang Bawang
            </p>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="assets/image/img6.png" alt="portfolio" />
          <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
              cum!
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="assets/image/img6.png" alt="portfolio" />
          <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ut!
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================
                  Address Section
    =========================================== -->
    <section class="contact" id="contact">
      <h2 class="heading">Address <span>Me</span></h2>
      <section class="hero">
        <div class="maps-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!4v1739515531171!6m8!1m7!1sSqq1cGZTpS_dGmvErmsuuQ!2m2!1d-5.380673667959063!2d105.2517776626131!3f66.76003440290677!4f-23.796511051168906!5f0.7820865974627469" 
                width="100%" 
                height="600" 
                style="border:1px solid #ccc; border-radius: 10px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <h3>Location</h3>
          <p>
              Jalan Mayor Sukardi Hamdani No.05, Labuhan Ratu
              Kecamatan Kedaton
              Kota Bandar Lampung
          </p>
    </section>
    </section>

    <!-- ==========================================
                    Footer
    =========================================== -->
    <footer class="footer">
      <div class="footer-text">
      <p>Copyright &copy; 2025 by Ravaaassh | All Rights Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- ==========================================
                  Scroll Reveal
    =========================================== -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ==========================================
                   Typed Js
    =========================================== -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- ==========================================
                  Custom Js
    =========================================== -->
    <script src="main.js"></script>
  </body>
</html>

