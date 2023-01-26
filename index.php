<?php
     require_once 'post-crud/functions/helpers.php';
     require_once 'post-crud/functions/pdo_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Sriwedari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Javascript -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- =======================================================
  * Template Name: Green - v4.10.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:muhammad.120140071@student.itera.ac.id">sriwedari@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +62 822 9912 1403
      </div>
      <div class="social-links d-none d-md-block">
        <!-- 
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        -->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Desa Sriwedari</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Infografis</a></li>
          <li><a class="nav-link scrollto" href="#services">Potensi</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="inner-page.html">BPD</a></li>
              <li><a href="#">Visi Misi</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href='post-crud/auth/login.php'>Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Situs Resmi <span>Desa Sriwedari</span></h2>
              <p class="animate__animated animate__fadeInUp">Selamat Datang di situs resmi Desa Sriwedari Kecamatan Tegineneng.
                Website ini dibuat sebagai sarana untuk memberikan beragam informasi kepada masyarakat khususnya yang berkaitan dengan Desa Sriwedari.
                Pada situs web ini kami isi dengan berita seputar wilayah Desa Sriwedari dan juga akan kami update informasi menarik dan terbaru yang
                penting untuk diketahui masyarakat desa terutama.
              </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat Lebih Lanjut</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Rangkuman Desa Sriwedari</h2>
              <p class="animate__animated animate__fadeInUp">Desa Sriwedari merupakan desa yang 
                berlokasi di Kecamatan Tegineneng Kabupaten Pesawaran dengan tinggi 100 meter 
                dari permukaan laut. Berdasarkan monografi desa Sriwedari tahun 2022, total 
                penduduk Desa Sriwedari mencapai 2.472 jiwa. Desa Sriwedari terbagi menjadi 4 
                dusun. Dusun Srimukti, Dusun Sriwedari, Dusun Sriwungu, dan Desa Srimulyo. 
                Pertanian menjadi salah satu sektor perekonomian yang digeluti oleh hampir seluruh
                masyarakat Desa Sriwedari. Komoditi pertanian berupa padi dengan luas lahan sawah
                sebesar 223 Ha yang mampu menghasilkan hingga 6 ton/Ha. Di samping itu, berkebun, 
                berternak, dan berwirausaha menjadi sumber mata pencaharian masyarakat Desa Sriwedari.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat Lebih Lanjut</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">KKN ITERA 2022/2023</h2>
              <p class="animate__animated animate__fadeInUp">Website ini dikembangkan oleh mahasiswa KKN ITERA periode 2022/2023</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col">
            <div class="icon-box">
              <h4 class="title"><a href=""></a>Penduduk</h4>
              
              <div id="chartPenduduk" style="width:90%; max-width:500px; height:250px;">
              <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Penduduk', 'Sriwedari'],
                  ['Sriwedari (Laki-Laki)',317],
                  ['Sriwedari (Perempuan)',316],
                  ['Srimukti (Laki-Laki)',312],
                  ['Srimukti (Perempuan)',311],
                  ['Sriwungu (Laki-Laki)',321],
                  ['Sriwungu (Perempuan)',302],
                  ['Srimulyo (Laki-Laki)',307],
                  ['Srimulyo (Perempuan)',286]
                ]);

                var options = {
                  title:'Penduduk Sriwedari Berdasarkan Dusun dan Jenis Kelamin'
                };

                var chart = new google.visualization.PieChart(document.getElementById('chartPenduduk'));
                  chart.draw(data, options);
                }
              </script>
              </div>
              <p class="description">Desa Sriwedari memiliki populasi penduduk yang seimbang antara laki-laki dan perempuan dan juga persebaran populasi yang rata disetiap dusunnya. Semua penduduk Desa Sriwedari berkewarganegaraan Indonesia yang memiliki kaum muda yang lebih banyak dibanding dengan kaum tua.</p>
            </div>
          </div>
          <div class="col">
            <div class="icon-box">
              <h4 class="title"><a href="">Pekerjaan</a></h4>
              <div id="chartPekerjaan" style="width:90%; max-width:500px; height:250px;">
              <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Pekerjaan', 'Pekerjaan'],
                    ['Mengurus Rumah Tangga',636],
                    ['Belum/Tidak Bekerja',514],
                    ['Petani/Pekebun',452],
                    ['Pelajar/Mahasiswa',444],
                    ['Buruh Tani/Perkebunan',211],
                    ['Wiraswasta',85],
                    ['Karyawan Swasta',56],
                    ['Buruh Lepas',20],
                    ['PNS',15],
                    ['Lainnya',39]
                  ]);

                var options = {
                  title:'Pekerjaan Penduduk Desa Sriwedari'
                };

                var chart = new google.visualization.PieChart(document.getElementById('chartPekerjaan'));
                  chart.draw(data, options);
                }
              </script>
              </div>
              <p class="description">Mayoritas pekerjaan warga Desa Sriwedari adalah ibu rumah tangga, kemudian banyak yang tidak atau belum bekerja. Pertanian merupakan sektor utama penghasilan keluarga mereka dapat dilihat sebanyak 663 orang bekerja dilahan pertanian.</p>
            </div>
          </div>
          
          <div class="w-100"></div>

          <div class="col">
            <div class="icon-box">
              <h4 class="title"><a href="">Pendidikan</a></h4>
              <div id="chartPendidikan" style="width:90%; max-width:500px; height:250px;">
              <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Pendidikan', 'Pendidikan'],
                    ['Tidak/Belum Sekolah',679],
                    ['Tamat SD/Sederajat',597],
                    ['Tamat SMP/Sederajat',792],
                    ['Tamat SMA/Sederajat',360],
                    ['Tamat DI/II / Sederajat',25],
                    ['Tamat SI/Sederajat',17],
                    ['Tamat SII/Sederajat',2]
                  ]);

                var options = {
                  title:'Tingkat Pendidikan Penduduk Desa Sriwedari'
                };

                var chart = new google.visualization.BarChart(document.getElementById('chartPendidikan'));
                  chart.draw(data, options);
                }
              </script>
              </div>
              <p class="description">Warga Desa Sriwedari memiliki kesadaran yang tinggi terhadap pentingnya pendidikan seperti yang terlihat bahwa jumlah jiwa yang telah tamat sekolah, sedang sekolah bahkan yang sudah kuliah memiliki jumlah yang lebih banyak dibandingkan dengan orang yang putus sekolah ataupun tidak sekolah.</p>
            </div>
          </div>
          <div class="col">
            <div class="icon-box">
              <h4 class="title"><a href="">Etnis</a></h4>
              <div id="chartEtnis" style="width:90%; max-width:500px; height:250px;">
              <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Etnis', 'Etnis'],
                    ['Jawa',2299],
                    ['Sunda',45],
                    ['Lampung',25],
                    ['Madura',17],
                    ['Minang',5],
                    ['Papua,Minang,Batak',3]
                  ]);

                var options = {
                  title:'Etnis Penduduk Desa Sriwedari'
                };

                var chart = new google.visualization.BarChart(document.getElementById('chartEtnis'));
                  chart.draw(data, options);
                }
              </script>
              </div>
              <p class="description">Mayoritas penduduk Desa Sriwedari bersuku jawa yaitu sebanyak 2299 orang.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Infografis Desa Sriwedari</h2>
          <p> </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Profil Desa </h3>
            <p>
              Desa Sriwedari adalah desa yang bertempat di Kecamatan Tegineneng, Pesawaran, Lampung, kode pos 35363. Terdapat 4 dusun yaitu Srimukti, Sriwedari, Sriwungu, dan Srimulyo. Jumlah penduduk sebanyak 2472 orang terdiri dari 1257 laki-laki dan 1215 perempuan dengan total 777 keluarga.
            </p>
      
            <p>
              Di Desa Sriwedari memiliki luas tanah sawah tadah hujan sebesar 223 hektar. Sehingga pekerjaan utama di Desa Sriwedari yaitu sebagai petani dengan komoditas utama padi. Terdapat 24 kelompok tani dengan total anggota aktif laki-laki dan perempuan sebanyak 630 orang. Setiap anggota rata-rata memiliki lahan sendiri sekitar 1-2 hektar.
            </p>
            
            <p>
              Disetiap dusun terdapat taman kanak-kanak, kemudian sekolah dasar berada di Dusun Sriwedari dan Srimulyo, dan sekolah menengah pertama berada di Dusun Sriwedari. Tetapi tidak terdapat sekolah menengah akhir di Desa Sriwedari.
            </p>

            <p>
              Adapun sektor pendapatan lain selain bertani yaitu UMKM sebagai sumber perekonomian sekunder di Desa Siwedari. Sebanyak 62 kelompok UMKM aktif dari berbagai bidang usaha seperti perdagangan, jasa, produsen, distributor, pertanian, keuangan, krator.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="section-title">
          <h2>Potensi</h2>
        </div>
        <div class="row no-gutters">

          <div class="col content-item">
            <span>01</span>
            <h4>Potensi Tanah Sawah</h4>
            <p>Sriwedari memiliki luas lahan sawah tadah hujan sebesar 223 hektar dengan hasil panen sekitar 6 ton per hektar. Padi menjadi komoditas utama pertaninan dan pertanian menjadi pekerjaan utama di Desa Sriwedari.</p>
          </div>

          <div class="col content-item">
            <span>02</span>
            <h4>Potensi Tanamanan Pangan</h4>
            <p>Terdapat 500 keluarga memiliki lahan pertanian tanaman pangan dengan luas lahan kepemilikian kurang dari 10 hektar. Produksi utama tanaman pangan yaitu padi dengan total panen 1400 ton.</p>
          </div>

          <div class="w-100"></div>

          <div class="col content-item">
            <span>03</span>
            <h4>Potensi Tanaman Apotik Hidup</h4>
            <p>Sebanyak 71 keluarga memiliki perkebunan dengan tanaman apotik hidup atau obat herbal.</p>
          </div>

          <div class="col content-item">
            <span>04</span>
            <h4>Potensi Peternakan</h4>
            <p>Sapi, ayam kampung, dan ayam broiler menjadi hewan ternak utama didesa Sriwedari dan adapun beberap orang yang membudidayakan ikan air tawar. Terdapat 908 orang yang aktif beternak.</p>
          </div>


        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>UMKM</h2>
          <p>UMKM (Usaha Mikro Kecil Menengah) yang ada di desa sriwedari sebanyak 62 kelompok UMKM. Beragam Jenis Sektor Usaha yang ada Desa Sriwedari seperti konsumsi, telekomunikasi, otomotif, furnitur, jasa, transportasi, fashion, peternakan, pertanian, dan kuliner. Didusun Sriwedari terdapat 31 kelompok UMKM, 17 kelompok UMKM didusun Srimukti, 7 kelompok UMKM didusun Srimulyo dan dusun Sriwungu.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bx-cart"></i>
              </div>
              <h4><a href="">Perdagangan</a></h4>
              <p>Usaha perdagangan atau usaha dagang adalah sebuah usaha dimana kegiatan utamanya adalah melakukan pembelian barang atau produk untuk kemudian barang atau produk tersebut dijual kembali dan mengambil keuntungan darinya tanpa melakukan perubahan kondisi dari produk yang dijual. Perdagangan merupakan bidang usaha terbanyak yang ada di Sriwedari yaitu sebanyak 35 kelompok yang tersebar di Desa Sriwedari. Beragam jenis sektor yang ada dibidang usaha perdagangan. Dididang ini mereka banyak menjual makanan, kemudian membuka konter pulsa, toko pakaian, dan juga menjual hasil pertanian. Rata-rata omset pertahun yang didapat yaitu sekitar 16 juta rupiah dengan modal antara 2 juta rupiah sampai 70 juta rupiah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-buildings"></i>
              </div>
              <h4><a href="">Jasa</a></h4>
              <p>Bisnis jasa adalah bidang bisnis yang menjual atau menawarkan produk dalam bentuk pelayanan jasa. Bidang jasa merupakan kelompok UMKM terbanyak kedua setelah perdagangan yaitu sebanyak 13 kelompok yang tersebar di Desa Sriwedari. Jasa yang ditawarkan berupa perbaikan otomotif, telekomunikasi, jasa transportasi, jasa pertanin, dan jasa lainnya. Rata-rata omset pertahun yang didapat yaitu sekitar 18 juta rupiah dengan modal antara 5 juta rupiah sampai 50 juta rupiah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-home"></i>
              </div>
              <h4><a href="">produsen</a></h4>
              <p>Produsen melakukan usaha untuk mengelola bahan mentah hingga menjadi barang jadi. Bidang produsen merupakan kelompok UMKM terbanyak ketiga setelah jasa yaitu sebanyak 6 kelompok yang tersebar di Desa Sriwedari. Produksi yang dilakukan seperti pembuatan pakaian, produksi bahan makan mentah atau matang dari peternakan dan pertanian, dan pembuatan furnitur atau perabutan rumah. Rata-rata omset pertahun yang didapat yaitu sekitar 13 juta rupiah dengan modal antara 9 juta supiah sampai 20 juta rupiah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-cycling"></i>
              </div>
              <h4><a href="">Distributor</a></h4>
              <p>Distributor adalah perusahaan yang bertindak sebagai perwakilan atau perantara bagi produsen. Bidang Distributor merupakan kelompok UMKM terbanyak keempat setelah produsen yaitu sebanyak 3 kelompok yang tersebar di Desa Sriwedari. Distribusi yang ditawarkan yaitu sektor furnitur dan konsumsi. Rata-rata omset pertahun yang didapat yaitu sekitar 21 juta rupiah dengan modal antara 10 juta rupiah sampai 35 juta rupiah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-leaf"></i>
              </div>
              <h4><a href="">Pertanian</a></h4>
              <p>Usaha pertanian banyak diartikan sebagai aktivitas manusia dalam memanfaatkan sumber daya hayati yang tersedia untuk menghasilkan bahan pangan, sumber energi, pengelolaan lingkungan hidup, hingga pengadaan bahan baku industri. Bidang usaha pertanian hanya ada 1 kelompok UMKM yang terletak di dusun Sriwedari. Omset pertahun yang didapat yaitu 150 juta rupiah dengan modal 15 juta rupiah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-braille"></i>
              </div>
              <h4><a href="">Lainnya</a></h4>
              <p>Pada bidang lainnya ini terdapat dua kelompok UMKM yaiut bidang keuangan dan kreator. Keduanya berada disektor jasa. Rata-rata omset pertahun yaitu 15 juta rupiah untuk bidang kreator dengan modal 12 juta rupiah dan 65 juta rupiah untuk bidang keuangan dengan modal 50 juta rupiah.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      
    

                
      <div class="container">

        <div class="section-title">
          <h2>Berita</h2>
          <p>Berita terbaru seputar Desa Sriwedari</p>
        </div>
            <?php
                        $query = "SELECT * FROM posts WHERE status = 10";
                        $statement = $pdo->prepare($query);
                        $statement->execute();
                        $posts = $statement->fetchAll();
                        $numOfCols = 3;
                        $rowCount = 0;
                        $bootstrapColWidth = 12 / $numOfCols;
                        foreach ($posts as $post) {
                  if($rowCount % $numOfCols == 0) { ?> <div class="row portfolio-container"> <?php } 
                    $rowCount++; ?>  
                      <div class="col-md-<?php echo $bootstrapColWidth; ?> portfolio-item">
                        <div class="portfolio-wrap">
                        <img src="<?= asset($post->image) ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <h4><?= $post->title ?></h4>
                          <p><?= substr($post->body, 0, 80) ?></p>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title= "<?= $post->title ?><"> <i class="bx bx-plus"></i></a>
                          <a href="<?= 'detail.php?post_id=' . $post->id ?>" title="Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                </div>
        </div>
<?php
    if($rowCount % $numOfCols == 0) { ?> </div> <?php } }?>
     

    </section><!-- End Portfolio Section -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak Kami</h2>
          <p>Silahkan Hubungi kami di kontak berikut. Saran dan kritik kami terima sepenuhnya.<p>
        </div>

        <div class="row">
          
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Desa Sriwedari, Kecamatan Tegineneng, Kabupaten Pesawaran, Lampung, Indonesia.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>officialsriwedari35363@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Nomor Telepon:</h4>
                <p>+6285279995444</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.1790694431656!2d105.10774781374977!3d-5.234545796202008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40cb8dfa83f203%3A0x98cfb16c99166237!2sKantor%20Desa%20Sriwedari!5e0!3m2!1sen!2sbg!4v1674071550769!5m2!1sen!2sbg" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email Kamu</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Memuat</div>
                <div class="error-message"></div>
                <div class="sent-message">Terima kasih atas pesan yang kamu berikan. Semoga dapat membantu desa menjadi lebih baik.</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Sosial Media</h3>
      <p>Berikut link sosial madia Desa Sriwedari.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Hak Cipta <strong><span>Desa Sriwedari</span></strong>. Seluruh Hak Cipta
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        Di Desain Oleh <a href="https://bootstrapmade.com/">KKN-PPM ke-10 Kelompok 63 dan 64</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>